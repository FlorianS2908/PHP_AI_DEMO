"""Gezielte Regressionstests der Inhaltskorrektur; nur Python-Standardbibliothek.

Aufruf im Repo: python pruefberichte/tests/inhaltsreview.py --php php
Startet einen lokalen PHP-Testserver, beendet ihn zuverlässig und schreibt
pruefberichte/inhaltsreview-tests.json. Keine Datenbank erforderlich.
"""
from pathlib import Path
import argparse
import collections
import datetime
import json
import socket
import subprocess
import tempfile
import time
import urllib.error
import urllib.parse
import urllib.request

ROOT = Path(__file__).resolve().parents[2]
parser = argparse.ArgumentParser(description=__doc__)
parser.add_argument('--php', default='php', help='PHP-8-Programm oder vollständiger Pfad')
args = parser.parse_args()
checks = []


def check(name, condition):
    checks.append({'test': name, 'passed': bool(condition)})
    if not condition:
        raise AssertionError(name)


php_files = sorted(ROOT.rglob('*.php'))
syntax_errors = []
for path in php_files:
    result = subprocess.run([args.php, '-n', '-l', str(path)], capture_output=True, text=True)
    if result.returncode:
        syntax_errors.append({'path': str(path.relative_to(ROOT)), 'error': result.stdout + result.stderr})
check('PHP-Syntax aller PHP-Dateien', not syntax_errors)

# Fragen können in mehreren Pools wiederverwendet werden. Innerhalb eines Pools
# müssen IDs eindeutig und alle Antwortschlüssel vollständig/auflösbar sein.
unique_questions = set()
pool_count = 0
for path in ROOT.rglob('*.json'):
    data = json.loads(path.read_text(encoding='utf-8'))
    if not isinstance(data, dict) or not isinstance(data.get('questions'), list):
        continue
    pool_count += 1
    ids = set()
    for q in data['questions']:
        assert q['id'] not in ids, (path, q['id'])
        ids.add(q['id'])
        unique_questions.add(json.dumps(q, sort_keys=True, ensure_ascii=False))
        assert q['text'] and q['explanation'], (path, q['id'])
        if q['type'] in ('single', 'single-choice', 'multiple', 'multiple-choice'):
            answer = q['correct']
            assert len(answer) == len(set(answer)) and answer
            assert all(isinstance(i, int) and 0 <= i < len(q['options']) for i in answer)
            assert len(answer) == 1 if q['type'].startswith('single') else len(answer) > 1
        elif q['type'] == 'matching-postits':
            assert sorted(i['id'] for i in q['items']) == sorted(p['leftId'] for p in q['pairs'])
            assert sorted(i['id'] for i in q['targets']) == sorted(p['rightId'] for p in q['pairs'])
        elif q['type'] in ('order', 'sql-order'):
            assert sorted(i['id'] for i in q['blocks']) == sorted(q['correctOrder'])
        else:
            raise AssertionError('Unbekannter Fragentyp: ' + q['type'])
check('Alle Quizpools: eindeutige IDs, vollständige Antwortschlüssel und Erläuterungen', True)

BASE_PATH = 'PHP_Arbeitsbereich/Summary_Code_Together/CodeTogether/'
foundations = ROOT / BASE_PATH / 'grundlagen'
for filename in ('PHP_PHP_Grundlagen_Loesungen.php', 'PHP_PHP_Kontrollstrukturen_Loesungen.php'):
    result = subprocess.run([args.php, '-n', str(foundations / filename)], capture_output=True, text=True)
    check('Musterlösungen vollständig ausführbar: ' + filename,
          result.returncode == 0 and not result.stderr and 'Warning:' not in result.stdout)
for path in sorted((foundations / 'Uebungen_Start').glob('*.php')):
    result = subprocess.run([args.php, '-n', str(path)], capture_output=True, text=True)
    check('Startdatei ohne PHP-Fehler: ' + path.name,
          result.returncode == 0 and not result.stderr and 'Warning:' not in result.stdout)

