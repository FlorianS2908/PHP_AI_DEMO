# Aufgabe 03: Eine Einstellung löschen

**Neu:** Cookie im Browser entfernen, nicht nur in PHP  
**Formular:** POST · Schriftgröße: `schrift`  
**Cookie:** `PHP_c03_schrift`

1. Verarbeite die POST-Aktion speichern oder loeschen. Beim Speichern ist schrift Pflicht; erlaubt sind normal und gross.
2. Speichere eine gültige Schriftgröße für eine Stunde. Nach der Rückleitung wird sie angezeigt und ausgewählt.
3. Ergänze den Knopf „Cookie löschen“. Sende dafür das Cookie mit einem Ablaufzeitpunkt in der Vergangenheit. Name und Pfad bleiben identisch.
4. Leite auch nach dem Löschen zurück. Ohne Cookie erscheint Normal. Die Löschaktion darf keine neue Schrift-Auswahl verlangen.

## Teste selbst

- Groß speichern → Groß wird angezeigt.
- Ohne Auswahl „Cookie löschen“ → Cookie weg; Standard Normal.
- Erneut löschen → weiterhin ohne Cookie; keine PHP-Warnung.

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
