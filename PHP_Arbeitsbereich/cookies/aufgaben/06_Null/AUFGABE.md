# Aufgabe 06: Lautstärke null ist gültig

**Neu:** Zahlen prüfen, ohne den Wert 0 zu verlieren  
**Formular:** POST · Lautstärke (0 bis 10): `lautstaerke`  
**Cookie:** `PHP_c06_lautstaerke`

1. Empfange lautstaerke mit POST. Prüfe isset() und is_string(); entferne äußere Leerzeichen.
2. Erlaubt ist eine ganze Zahl von 0 bis 10. Eine leere Eingabe ist ungültig, die Zahl 0 ist ausdrücklich gültig.
3. Speichere nur eine gültige Zahl für eine Stunde und leite zurück. Auch die empfangene Cookie-Zahl wird erneut geprüft.
4. Ohne gültiges Cookie gilt 5. Bei einem Formfehler bleibt das Eingabefeld leer; ein vorher gültiges Cookie wird nicht verändert.

## Teste selbst

- 0 speichern und F5 → weiterhin 0.
- Leer, -1, 11 oder 2.5 → Fehler und kein neues Cookie.
- Cookie auf abc ändern → Hinweis und Standard 5.

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
