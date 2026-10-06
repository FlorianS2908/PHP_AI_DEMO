# Aufgabe 02: Das Farbschema ändern

**Neu:** Ein vorhandenes Cookie gezielt überschreiben  
**Formular:** POST · Farbschema: `schema`  
**Cookie:** `PHP_c02_schema`

1. Empfange schema mit POST. Prüfe Vorhandensein, Texttyp und die erlaubten Werte hell oder dunkel.
2. Speichere eine gültige Auswahl für einen Tag. Verwende bei jeder Änderung denselben Cookie-Namen und denselben Pfad.
3. Leite nach dem Setzen zurück. Lies das Cookie geprüft ein; ohne gültigen Wert gilt hell.
4. Verwende die geprüfte Auswahl für das Formular und die vorbereitete Darstellung. Ungültige Eingaben dürfen ein vorhandenes Cookie nicht überschreiben.

## Teste selbst

- Hell speichern, danach Dunkel → genau ein Cookie mit dem neuen Wert.
- F5 → weiterhin Dunkel.
- schema=bunt senden → Fehler; gespeichertes Farbschema bleibt unverändert.

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
