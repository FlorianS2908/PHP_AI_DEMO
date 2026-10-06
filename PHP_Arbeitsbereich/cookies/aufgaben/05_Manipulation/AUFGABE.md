# Aufgabe 05: Cookie-Werten nicht blind vertrauen

**Neu:** Auch gespeicherte Werte auf dem Server validieren  
**Formular:** POST · Einträge pro Seite: `anzahl`  
**Cookie:** `PHP_c05_anzahl`

1. Prüfe anzahl beim POST-Empfang. Erlaubt sind ausschließlich die Textwerte 5, 10 und 20.
2. Speichere eine gültige Auswahl für eine Stunde und leite zurück.
3. Prüfe in index.php zusätzlich das empfangene Cookie: vorhanden, Texttyp und erlaubter Wert. Bei einem fremden Wert gilt 10; zeige einen Hinweis.
4. Ändere den Cookie-Wert über die Browser-Entwicklerwerkzeuge auf 999 und lade neu. Verwende einen ungeprüften Cookie-Wert weder für die Ausgabe noch für eine Berechnung.

## Teste selbst

- 20 speichern → 20 wird verwendet.
- Cookie auf 999 ändern und F5 → Hinweis und Standard 10.
- Cookie löschen → Standard 10 ohne Manipulationswarnung; POST-Wert 7 → Eingabefehler.

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
