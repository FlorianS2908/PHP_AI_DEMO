# 05 Zwei Einstellungen gemeinsam merken

**POST · sprache (de / en) · schrift (normal / gross)**

Ein assoziatives Array in der Session speichern

1. Prüfe beide POST-Einträge vollständig: vorhanden, Texttyp und erlaubter Inhalt. Sammle Fehler und gültige neue Eingaben getrennt.
2. Bei Fehlern bleibt die gespeicherte Einstellung unverändert. Nur gültige neue Formwerte werden wieder eingesetzt; ungültige Felder bleiben leer.
3. Erst bei zwei gültigen Werten speicherst du beide in einem assoziativen Array unter einstellungen in $_SESSION. Leite danach zurück.
4. Prüfe beim Lesen zunächst das Array und dann seine Einträge. Ohne gültige Einstellungen gelten de und normal. Zeige gespeicherten Stand und Formular getrennt.

## Teste selbst

- en / gross → beide Werte bleiben nach erneutem Aufruf erhalten.
- en / leer → Englisch im Formular, Schrift leer; bisheriger Speicherstand unverändert.
- Beide leer → Meldungen zu beiden Feldern.

Die gemeinsamen Regeln stehen im Aufgaben-PDF. Startdateien enthalten keine fertige Verarbeitung.
