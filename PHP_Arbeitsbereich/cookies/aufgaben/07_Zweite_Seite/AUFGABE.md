# Aufgabe 07: Eine zweite Seite liest mit

**Neu:** Ein Cookie bei mehreren Seitenaufrufen verwenden  
**Formular:** POST · Sprache: `sprache`  
**Cookie:** `PHP_c07_sprache`

1. Prüfe sprache im POST-Formular. Erlaubt sind de und en. Speichere einen gültigen Wert für eine Stunde im vorgegebenen Ordnerpfad.
2. Leite nach dem Speichern zu index.php zurück. Zeige dort die geprüfte Auswahl.
3. Ergänze anzeige.php im selben Ordner. Diese Seite erhält keine Sprache über GET oder POST, sondern liest ausschließlich das geprüfte Cookie.
4. Zeige bei de „Hallo“ und bei en „Hello“. Ohne gültiges Cookie gilt de. Ergänze einen Link zurück zum Formular.

## Teste selbst

- Englisch speichern → anzeige.php zeigt Hello, obwohl die URL keine Sprache enthält.
- anzeige.php direkt öffnen → Cookie wird trotzdem verwendet.
- Cookie löschen, anzeige.php neu laden → Hallo.

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
