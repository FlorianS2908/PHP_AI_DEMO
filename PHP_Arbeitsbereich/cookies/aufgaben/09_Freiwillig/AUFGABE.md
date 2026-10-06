# Aufgabe 09: Nur auf Wunsch merken

**Neu:** Checkbox, Vorschau und dauerhafte Auswahl trennen  
**Formular:** POST · Startbereich: `startbereich` · Checkbox: `merken`, Wert `ja`  
**Cookie:** `PHP_c09_startbereich`

1. Empfange startbereich und die freiwillige Checkbox merken. Startbereich muss kurse oder termine sein. Die Checkbox darf fehlen; vorhanden ist nur der Textwert ja gültig.
2. Prüfe beide Angaben vor jeder Cookie-Änderung. Bei einem Fehler: alle Meldungen sammeln, gültige Formwerte erhalten und kein Cookie ändern.
3. Mit Haken: Startbereich für einen Tag merken. Ohne Haken: ein eventuell früher gesetztes Cookie mit demselben Namen und Pfad löschen.
4. Leite zurück. Ohne Haken darf die gültige Auswahl für die aktuelle Vorschau über GET zurückkommen. Ein frischer Aufruf ohne URL-Parameter verwendet aber nur das Cookie oder den Standard kurse.

## Teste selbst

- Termine + Haken → frischer Aufruf merkt Termine.
- Termine ohne Haken → aktuelle Vorschau Termine, frischer Aufruf Kurse; Cookie weg.
- Leerer Startbereich + Haken → Fehler, Haken bleibt; fremder Checkbox-Wert → Fehler.

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
