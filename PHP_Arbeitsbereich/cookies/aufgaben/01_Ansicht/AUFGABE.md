# Aufgabe 01: Eine Ansicht merken

**Neu:** Cookie setzen und nach der Rückleitung auslesen  
**Formular:** POST · Ansicht: `ansicht`  
**Cookie:** `PHP_c01_ansicht`

1. Sende ansicht mit POST. Prüfe mit isset(), ob der Eintrag existiert, und mit is_string(), ob ein Textwert vorliegt. Erlaubt sind nur liste und kacheln.
2. Bei einem Fehler: zurück zum Formular, Fehlermeldung zeigen und kein Cookie setzen.
3. Speichere die gültige Ansicht für eine Stunde im vorgegebenen Cookie. Leite danach mit HTTP 303 zu index.php zurück und beende das Skript.
4. Lies das Cookie in index.php erst nach Prüfung aus. Zeige die Ansicht an und wähle sie im Formular wieder aus. Ohne gültiges Cookie gilt liste.

## Teste selbst

- Kacheln wählen → nach der Rückleitung Kacheln; F5 → weiter Kacheln.
- Keine Auswahl oder ansicht als Array senden → Fehler; kein neues Cookie.
- Cookie im Browser löschen → Standard Liste; keine PHP-Warnung.

## Gemeinsame Regeln

Vor jedem POST- oder Cookie-Zugriff den einzelnen Eintrag prüfen. Cookies sind veränderbare
Clientdaten. Der vorgegebene HTML-Helper ersetzt die Inhaltsprüfung nicht.
Vor setcookie() und header() keine Ausgabe. Nach der Rückleitung exit.
Beim Fehler keine Cookies ändern; ungültige Formularfelder leeren.
Die vorgegebene Variable $cookiePfad ist ein URL-Pfad. Setzen und Löschen müssen denselben
Cookie-Namen und Pfad verwenden; eine Domain wird in diesen lokalen Beispielen nicht gesetzt.
Nur kurze, harmlose Einstellungen verwenden. Keine Anmeldung, keine Passwörter.

Die Aufgaben sind eigenständig. Cookie-Namen unterscheiden sich; die Pfade passen sich dem
jeweiligen Aufgabenordner an. Deshalb beeinflussen Startcode und Lösung einander nicht.
