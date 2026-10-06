## Aufgabe 06: Lagerbestand: Null ist erlaubt

**Methode:** POST  
**Felder:** Artikel: artikel; Bestand: bestand (0 bis 50, ganz)

Einen fehlenden Wert von der ausdrücklich gültigen Zahl 0 unterscheiden.

1. Empfange artikel und bestand mit POST. Prüfe beide Einträge mit isset(), übernimm nur Textwerte und entferne äußere Leerzeichen.
2. Der Artikel ist Pflicht. Erlaubt sind ganze Bestandszahlen von 0 bis 50; fehlend oder leer ist nicht dasselbe wie 0.
3. Leite bei Fehlern zurück und erhalte gültige Werte, ausdrücklich auch die 0. Vermeide eine Prüfung, die 0 pauschal als leer ablehnt.
4. Bei gültigen Daten gib Artikel und Bestand aus. Es wird kein Lagerbestand gespeichert.

**Teste selbst:**

- Stift / 0 -> Erfolg.
- Leer / 0 -> Artikel leer, die 0 bleibt erhalten.
- Stift / leer, -1 oder 51 -> Artikel bleibt, Bestand leer.

Zusätzlich gelten die gemeinsamen Prüfungen aus README.md: fehlende Parameter, leere Eingaben, beide Fehler und keine PHP-Warnungen.
