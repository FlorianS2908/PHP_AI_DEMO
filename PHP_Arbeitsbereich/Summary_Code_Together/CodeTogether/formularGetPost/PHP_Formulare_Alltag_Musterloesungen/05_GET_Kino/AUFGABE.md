## Aufgabe 05: Kino: Kartenwunsch prüfen

**Methode:** GET  
**Felder:** Film: film; Anzahl Karten: karten (1 bis 6, ganz)

Eine ganze Zahl und einen erlaubten Zahlenbereich kontrollieren.

1. Empfange film und karten mit GET. Prüfe beide Einträge mit isset(), übernimm Textwerte und entferne äußere Leerzeichen.
2. Der Filmtitel ist Pflicht. Die Kartenanzahl muss aus Ziffern bestehen und als ganze Zahl zwischen 1 und 6 liegen.
3. Prüfe die Zahl in PHP, nicht nur im Browser. Leite bei Fehlern zurück und erhalte jeweils das gültige Feld.
4. Sind beide Werte gültig, gib Filmtitel und Kartenanzahl aus. Es wird nichts reserviert.

**Teste selbst:**

- Abenteuer / 2 -> Erfolg.
- Abenteuer / 0, 7, 2.5 oder abc -> Film bleibt, Kartenanzahl leer.
- Leer / 2 -> Kartenanzahl bleibt; fehlende Anzahl -> Fehlermeldung.

Zusätzlich gelten die gemeinsamen Prüfungen aus README.md: fehlende Parameter, leere Eingaben, beide Fehler und keine PHP-Warnungen.
