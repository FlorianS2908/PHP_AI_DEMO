# HTML-Formulare: GET und POST
## 10 kleine Übungen aus unterschiedlichen Alltagssituationen

Pro Aufgabe bleiben es ein bis zwei Formularfelder. Die Übungen bauen aufeinander auf: zuerst ein Feld, dann zwei Felder, Formate und Zahlen, Auswahl und Checkbox, ein freiwilliges Feld und zuletzt eine Prüfung zwischen zwei Werten.

## Drei Dateien pro Aufgabe
- `index.php`: HTML-Formular, Fehlermeldung und gültige Rückgabewerte.
- `auswertung.php`: Eingaben entgegennehmen, auf dem Server prüfen, zurückleiten oder das Ergebnis ausgeben.
- `function.php`: Die Ausgabefunktion `html()` ist vorgegeben; in Aufgabe 10 kommt die Rückleitungsfunktion hinzu.

## Arbeitsweise für jede Aufgabe
1. Verwende die vorgegebene GET- oder POST-Methode. Bearbeite die TODO-Stellen.
2. Prüfe jeden Formulareintrag ausdrücklich mit `isset()`, bevor du ihn ausliest. Übernimm nur Textwerte und entferne äußere Leerzeichen bei freien Eingaben.
3. Prüfe danach den Inhalt nach dem Arbeitsauftrag. Ein gesetzter Eintrag ist nicht automatisch gültig.
4. Prüfe bei zwei Feldern immer beide, bevor du zurückleitest. Sammle alle Fehler und getrennt davon nur gültige Daten.
5. Bei Fehlern: mit `header()` zu `index.php` zurückleiten, danach `exit`. Vorher keine Ausgabe.
6. Nach der Rückleitung: Fehlermeldung anzeigen, nur gültige Eingaben wieder einsetzen, ungültige Felder leeren. Bei Auswahl und Checkbox gilt dasselbe.
7. Bei Erfolg: die verlangte Ausgabe erzeugen. Keine Datenbank, keine Sessions, kein JavaScript und keine echten Buchungen oder Bestellungen.

## Start in XAMPP
Entpacke den Ordner unter `C:\xampp\htdocs`, starte Apache und öffne `index.php` über `localhost`, nicht per Doppelklick.

## Tests in jeder Aufgabe
Teste eine gültige Eingabe, leere Eingaben, reine Leerzeichen, ein fehlendes Pflichtfeld und einen direkten Aufruf der Auswertungsdatei. Ab zwei Feldern: jeweils nur eines falsch und beide gleichzeitig falsch. Es dürfen keine PHP-Warnungen entstehen. Die HTML-Formulare sind zum Üben mit `novalidate` versehen; die Zahlenfelder sind Textfelder mit `inputmode="numeric"`, damit auch falsche Eingaben den Server erreichen können.

## Rückweg und Übungsdaten
Im Übungsmuster werden Fehlermeldungen und gültige Werte über URL-Parameter zurückgegeben. Auch bei einem POST-Formular liest `index.php` sie danach aus `$_GET`. Verwende nur kurze, erfundene Daten; keine Passwörter und keine vertraulichen Angaben. Rückgabewerte sind keine vertrauenswürdigen gespeicherten Daten: bei jedem Absenden erneut prüfen und bei der HTML-Ausgabe maskieren.

## Musterlösungen für die Lehrkraft
`http://localhost/PHP_Formulare_Alltag_Musterloesungen/01_GET_Buechersuche/index.php`

Die Prüfungen mit `isset()` und `is_string()` stehen bewusst sichtbar in jeder `auswertung.php`. Kein `$_REQUEST`, kein verstecktes Einlesen über allgemeine Hilfsfunktionen. `html()` ist die einzige vorgegebene Hilfsfunktion bis Aufgabe 9. In Aufgabe 10 wird nur der bekannte Rücksprung ausgelagert.

Die Dateiaufteilung der Vorgängerversion bleibt erhalten; die Verarbeitungsdatei heißt jetzt neutral `auswertung.php`. Die früher angehängten `.url`-Dateien enthalten nur lokale Verweise, keine PHP-Quelltexte. Dieses Paket ist eine überarbeitete Fassung des zuvor erstellten Übungsmaterials, keine Bearbeitung dieser lokalen Originalquelltexte.

### Didaktische Abfolge
01-02: Ein Feld, GET und POST, Fehler-Rückleitung. 03: Zwei Pflichtfelder und Werterhalt. 04: E-Mail-Format. 05: Ziffern und Zahlenbereich. 06: Die gültige 0. 07: Auswahlwerte. 08: Checkbox und fehlende Parameter. 09: Freiwillige Angaben mit bedingter Prüfung. 10: Zwei gültige Einzelwerte vergleichen und Rückleitung auslagern.

### Grenzen des Übungsmusters
Die Beispiele speichern nichts und lösen keine externen Aktionen aus. Für echte Anwendungen sind weitere Sicherheits- und Datenschutzanforderungen zu berücksichtigen. POST allein verschlüsselt nichts; die Rückleitung dieses Übungsmusters stellt Rückgabewerte in die URL. Keine vertraulichen Daten verwenden. Die E-Mail-Prüfung bestätigt weder die Existenz eines Postfachs noch die Identität einer Person.

## Technische Quellen

[1] PHP: [Formulare](https://www.php.net/manual/de/tutorial.forms.php) · [$_GET](https://www.php.net/manual/de/reserved.variables.get.php) · [$_POST](https://www.php.net/manual/de/reserved.variables.post.php)

[2] PHP: [isset](https://www.php.net/manual/de/function.isset.php) · [is_string](https://www.php.net/manual/de/function.is-string.php) · [trim](https://www.php.net/manual/de/function.trim.php) · [empty](https://www.php.net/manual/de/function.empty.php)

[3] [PHP: header](https://www.php.net/manual/de/function.header.php) · [MDN: HTTP 303](https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/303)

[4] PHP: [http_build_query](https://www.php.net/manual/en/function.http-build-query.php) · [htmlspecialchars](https://www.php.net/manual/de/function.htmlspecialchars.php)

[5] PHP: [filter_var](https://www.php.net/manual/de/function.filter-var.php) · [Validierungsfilter](https://www.php.net/manual/de/filter.constants.php) · [ctype_digit](https://www.php.net/manual/de/function.ctype-digit.php)

[6] MDN: [Formular / novalidate](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/form) · [Auswahl](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/select) · [Checkbox](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/input/checkbox)

