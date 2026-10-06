# Aufgabe 04: Nur kurz merken

**Neu:** Ablaufzeitpunkt und erneute Anfrage unterscheiden  
**Formular:** POST · Motiv: `motiv`  
**Cookie:** `PHP_c04_motiv`

1. Prüfe die POST-Eingabe motiv. Erlaubt sind stern und kreis; fehlende, leere oder andere Werte erzeugen einen Fehler.
2. Merke die gültige Auswahl für 30 Sekunden. Setze das Cookie ausschließlich beim erfolgreichen Speichern, nicht bei jedem GET-Aufruf.
3. Leite zurück. Zeige neben der Auswahl an, ob im aktuellen Request ein gültiges Cookie angekommen ist.
4. Warte länger als 30 Sekunden und lade die Seite neu. Probiere danach expires = 0 aus und notiere den Unterschied. Das ist eine Browser-Sitzung, noch keine PHP-Session.

## Teste selbst

- Kreis speichern → Cookie angekommen.
- Nach etwa 10 Sekunden F5 → Ablaufzeit wird nicht verlängert.
- Nach mehr als 30 Sekunden F5 → kein Cookie, Standard Stern; die alte HTML-Seite ändert sich nicht von allein.

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
