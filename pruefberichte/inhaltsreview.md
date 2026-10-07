# Inhaltsreview und Korrekturstand

Stand: 07.10.2026. Gegenstand: die fünf Kurstage, der Themenfundus und die ergänzenden Arbeitsmaterialien dieses Repositories. Die Korrekturen sind direkt in den Materialien umgesetzt. OOP und Datenbank bleiben optional.

## Prüfmaßstab

Erklärungen, Arbeitsaufträge und Lösung müssen dasselbe Lernziel und dieselben Regeln verwenden. Aufgaben nennen Eingaben, erwartetes Ergebnis und prüfbare Grenzen. Lernende bearbeiten zuerst Startdateien; Musterlösungen erläutern anschließend den Lösungsweg. Fachbegriffe, Formulierungen und Fehlermeldungen sollen einheitlich und verständlich sein.

## Wesentliche Korrekturen

| Bereich | Befund | Umgesetzte Korrektur |
| --- | --- | --- |
| Tag 3 | Aufgabenstellung verlangt if/else; Lösung verwendete eine Kurzform. Grenzen und Funktionsname waren nicht eindeutig. | Explizites if/else, positive Teilnehmerzahlen, Grenze 4/5 und Funktion `doppelt` vereinheitlicht; passende Normal-, Grenz- und Typfehlertests ergänzt. |
| Tag 4 | Die Lösung setzte eine Längengrenze und eine PHP-Formularseite voraus, die der Auftrag nicht ausreichend benannte. | `index.html` → `index.php`, maximal 100 UTF-8-Bytes und Datenweg mit 303-Rückleitung ausdrücklich erklärt; Zeichen und Bytes unterschieden. |
| Tag 5 | Pflichtübung und zusätzliche Löschdemo waren vermischt; fertige Cookie-Lösung bezeichnete sich als unfertige Startdatei. | Ausgewählte Pflichtaufgaben, Reserve und Löschdemo getrennt; Lösungsbeschriftung und Erwartungshorizont korrigiert. |
| Themenaufgaben | Einzelne Prüfkriterien, Felder und Hilfen passten nicht zum Arbeitsauftrag bzw. zur Demo. | Touchscreen-Anforderung ergänzt; Formulardemo auf ihre tatsächlichen Felder abgestimmt; Checklistenhilfe auch ohne Zugriff auf eine Dozentenlösung nutzbar. |
| UX und Quiz | „Valuable“ und „Desirable“ waren teilweise unpräzise abgegrenzt. | Nutzenbeitrag für Organisation/Zielsetzung und emotionale Anziehungskraft/Bildsprache präzisiert; betroffene Lerntexte, Lösungen, JSON-Pools und eingebettete Quizdaten gemeinsam geändert. |
| 30 Grundlagenaufgaben | Teilnehmerdatei enthielt bereits ausgearbeitete Unterrichtsfragmente; Lösungsdatei enthielt einen zusätzlichen, themenfremden Preisimport. | Echte TODO-/Korrekturaufgaben wiederhergestellt; 30 Lösungen getrennt; fremden Anhang entfernt. Absichtlich fehlerhafte Übungsausschnitte bleiben als solche gekennzeichnet. |
| Zehn Vertiefungsaufgaben | Im PDF angekündigte Startdateien fehlten. | Zehn Startdateien und ein Formular ergänzt, mit Seitenverweis und TODOs. Eine neue Übersicht weist den tatsächlichen Lösungsumfang aus: Beispiele 01/02 vorhanden, 03–10 Übungsreserve ohne vollständige Musterlösung. |
| Preisimport und Anmeldeliste | Preisimport nahm teilweise Arrays entgegen und zählte ungültige Daten nicht zuverlässig. | Nur Strings akzeptieren, ursprüngliche Indizes im Fehlerprotokoll erhalten, Zahlen vor Umwandlung prüfen, Centbeträge runden; Erhalt von `"0"`, Leerfeldern und Dubletten dokumentiert und getestet. |
| Gemeinsame Formularbeispiele | Debug-Ausgaben vor Headern, falsche GET-/POST-Zuordnung, fehlende Erfolgsausgabe und unmaskierte Query-Ausgaben. | GET/POST-Demo, Büchersuche, Chatname und Fundbüro korrigiert. Feld `alias` entspricht wieder dem Aufgabenblatt; HTML-Ausgaben maskiert; Fehler gesammelt und nachvollziehbar zurückgegeben. |
| Reisedemo und Dateieinbindung | Ein ungültiges Datum erzeugte zwei Feldfehler; zusätzliche Debug-Funktion täuschte eine Weiterleitung an. Unklare include/require-Kommentare. | Datumsfelder einzeln prüfen, Debug-Code entfernen, Prüfansicht klar als unverbindlich kennzeichnen; `require_once` mit wiederholtem Einbinden und mehrfachen Funktionsaufrufen erklären. |
| PDFs | Veraltete Startpfade, uneinheitliche Cookie-Bezeichner und unsichtbare Kopiertest-Anweisungen in KI-Aufgaben. | 13 PDFs aktualisiert; unsichtbare Anweisungen aus den Aufgaben entfernt; Experiment und faire Bewertung offen in den Dozentenhinweisen erläutert. Sichtbare Aufgabeninhalte blieben beim Entfernen unverändert. |

