## Aufgabe 10: Druckbereich: Zwei Werte vergleichen

**Methode:** POST  
**Felder:** Von Seite: von (1 bis 100, ganz); Bis Seite: bis (1 bis 100, ganz)

Bekannte Prüfungen verbinden und die Rückleitung als Funktion wiederverwenden.

1. Empfange von und bis mit POST. Prüfe beide Einträge mit isset(), den Texttyp und anschließend die Zahlen: jeweils ganz und von 1 bis 100.
2. Erst wenn beide Einzelwerte gültig sind, vergleiche sie. Bis darf nicht kleiner als Von sein. In diesem Fall bleibt Von erhalten, Bis wird geleert.
3. Ergänze zurueckZumFormular() in function.php: gültige Daten und Fehler entgegennehmen, URL bauen, mit header() zurückleiten und beenden.
4. Verwende die Funktion bei Fehlern. Bei Erfolg gib den Bereich und die Seitenzahl aus; beide Randseiten werden mitgezählt. Es wird nichts gedruckt.

**Teste selbst:**

- 2 / 5 -> Bereich gültig, 4 Seiten; 5 / 5 -> 1 Seite.
- 8 / 3 -> Von bleibt 8, Bis leer, Meldung zur Reihenfolge.
- Leer / 4 -> Bis bleibt 4; 0 / 101 -> beide Felder leer und beide Meldungen.

Zusätzlich gelten die gemeinsamen Prüfungen aus README.md: fehlende Parameter, leere Eingaben, beide Fehler und keine PHP-Warnungen.
