# Aufgabe 08: Den Cookie-Pfad eingrenzen

**Neu:** Ein URL-Pfad ist kein Dateisystempfad  
**Formular:** POST · Sortierung: `sortierung`  
**Cookie:** `PHP_c08_sortierung`

1. Prüfe sortierung per POST. Erlaubt sind titel und datum. Ergänze den vorbereiteten Cookie-Pfad so, dass das Cookie nur für bereich/ und dessen Unterpfade gilt.
2. Speichere für eine Stunde und leite zu bereich/anzeige.php. Dort wird das Cookie geprüft und die Sortierung angezeigt.
3. Öffne anschließend index.php im übergeordneten Aufgabenordner. Dort soll dieses Cookie nicht im Request ankommen; das ist kein Speicherfehler.
4. Ergänze die Löschaktion in auswertung.php. Lösche mit genau dem eingeschränkten Pfad und leite zurück zu bereich/anzeige.php.

## Teste selbst

- Datum speichern → in bereich/anzeige.php kommt Datum an.
- Link zum übergeordneten Formular → dort kein passendes Cookie im Request.
- Cookie löschen → auch im Bereich kein Cookie mehr; Standard Titel.

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
