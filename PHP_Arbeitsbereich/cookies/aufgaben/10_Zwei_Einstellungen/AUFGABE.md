# Aufgabe 10: Zwei Einstellungen gemeinsam speichern

**Neu:** Alles prüfen, dann Cookies setzen  
**Formular:** POST · Sprache: `sprache` · Darstellung: `darstellung`  
**Cookie:** `PHP_c10_sprache`, `PHP_c10_darstellung`

1. Empfange sprache und darstellung mit POST. Prüfe beide Einträge mit isset() und is_string(). Erlaubt sind de/en sowie kompakt/ausfuehrlich.
2. Prüfe beide Felder vollständig. Bei Fehlern: Meldungen sammeln, gültige Formwerte wieder einsetzen und ungültige leeren. Kein Cookie darf dabei verändert werden.
3. Erst wenn beide Werte gültig sind, setze zwei getrennte Cookies für einen Tag. Verwende für beide denselben vorgegebenen Pfad und leite zurück.
4. Lies beide Cookies unabhängig voneinander geprüft ein. Standards: de und kompakt. Unterscheide im Fehlerfall die aktuell eingegebenen Werte von älteren, weiterhin gespeicherten Einstellungen.

## Teste selbst

- Englisch / Ausführlich → zwei Cookies, beide Werte nach frischem Aufruf erhalten.
- Englisch / leer → Englisch im Formular, Darstellung leer, Fehlermeldung; keine Cookie-Änderung.
- Beide leer → zwei Meldungen; ein Cookie manipulieren → nur dessen Standard verwenden.

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
