# 08 Fehler und gültige Eingaben zurückgeben

**POST · artikel (Text) · anzahl (ganze Zahl 0 bis 9)**

Den bisherigen GET-Rückweg durch Session-Daten ersetzen

1. Prüfe beide POST-Felder unabhängig voneinander. Artikel ist Pflicht; Anzahl muss ganz und von 0 bis 9 sein. Sammle alle Fehler und nur gültige neue Werte.
2. Bei Fehlern: Meldungen und gültige Formwerte getrennt in der Session ablegen. Mit HTTP 303 zu index.php zurückleiten – ohne Formwerte oder Fehler in der URL.
3. Lies diese Rückgabedaten einmalig aus und entferne sie danach aus der Session. Gültige neue Felder bleiben gefüllt, ungültige leer. Alte gespeicherte Werte nicht hineinmischen.
4. Erst bei zwei gültigen Eingaben die Vormerkung speichern. Bei fehlerhaften Versuchen bleibt eine ältere Vormerkung unverändert. Es wird nichts bestellt.

## Teste selbst

- Stift / leer → Stift bleibt, Anzahl leer; URL enthält keine Eingabedaten.
- Leer / 0 → Artikel leer, 0 bleibt; beide leer → zwei Meldungen.
- Stift / 2 → Vormerkung; danach fehlerhaft senden → alte Vormerkung unverändert.

Die gemeinsamen Regeln stehen im Aufgaben-PDF. Startdateien enthalten keine fertige Verarbeitung.
