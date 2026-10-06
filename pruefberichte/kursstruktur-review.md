# Fünf-Tage-Kurs · Review und Testprotokoll

Stand: 06.10.2026 · Kursfassung 2.0.

## Analyse und Soll

Im Ausgangsstand waren PHP-Dateien und zusätzliche Themenpakete vorhanden. Die Startseiten ordneten überwiegend Themenbausteine, aber noch keinen durchgängigen Fünf-Tage-Lernweg. Datenbank und eine größere Suchanwendung erschienen im regulären Kurs; Arbeitsbereich und HTML-Tag-Tool waren zu wenig mit den beiden Kursfassungen verbunden.

| Anforderung | Umsetzung |
| --- | --- |
| Tag 1: HTML/CSS, Begriffe, Struktur, Attribute und Klassen | Tageserklärung, Beispiel, Übungen und HTML-Tag-Tool; Schnittstellen, Peripherie und Usability integriert |
| Tag 2: Formulare, GET/POST und HTTP | Begriffe, Netzwerk-Beobachtung und echte lokale GET-/POST-Lupe; PHP-Empfänger ist zunächst vorgegeben |
| Tag 3: einfacher PHP-Einstieg | Tags, DOCTYPE, Variablen, Typisierung/strict_types, Kontrollstrukturen, Array, Funktion; Demo und TODO-Startdatei |
| Tag 4: Arbeitsbereich in den Kurs einbeziehen | Kleine Formulare, Arrays, Prüfung, Maskierung und 303-Rückweg verknüpft; eigene kleine Startaufgabe und getrennte Lösung |
| Tag 5: Cookies und Sessions als Kursgrenze | Je eine Pflichtübung, getrennte vollständige Musterlösungen, weitere Aufgaben als Reserve |
| OOP und DB optional | Eigenständige Pakete im Hauptordner Optionales_Zusatzmaterial; DB-Bausteine, Starter, Lösungen und Backend zusätzlich in optional/ der jeweiligen Kursfassung verschoben |
| KI-Aufträge im Lernstand | Ein Szenario über fünf Lernstufen; neues zweiseitiges Aufgaben-PDF; große Referenzaufgaben als Vertiefung |
| Gemeinsame Navigation | Zehn Tagesseiten, beide Startseiten, Tag-Tool, Arbeitsbereich, Zusatzmaterial und Rückwege verknüpft |
| Begrenzter Kursumfang | 45 UE, Pflicht/Reserve getrennt, neun UE je Tag, Klassenbuch für fünf Tage |

## Review und eingearbeitete Korrekturen

- HTML-Attribute, CSS-Klassen, PHP-Variablen und PHP-Metadatenattribute begrifflich getrennt; keine OOP-Voraussetzung.
- Dynamische/statische Typisierung von strenger/umwandelnder Typbehandlung unterschieden. strict_types macht gewöhnliche Variablen nicht statisch typisiert.
- POST weder als verschlüsselt noch als unsichtbar beschrieben; HTTPS und serverseitige Prüfung gesondert erklärt.
- id und name, isset und empty sowie der gültige String "0" ausdrücklich unterschieden.
- Gemeinsamer Serverstart auf die Repository-Wurzel gelegt, damit Übungen in benachbarten Ordnern erreichbar sind.
- Eigenständige HTML-Tag-Tool-Reiter heißen „Thema“, damit sie nicht mit den fünf Kurstagen verwechselt werden.
- Fehlende separate Lösungen der zwei ausgewählten Zustands-Pflichtübungen ergänzt. Weitere historische Lösungspakete werden nicht als enthalten behauptet.
- Datenbank-Suchprojekt aus dem Pflichtpfad entfernt. Das Kursprojekt benötigt weder OOP noch Datenbank.
- Bestehende technische Prüfberichte als historisch gekennzeichnet; aktuelle Nachweise separat geführt.

## Ausgeführte Prüfungen

| Prüfung | Ergebnis | Nachweis |
| --- | --- | --- |
| Dateinamen, Dokumentinhalte, JSON, JavaScript, lokale HTML-Ziele, Manifeste | Keine Fehler | bereitstellung.json |
| PHP-Syntax der neuen Demos, Startdateien und Pflichtlösungen | 14 Dateien bestanden | kursstruktur-php.json |
| Reale PHP-HTTP-Fälle unter Linux/PHP 8.3.6 | 23 Fälle bestanden | kursstruktur-php.json |
| Chromium-Darstellung und Bedienpfade | 23 Prüfungen bestanden | kursstruktur-browser.json |
| PDF-Layout | Projektübersicht: 3 Seiten; KI-Kursaufträge: 2 Seiten, Texte innerhalb der Seiten | Sicht- und Textprüfung |

Die HTTP-Fälle prüfen GET/POST, eine abgewiesene Methode, fehlende/leere/zu lange/als Array gesendete Eingaben, den Wert "0", maskierte HTML-Ausgabe, 303-Rückwege, Cookie-Speicherung und den Standard nach Löschung sowie Session-Erhalt auf einer zweiten Seite und unveränderten Altzustand nach Fehleingaben. Ein getrennter Cookie-Kontext wird geprüft.

Die Browserprüfung umfasst 17 Einstieg-/Tagesseiten, den Weg Teilnehmer → HTML-Tag-Tool → Dozent, echte GET-/POST-Absendung sowie vier schmale Ansichten ohne horizontalen Seitenüberlauf. Keine JavaScript-Seitenfehler in diesen Abläufen.

## Grenzen und lokale Abnahme

Keine erneute vollständige Prüfung aller historischen PHP-Aufgaben oder des optionalen Datenbankbetriebs. Kein Windows-/XAMPP-End-to-End-Test. Die lokale Prüfung benutzt den PHP-Entwicklungsserver; XAMPP bleibt separat abzunehmen.

Für die lokale Abnahme: ganzes Repository synchronisieren, PHP-START.cmd im Hauptordner starten, beide Startseiten öffnen, Tag-Tool wechseln, Tag-2-Formular mit GET/POST senden und Tag-5-Übungen über den Server ausführen. Bewusst unvollständige Startdateien kennzeichnen ihre TODOs; sie sind keine fertigen Anwendungen.
