# 01 Einen Alias merken

**POST · alias (Text)**

Session starten, speichern und auf einer zweiten Seite lesen

1. Ergänze session_start() vor jeder Ausgabe in index.php, auswertung.php und anzeige.php. Die Konfiguration in function.php ist vorgegeben.
2. Empfange alias mit POST. Prüfe isset(), Texttyp und den nach trim() verbleibenden Inhalt. Leer ist ungültig; ein Fehler verändert keinen gespeicherten Alias.
3. Speichere einen gültigen Alias in $_SESSION und leite mit HTTP 303 zu index.php zurück. Dort wird er geprüft gelesen und angezeigt.
4. Ergänze anzeige.php: Alias ausschließlich aus der Session lesen. Ohne Eintrag „Noch kein Alias“ anzeigen. Kein Alias in URL oder verstecktem Feld.

## Teste selbst

- Pixel speichern → beide Seiten zeigen Pixel; F5 erhält den Wert.
- Leer oder alias[]=Pixel → Fehler; bisheriger Alias bleibt gespeichert.
- Zweites Browserprofil → eigener leerer Stand; weiterer Tab desselben Profils teilt den Stand.

Die gemeinsamen Regeln stehen im Aufgaben-PDF. Startdateien enthalten keine fertige Verarbeitung.
