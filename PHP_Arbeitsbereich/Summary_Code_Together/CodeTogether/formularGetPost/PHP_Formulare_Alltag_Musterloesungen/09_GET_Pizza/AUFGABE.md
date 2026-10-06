## Aufgabe 09: Pizza: Eine Angabe ist freiwillig

**Methode:** GET  
**Felder:** Pizza: pizza; Extra (freiwillig): extra (kaese / pilze oder leer)

Fehlend, leer, gültig und ungültig bei einem optionalen Feld unterscheiden.

1. Empfange pizza und extra mit GET. Prüfe vor jedem Auslesen mit isset(), ob der Eintrag vorhanden ist. Pizza ist ein Pflichtfeld.
2. Extra darf fehlen oder nach trim() leer sein. Bei einer Eingabe sind nur kaese oder pilze erlaubt; übermittelte Arrays sind ungültig.
3. Prüfe beide Angaben und leite bei Fehlern zurück. Eine leere freiwillige Angabe erzeugt keinen Fehler; gültige Werte bleiben erhalten.
4. Bei Erfolg gib Pizza und Extra aus. Ohne Extra erscheint: Kein Extra. Es wird keine Bestellung abgeschickt.

**Teste selbst:**

- Margherita / leer oder fehlendes extra -> Erfolg ohne Extra.
- Margherita / ananas -> Pizza bleibt, Extra leer.
- Leer / pilze -> pilze bleibt; extra[]=kaese in der URL -> Fehler.

Zusätzlich gelten die gemeinsamen Prüfungen aus README.md: fehlende Parameter, leere Eingaben, beide Fehler und keine PHP-Warnungen.