# Funktionen direkt gegen die Aufgabenwerte prüfen; Demo-Ausgaben ausblenden.
solution_path = str(foundations / 'PHP_PHP_Uebungsaufgaben_L.php')
php_code = 'ob_start(); require ' + json.dumps(solution_path) + '; ob_end_clean();'
php_code += '''echo json_encode([
    importierePreise([" 12,50 ","8.90","0","1e2","-2,50","12abc","","  ","1.234,56",null,["9,90"]]),
    importierePreise(["500","500,01","12,345","0,10",12]),
    importierePreise([]),
    importiereAnmeldungen(" Mia ; TOM; ; mia; 0; Lena ; tom; ")
]);'''
result = subprocess.run([args.php, '-n', '-r', php_code], capture_output=True, text=True, check=True)
prices, limits, empty, names = json.loads(result.stdout)
check('Preisimport: 4 gültig, 7 Fehler, 12140 Cent',
      (prices['anzahlGueltig'], prices['anzahlFehler'], prices['summeCent']) == (4, 7, 12140))
check('Preisimport: Arrays ablehnen und ursprünglichen Index behalten',
      any(f['index'] == 10 for f in prices['fehler']))
check('Preisimport: Grenzen, Rundung und Nicht-String',
      (limits['anzahlGueltig'], limits['anzahlFehler'], limits['summeCent']) == (3, 2, 51245))
check('Preisimport: leere Liste', empty['anzahlGueltig'] == 0 and empty['summeCent'] == 0)
check('Anmeldeliste: Nulltext behalten, Leerfelder/Dubletten zählen',
      names['liste'] == ['0', 'lena', 'mia', 'tom'] and names['zaehlerPassen']
      and names['urspruenglicheFelder'] == 8 and names['entfernteLeerfelder'] == 2
      and names['entfernteDubletten'] == 2)


class NoRedirect(urllib.request.HTTPRedirectHandler):
    def redirect_request(self, req, fp, code, msg, headers, newurl):
        return None


with socket.socket() as sock:
    sock.bind(('127.0.0.1', 0))
    port = sock.getsockname()[1]
base_url = f'http://127.0.0.1:{port}/'


def request(path, method='GET', values=None, follow=True):
    url = base_url + urllib.parse.quote(path, safe='/?=&%')
    encoded = urllib.parse.urlencode(values or {})
    if method == 'GET' and encoded:
        url += ('&' if '?' in url else '?') + encoded
    req = urllib.request.Request(url, data=encoded.encode() if method == 'POST' else None, method=method)
    opener = urllib.request.build_opener() if follow else urllib.request.build_opener(NoRedirect())
    try:
        response = opener.open(req, timeout=5)
    except urllib.error.HTTPError as error:
        response = error
    body = response.read().decode('utf-8')
    assert not any(s in body for s in ('Warning:', 'Fatal error:', 'Notice:', 'Deprecated:')), body
    return response.code, response.headers, body


