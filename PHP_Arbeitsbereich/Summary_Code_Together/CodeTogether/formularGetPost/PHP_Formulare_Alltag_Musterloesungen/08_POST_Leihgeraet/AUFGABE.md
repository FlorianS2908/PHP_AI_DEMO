## Aufgabe 08: Leihgerät: Empfang bestätigen

**Methode:** POST  
**Felder:** Name: name; Checkbox: bestaetigt (Wert: ja)

Eine nicht gesendete Checkbox erkennen und einen gültigen Haken erhalten.

1. Empfange name und bestaetigt mit POST. Prüfe jeden Eintrag vor dem Auslesen mit isset(); der Name ist nach trim() ein Pflichtfeld.
2. Die Bestätigung ist nur gültig, wenn der Checkbox-Eintrag vorhanden ist, ein Textwert ist und genau ja enthält.
3. Prüfe beide Felder vor der Rückleitung. Ein gültiger Name bleibt erhalten; eine gültige Bestätigung bleibt angehakt.
4. Bei vollständig gültigen Angaben gib eine Empfangsbestätigung mit dem Namen aus. Es wird kein Gerät tatsächlich verbucht.

**Teste selbst:**

- Mia / kein Haken -> Name bleibt, Meldung zur Bestätigung.
- Leer / Haken -> Name leer, der Haken bleibt gesetzt.
- Mia / Haken -> Erfolg; ein fremder Checkbox-Wert wird abgelehnt.

Zusätzlich gelten die gemeinsamen Prüfungen aus README.md: fehlende Parameter, leere Eingaben, beide Fehler und keine PHP-Warnungen.
