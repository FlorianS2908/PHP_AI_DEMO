"""Zweite Korrektur: fünf KI-Projekte und vier Array-/Funktionsübungen.
Aufruf: python pruefberichte/tests/nachreview.py --php php
Nur Python-Standardbibliothek; startet und beendet einen lokalen PHP-Server.
"""
from pathlib import Path
import argparse
import copy
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
parser.add_argument('--php', default='php')
args = parser.parse_args()
checks = []


def check(name, success):
    checks.append({'test': name, 'passed': bool(success)})
    if not success:
        raise AssertionError(name)


# Erwartungswerte sind direkt aus den Aufgabenregeln hergeleitet.
solution = ROOT / 'PHP_Arbeitsbereich/Summary_Code_Together/CodeTogether/phparray/loesungen_testarray.php'
php = 'ob_start(); require ' + json.dumps(str(solution)) + '; ob_end_clean();'
php += '''
$tests = [];
function pruefe($titel, $ist, $soll) {
    global $tests;
    $tests[] = ['test' => $titel, 'passed' => $ist === $soll];
}
pruefe('Mengen: Startdaten', negativeMengenKorrigieren(['Tee'=>8,'Kaffee'=>-3,'Kakao'=>'0','Saft'=>null,'Wasser'=>'','Milch'=>'abc']), ['Tee'=>8,'Kaffee'=>0,'Kakao'=>0]);
pruefe('Mengen: Ganzzahltexte und negatives Vorzeichen', negativeMengenKorrigieren(['A'=>' 2 ','B'=>'-2']), ['A'=>2,'B'=>0]);
pruefe('Mengen: Bool, Array und Dezimalzahl entfernen', negativeMengenKorrigieren(['A'=>true,'B'=>[2],'C'=>'2.5']), []);
pruefe('Mengen: ungültiges Array', negativeMengenKorrigieren(null), []);
pruefe('Mengen: leeres Array', negativeMengenKorrigieren([]), []);
$lager = ['Tee'=>5,'Kaffee'=>0];
pruefe('Bestand: Lieferung und Trim', bestandErgaenzen($lager,['artikel'=>' Tee ','menge'=>'3']), ['Tee'=>8,'Kaffee'=>0]);
pruefe('Bestand: Original bleibt unverändert', $lager, ['Tee'=>5,'Kaffee'=>0]);
pruefe('Bestand: Nullmenge bei neuem Artikel', bestandErgaenzen($lager,['artikel'=>'Kakao','menge'=>'0']), ['Tee'=>5,'Kaffee'=>0,'Kakao'=>0]);
pruefe('Bestand: vorhandenes null bleibt erhalten', bestandErgaenzen(['Tee'=>null],['artikel'=>'Tee','menge'=>2]), ['Tee'=>null]);
pruefe('Bestand: Überlauf verhindern', bestandErgaenzen(['Tee'=>PHP_INT_MAX],['artikel'=>'Tee','menge'=>1]), ['Tee'=>PHP_INT_MAX]);
pruefe('Bestand: ungültiges Lager', bestandErgaenzen(null,[]), []);
foreach ([null,[],['artikel'=>'Tee'],['artikel'=>' ','menge'=>2],['artikel'=>[],'menge'=>2],['artikel'=>'Tee','menge'=>-1],['artikel'=>'Tee','menge'=>[]]] as $i=>$eingabe) {
    pruefe('Bestand: ungültige Eingabe '.$i, bestandErgaenzen($lager,$eingabe), $lager);
}
pruefe('Summe: normale Zahlen', getSum(3,5), 8);
pruefe('Summe: Null ist kein Fehler', getSum(-3,3), 0);
pruefe('Summe: Zahlenstring', getSum('2.5',1), 3.5);
pruefe('Summe: ungültiger Text', getSum('abc',1), false);
pruefe('Summe: nicht endlicher Wert', getSum(INF,1), false);
pruefe('Summe: nicht endliches Ergebnis', getSum(PHP_FLOAT_MAX,PHP_FLOAT_MAX), false);
pruefe('Maximum: Gleichstand', getMax(12,11,12), 12);
pruefe('Maximum: negative Zahlen', getMax(-5,-2,-9), -2);
pruefe('Maximum: drei Nullen', getMax(0,0,0), 0);
pruefe('Maximum: Zahlenstrings', getMax('2.5',1,'3'), 3);
pruefe('Maximum: Array abweisen', getMax([],1,2), false);
pruefe('Maximum: NAN abweisen', getMax(NAN,1,2), false);
echo json_encode($tests);
'''
result = subprocess.run([args.php, '-n', '-r', php], capture_output=True, text=True, check=True)
for row in json.loads(result.stdout):
    check(row['test'], row['passed'])

