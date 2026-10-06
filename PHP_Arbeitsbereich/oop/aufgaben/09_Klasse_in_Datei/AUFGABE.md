# 09 Das Buch bekommt eine eigene Datei

Bekannte Dateiaufteilung auf eine Klasse übertragen.

**Dateien:** Buch.php und index.php

1. Verschiebe die vorbereitete Klasse Buch aus dem markierten Bereich in die Datei Buch.php. Sie behält Konstruktor, privates Attribut und getTitel().
2. Binde die Klassendatei am Anfang von index.php über require_once und __DIR__ ein. In index.php steht danach keine eigene Definition der Klasse Buch mehr.
3. Erzeuge das Buch mit dem Titel Web-Grundlagen und übernimm den Rückgabewert von getTitel() in $ausgaben.

## Teste selbst
- Die Ausgabe lautet Web-Grundlagen.
- Prüfe die Aufteilung: Buch.php enthält die Klasse, index.php verwendet das Objekt und erzeugt die HTML-Ausgabe.

Neu erstellte PHP-Übung. Umfang und Herkunft: QUELLEN.md im Paketstamm.
