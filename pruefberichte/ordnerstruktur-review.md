# Review: übersichtliche Materialordner

Stand: 07.10.2026. Ziel: Lehrkraft und Lernende finden Kursmaterial nach seinem Zweck; technische Unterstützung bleibt vollständig erreichbar.

## Ausgangslage und Umsetzung

| Bereich | Vorher: Einträge auf erster Ebene | Jetzt | Aufbau |
| --- | ---: | ---: | --- |
| PHP_Dozent | 33 | 10 | Unterricht, Aufgaben, Demos, Quiz, Loesungen, _Kursportal und vier Einstiegsdateien |
| PHP_Teilnehmer | 22 | 9 | Unterricht, Aufgaben, Demos, Quiz, _Kursportal und vier Einstiegsdateien |

497 vorhandene Dateien wurden umgeordnet. Kein ursprüngliches Material wurde gelöscht; README.txt wurde als README.md mit verständlicher Orientierung übernommen. Die fünf Kurstage und der optionale Status von OOP/Datenbank bleiben erhalten.

- **Unterricht:** Tagesseiten, Kursprojekt; bei der Lehrkraft zusätzlich Planung und Klassenbuch.
- **Aufgaben:** thematische Aufgaben, Startdateien und Vorlagen zusammen.
- **Demos:** Themenübersichten, ausführbare Beispiele und Quelltexte.
- **Quiz:** interaktives Tool, Tageschecks; vollständige Fragenpools in der Dozentenfassung.
- **Loesungen:** Tagesaufgaben und Themenlösungen getrennt, mit zentralem Erwartungshorizont.
- **_Kursportal:** Module, Backend, Assets, Quellen, Metadaten, historischer Prüfstand und optionaler Datenbankbaustein. Der Ordner ist für den Betrieb erforderlich und muss mitkopiert werden.

## Review und direkt eingearbeitete Korrekturen

1. Links werden vom ursprünglichen Speicherort zum neuen Ziel aufgelöst. Auch Rückwege aus Arbeitsbereich, Zusatzmaterial, PHP-Seiten und Quelltextansichten wurden angepasst.
2. Materialbereiche haben eigene Einstiegsseiten. Aufgaben und Demos verweisen zuerst auf den passenden Kurstag, danach auf den größeren Themenfundus.
3. Die lange sekundäre Bausteinnavigation ist einklappbar. Tagesnavigation und Materialbereiche bleiben zugänglich.
4. Angezeigte Demoquelltexte enthalten die neuen Ressourcenpfade. Die Prüfsummen in den Rollenmanifesten wurden erneuert; ihre Dateipfade beziehen sich weiterhin auf den Rollenordner.
5. Die PDF-Ordnerübersicht und der Tagesseitenpfad in den KI-Kursaufträgen wurden aktualisiert und visuell geprüft.
6. HTML-Tag-Tool, optionale Materialien und PHP-Startskripte sind weiterhin über die gemeinsamen Einstiege erreichbar.

## Durchgeführte Prüfungen

- Vollständigkeit: Jede Datei des Ausgangsstands ist am zugeordneten neuen Ort vorhanden.
- Statische Prüfung: lokale Verweise, JSON-Dateien, JavaScript-Syntax und Manifest-Prüfsummen; siehe [bereitstellung.json](bereitstellung.json).
- PHP: 37 Prüfungen bestanden (14 Syntaxprüfungen und 23 HTTP-Prüffälle zu Formularen, Cookies und Sessions); siehe [kursstruktur-php.json](kursstruktur-php.json).
- Bestehende Browserabläufe: 23 Prüfungen bestanden; siehe [kursstruktur-browser.json](kursstruktur-browser.json).
- Neue Materialnavigation: Kategorieeinstiege beider Rollen, Aufgabe → Startdatei, eingebettete Demos, einklappbarer Themenfundus, Quizstart, Fragenpools, mobile Darstellung und lokaler HTML-Einstieg; siehe [ordnerstruktur-browser.json](ordnerstruktur-browser.json).

Umgebung: Linux, PHP 8.3.6 und Chromium. Windows-/XAMPP-Start und die optionale Datenbank wurden bei dieser Strukturänderung nicht erneut getestet. Die Ordnertrennung dient der Übersicht; sie ist keine Zugriffsbeschränkung im öffentlichen Repository.

## Kurzer eigener Test

1. Den vollständigen aktuellen Stand herunterladen und PHP-START.cmd im Hauptordner starten.
2. Teilnehmerfassung → Aufgaben → einen Kurstag und eine Startdatei öffnen.
3. Demos und Quiz ausprobieren; anschließend über die Navigation zurückkehren.
4. In der Dozentenfassung Lösungen und Fragenpools öffnen.
