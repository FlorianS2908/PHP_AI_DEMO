# 04 Punkte sammeln – auch null

**POST · punkte (ganze Zahl 0 bis 5)**

Session-Zahl verändern und erneute POST-Ausführung vermeiden

1. Starte die Session. Lies den bisherigen Punktestand als ganze Zahl; ohne gültigen Stand gilt 0.
2. Prüfe punkte aus POST: vorhanden, Texttyp, nach trim() nur Ziffern und als Zahl von 0 bis 5. Leer ist ungültig; 0 ist ausdrücklich erlaubt.
3. Addiere nur eine gültige Eingabe zum bisherigen Stand. Speichere das Ergebnis als int in der Session und leite anschließend per 303 zurück.
4. Ein fehlerhafter Aufruf verändert den Punktestand nicht. Das erneute Laden der zurückgeleiteten GET-Seite darf keine Punkte erneut addieren.

## Teste selbst

- 2 und danach 3 senden → Punktestand 5.
- 0 senden → gültig, Punktestand unverändert.
- F5 → kein erneutes Addieren; leer, -1, 6 und 2.5 → Fehler.

Die gemeinsamen Regeln stehen im Aufgaben-PDF. Startdateien enthalten keine fertige Verarbeitung.