# Der vorhandene Reisetest prüft auch die mehrseitige Weitergabe ohne Sessions.
travel_tests = ROOT / 'PHP_Arbeitsbereich/Summary_Code_Together/PHP_PHP_Arrays_Formulare/tests/run.php'
result = subprocess.run([args.php, '-n', str(travel_tests)], capture_output=True, text=True, check=True)
travel_report = json.loads(result.stdout)
for row in travel_report['tests']:
    check('Mehrseitige Reise: ' + row['test'], row['ok'])


class NoRedirect(urllib.request.HTTPRedirectHandler):
    def redirect_request(self, req, fp, code, msg, headers, newurl):
        return None


with socket.socket() as sock:
    sock.bind(('127.0.0.1', 0))
    port = sock.getsockname()[1]
base_url = f'http://127.0.0.1:{port}/'


def request(path, values=None, method='POST'):
    fields = []
    for key, value in (values or {}).items():
        if isinstance(value, list):
            fields.extend((key + '[]', item) for item in value)
        else:
            fields.append((key, value))
    data = urllib.parse.urlencode(fields).encode() if method == 'POST' else None
    req = urllib.request.Request(base_url + path, data=data, method=method)
    try:
        response = urllib.request.build_opener(NoRedirect()).open(req, timeout=5)
    except urllib.error.HTTPError as error:
        response = error
    body = response.read().decode('utf-8')
    assert not any(term in body for term in ('Fatal error:', 'Warning:', 'Notice:', 'Deprecated:')), body
    return response.code, body


date = (datetime.date.today() + datetime.timedelta(days=14)).isoformat()
placeholders = {'@future_date': date, '@future_start': date + 'T10:00', '@future_end': date + 'T12:30'}
applications = sorted((ROOT / 'PHP_Arbeitsbereich/ai/Loesungen').glob('*/testdaten.json'))
with tempfile.TemporaryFile() as log:
    server = subprocess.Popen([args.php, '-n', '-S', f'127.0.0.1:{port}', '-t', str(ROOT)], stdout=log, stderr=log)
    try:
        for attempt in range(50):
            try:
                with socket.create_connection(('127.0.0.1', port), timeout=.1):
                    break
            except OSError:
                time.sleep(.05)
        for fixture in applications:
            spec = json.loads(fixture.read_text(encoding='utf-8'))
            values = {k: placeholders.get(v, v) if isinstance(v, str) else v for k, v in spec['eingabe'].items()}
            path = fixture.parent.relative_to(ROOT).as_posix() + '/auswertung.php'
            label = fixture.parent.name
            status, body = request(path, values)
            check(label + ': Normalfall und dokumentierte Summe', status == 200 and spec['erwartete_gesamtsumme'] in body)
            status, body = request(path, method='GET')
            check(label + ': Direktaufruf wird zurückgeleitet', status == 303)
            status, body = request(path, {})
            check(label + ': fehlende Pflichtfelder', status == 422)
            changed = copy.deepcopy(values)
            changed['name'] = '<b>Alex</b>'
            status, body = request(path, changed)
            check(label + ': HTML-Zeichen sicher ausgeben', status == 200 and '&lt;b&gt;Alex&lt;/b&gt;' in body and '<b>Alex</b>' not in body)
            for field, value in values.items():
                changed = copy.deepcopy(values)
                # Manipuliere den Datentyp: Text statt Liste bzw. Liste statt Text.
                changed[field] = 'fremd' if isinstance(value, list) else ['fremd']
                status, body = request(path, changed)
                check(label + ': ungültiger Datentyp bei ' + field, status == 422)
            for field in ('abgabe', 'beginn', 'ende', 'wunschtermin'):
                if field not in values:
                    continue
                for bad, suffix in [(values[field][:4] + '\x00' + values[field][4:], 'Nullbyte'),
                                    ('2030-02-30' + ('T10:00' if field in ('beginn', 'ende') else ''), 'ungültiger Kalendertag')]:
                    changed = copy.deepcopy(values)
                    changed[field] = bad
                    status, body = request(path, changed)
                    check(label + ': ' + field + ' / ' + suffix, status == 422 and 'Alex Beispiel' in body)
    finally:
        server.terminate()
        server.wait(timeout=5)

report = {'date': datetime.date.today().isoformat(), 'scope': 'Zweite Inhaltskorrektur: vier Funktionen, mehrseitige Reisedemo, fünf KI-Referenzlösungen.',
          'environment': subprocess.check_output([args.php, '-n', '-v'], text=True).splitlines()[0],
          'checks': checks, 'passed': len(checks), 'failed': 0,
          'limits': 'Keine Windows-/XAMPP- oder MySQL-Prüfung. HTML-Antworten über HTTP geprüft; keine neuen Browser-End-to-End-Tests.'}
(ROOT / 'pruefberichte/nachreview-tests.json').write_text(json.dumps(report, ensure_ascii=False, indent=2) + '\n', encoding='utf-8')
print(json.dumps({'passed': len(checks), 'applications': len(applications), 'travel_checks': travel_report['anzahl'], 'failed': 0}))