with tempfile.TemporaryFile() as log:
    server = subprocess.Popen([args.php, '-n', '-S', f'127.0.0.1:{port}', '-t', str(ROOT)], stdout=log, stderr=log)
    try:
        for attempt in range(50):
            try:
                with socket.create_connection(('127.0.0.1', port), timeout=.1):
                    break
            except OSError:
                time.sleep(.05)
        form = BASE_PATH + 'formularGetPost/'
        for method in ('GET', 'POST'):
            for age in ('0', '120'):
                status, headers, body = request(form + 'auswerten.php', method, {'name': '<b>Ada</b>', 'alter': age})
                check(f'GET/POST-Demo: {method}, Alter {age}, maskierte Ausgabe',
                      status == 200 and '&lt;b&gt;Ada&lt;/b&gt;' in body and '<b>Ada</b>' not in body and f'<dd>{age}</dd>' in body)
        for values, label in [({}, 'fehlt'), ({'name': 'Ada', 'alter': '121'}, 'über Maximum'),
                              ({'name[]': 'Ada', 'alter': '2'}, 'Name als Array'),
                              ({'name': 'Ada', 'alter[]': '2'}, 'Alter als Array'),
                              ({'name': 'Ada', 'alter': '2.5'}, 'Dezimalzahl'),
                              ({'name': ' ', 'alter': '0'}, 'Name leer')]:
            status, headers, body = request(form + 'auswerten.php', 'POST', values, follow=False)
            check('GET/POST-Demo: 303 bei ' + label, status == 303 and headers['Location'].startswith('formular.php?'))
        status, headers, body = request(form + 'formular.php', values={'fehler': '<script>X</script>', 'name': '" autofocus="x'})
        check('Formular: Query-Fehler und wiederbefüllte Werte maskiert',
              '&lt;script&gt;X&lt;/script&gt;' in body and '&quot; autofocus=&quot;x' in body)
        status, headers, body = request(form + 'auswerten.php', 'PUT')
        check('GET/POST-Demo: 405 und Allow', status == 405 and headers['Allow'] == 'GET, POST')

        books = form + 'PHP_Formulare_Alltag_Musterloesungen/01_GET_Buechersuche/goTogether/'
        status, headers, body = request(books + 'auswertung.php', values={'suchbegriff': '<b>PHP</b>'})
        check('Büchersuche: GET-Erfolg sicher anzeigen', status == 200 and '&lt;b&gt;PHP&lt;/b&gt;' in body)
        status, headers, body = request(books + 'auswertung.php', 'POST', {'suchbegriff': 'PHP'})
        check('Büchersuche: nummerierte Methoden-/Feldfehler',
              '1. Methode:' in body and '2. Suchbegriff:' in body and 'role="alert"' in body)
        status, headers, body = request(books + 'auswertung.php', values={'suchbegriff[]': 'PHP'})
        check('Büchersuche: Array abweisen', 'Bitte einen Suchbegriff als Text eingeben.' in body)
        status, headers, body = request(books + 'index.php', values={'error': '<script>X</script>'})
        check('Büchersuche: Fehlermeldung aus URL maskieren', '&lt;script&gt;X&lt;/script&gt;' in body)

        everyday = form + 'PHP_Formulare_Alltag_Musterloesungen/'
        chat = everyday + '02_POST_Chatname/'
        status, headers, body = request(chat + 'index.php')
        check('Chatname: Formular sendet das geforderte Feld alias mit POST',
              'name="alias"' in body and 'method="post"' in body and '<title>' in body)
        status, headers, body = request(chat + 'auswertung.php', 'POST', {'alias': ' Pixel '})
        check('Chatname: POST-Erfolgsausgabe', 'Chatname: Pixel' in body)
        status, headers, body = request(chat + 'auswertung.php', values={'alias': 'Pixel'})
        check('Chatname: GET ist kein POST-Erfolg', 'role="alert"' in body and 'Chatname: Pixel' not in body)
        status, headers, body = request(chat + 'auswertung.php', 'POST', {'alias[]': 'Pixel'})
        check('Chatname: Array wird ohne Warnung abgewiesen', 'role="alert"' in body)
        status, headers, body = request(chat + 'auswertung.php', 'POST', {'alias': '<b>Pixel</b>'})
        check('Chatname: HTML-Ausgabe maskiert', '&lt;b&gt;Pixel&lt;/b&gt;' in body)

        lost = everyday + '03_GET_Fundbuero/'
        for values, keep, missing in [({'gegenstand': 'Schirm', 'farbe': ''}, 'Schirm', 'Farbe'),
                                      ({'gegenstand': '', 'farbe': 'blau'}, 'blau', 'Gegenstand')]:
            status, headers, body = request(lost + 'auswertung.php', values=values)
            check('Fundbüro: gültigen Wert erhalten, Fehler für ' + missing,
                  'value="' + keep + '"' in body and missing + ': Bitte ausfüllen.' in body)
        status, headers, body = request(lost + 'auswertung.php')
        check('Fundbüro: beide Feldfehler sammeln',
              'Gegenstand: Bitte ausfüllen.' in body and 'Farbe: Bitte ausfüllen.' in body)
        status, headers, body = request(lost + 'auswertung.php', values={'gegenstand': 'Schirm', 'farbe': 'blau'})
        check('Fundbüro: Erfolg zeigt beide Werte', 'Gegenstand: Schirm; Farbe: blau' in body)
        status, headers, body = request(lost + 'auswertung.php', values={'gegenstand[]': 'Schirm', 'farbe': 'blau'}, follow=False)
        check('Fundbüro: 303 ohne vorherige Debug-Ausgabe', status == 303 and body == '')
        status, headers, body = request(lost + 'index.php', values={'fehler': '<script>X</script>', 'gegenstand': '\" autofocus=\"x'})
        check('Fundbüro: Fehler und Attribute maskiert',
              '&lt;script&gt;X&lt;/script&gt;' in body and '&quot; autofocus=&quot;x' in body)

        travel = BASE_PATH + 'KI Aufgabe Formular Teil 1/Aufgabe 1/reise.php'
        values = {'reiseziel': '<b>Berlin</b>', 'anreise': '2030-10-10', 'abreise': '2030-10-15',
                  'reisende': '2', 'unterkunft': 'hotel'}
        status, headers, body = request(travel, values=values)
        check('Reise: fünf Tage und maskiertes Ziel', '5 Tage' in body and '&lt;b&gt;Berlin&lt;/b&gt;' in body)
        status, headers, body = request(travel, values={**values, 'anreise': '2030-02-30'})
        check('Reise: nur tatsächlich ungültiges Datum beanstanden',
              'für die Anreise ein gültiges Datum' in body and 'für die Abreise ein gültiges Datum' not in body)
        status, headers, body = request(travel, values={**values, 'abreise': '2030-10-09'})
        check('Reise: Abreise vor Anreise', 'Die Abreise darf nicht vor der Anreise liegen.' in body)
        status, headers, body = request(travel, values={**values, 'anreise': '2020-10-10', 'abreise': '2020-10-15'})
        check('Reise: Vergangenheit als Warnung ohne Debug-Ausgabe',
              'Warnung:' in body and '5 Tage' in body and 'array(' not in body)
        status, headers, body = request(travel, 'PUT')
        check('Reise: 405 und Allow', status == 405 and headers['Allow'] == 'GET, POST')
        status, headers, body = request(BASE_PATH + 'exampleRequireInculde/caller.php')
        check('require_once: zweimal einbinden, Funktionen mehrfach nutzen', body == 'addiere(1, 3): 4\naddiere(5, 2): 7\n')
    finally:
        server.terminate()
        server.wait(timeout=5)

report = {
    'date': datetime.date.today().isoformat(),
    'environment': subprocess.check_output([args.php, '-n', '-v'], text=True).splitlines()[0],
    'scope': 'Syntax aller PHP-Dateien, Quiz-Struktur, neue Starter und korrigierte CodeTogether-Beispiele. Kein DB-/Windows-Laufzeittest.',
    'php_files': len(php_files), 'php_syntax_errors': syntax_errors,
    'quiz_pools': pool_count, 'unique_question_objects': len(unique_questions),
    'checks': checks, 'passed': sum(c['passed'] for c in checks), 'failed': 0,
}
(ROOT / 'pruefberichte/inhaltsreview-tests.json').write_text(json.dumps(report, ensure_ascii=False, indent=2) + '\n', encoding='utf-8')
print(json.dumps({k: report[k] for k in ('php_files', 'quiz_pools', 'unique_question_objects', 'passed', 'failed')}))