## Prüfungen dieses Stands

| Prüfung | Ergebnis und Nachweis |
| --- | --- |
| PHP-Syntax | Alle 255 PHP-Dateien ohne Syntaxfehler. Das schließt Startdateien und optionale Pakete ein, ist aber kein Nachweis ihrer vollständigen fachlichen Funktion. |
| Korrekturtests | 52 erfolgreiche Prüfungen: neue Starter, Grundlagen-/Kontrollstrukturlösungen, Importberechnungen, Quizstruktur und korrigierte Formularabläufe. [Einzelergebnisse](inhaltsreview-tests.json), [ausführbarer Test](tests/inhaltsreview.py). |
| Tagesdemos und Pflichtlösungen | 37 Prüfungen erfolgreich, darunter 14 Syntaxprüfungen und 23 HTTP-/Zustandsprüfungen. [Protokoll](kursstruktur-php.json). |
| Browser und Navigation | 23 Prüfungen der Tagesseiten und 28 Prüfungen der Materialnavigation erfolgreich. Desktop, 390-Pixel-Ansicht, GET/POST, Quiz und lokale HTML-Navigation; keine erfassten Browserfehler. [Tagesseiten](kursstruktur-browser.json), [Materialnavigation](ordnerstruktur-browser.json). |
| Fragenpools | 22 JSON-Pools mit 401 unterschiedlichen Frageobjekten strukturell geprüft: IDs innerhalb eines Pools eindeutig, Antwortindizes gültig, Zuordnungen/Reihenfolgen vollständig, Erläuterungen vorhanden. Inhaltliche Präzisierungen sind oben benannt. |
| PDF-Prüfung | 29 PDFs mit 159 Seiten lesbar; 13 PDFs geändert und die betroffenen Seiten gerendert. Keine unsichtbaren Textspannen mehr gefunden. 31 nur um unsichtbaren Text bereinigte KI-Seiten sind im gerenderten Bild identisch zum Ausgangsstand. |
| Bereitstellung | Lokale Verweise, JSON, JavaScript-Syntax und Rollenmanifeste erneut geprüft. [Maschineller Verweischeck](bereitstellung.json). |

Die Inhalte wurden entlang der Tagesstruktur, der 13 Themenbausteine und der ergänzenden Aufgabenpakete abgeglichen. Identische Teilnehmer-/Dozentenpassagen wurden gemeinsam korrigiert. Historische Klassenbücher und frühere Prüfprotokolle bleiben als historische Dokumentation erkennbar. Die Prüfung ist kein Versprechen vollständiger Fehlerfreiheit und keine externe fachliche Abnahme jedes einzelnen Satzes.

## Verbleibende Grenzen und kurzer Unterrichtstest

- **Windows/XAMPP:** Der tatsächliche Start auf dem Unterrichtsrechner bleibt vor Kursbeginn zu prüfen. Die aktuellen automatischen Tests liefen mit PHP 8.3.6 unter Linux und Chromium.
- **Datenbank-Erweiterung:** Syntax und Materialien wurden berücksichtigt; ein aktueller Integrationstest mit MySQL und den benötigten PHP-Erweiterungen wurde nicht ausgeführt. Für die fünf Kurstage ist keine Datenbank nötig.
- **Reserveaufgaben:** Für die Cookie-/Session-Reserve und die Vertiefungen 03–10 liegt kein vollständiges separates Lösungspaket vor. Diese Materialien werden nicht als vollständig gelöste Pflichtaufgaben dargestellt.
- **Didaktische Abnahme:** Je eine Aufgabe selbst aus Teilnehmeransicht bearbeiten, erst danach die Lösung vergleichen. Besonders prüfen: Sind die Regeln ohne mündliche Zusatzinformation verständlich? Lassen sich Sollwerte vor der Ausführung begründen? Passt die Bearbeitungszeit zur Lerngruppe?

Für einen kurzen eigenen Test: `PHP-START.cmd` im Hauptordner starten; Tag 3 und Tag 4 über die Teilnehmernavigation bearbeiten; Cookie/Session aus Tag 5 testen; anschließend die [Erwartungshorizonte](../PHP_Dozent/Loesungen/erwartungshorizonte.html#abgleich) vergleichen. Zusätzlich im Arbeitsbereich Chatname mit POST und Fundbüro mit einem leeren Feld aufrufen.

Die reproduzierbaren Korrekturtests laufen mit Python 3 und PHP 8:

```sh
python pruefberichte/tests/inhaltsreview.py --php php
```

## Fachliche Referenzen

- [PHP: Typdeklarationen und strict_types](https://www.php.net/manual/en/language.types.declarations.php)
- [PHP: empty](https://www.php.net/manual/en/function.empty.php)
- [PHP: setcookie](https://www.php.net/manual/en/function.setcookie.php)
- [PHP: session_destroy](https://www.php.net/manual/en/function.session-destroy.php)
- [MDN: Formulardaten senden](https://developer.mozilla.org/en-US/docs/Learn_web_development/Extensions/Forms/Sending_and_retrieving_form_data)
- [Peter Morville: User Experience Honeycomb](https://semanticstudios.com/user_experience_design/)
