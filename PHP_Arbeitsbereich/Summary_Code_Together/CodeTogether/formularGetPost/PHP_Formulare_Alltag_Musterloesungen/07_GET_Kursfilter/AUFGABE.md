## Aufgabe 07: Kursfilter: Auswahl kontrollieren

**Methode:** GET  
**Felder:** Thema: thema; Kursformat: format (online / praesenz)

Nur erlaubte Auswahlwerte akzeptieren und eine gültige Auswahl erhalten.

1. Empfange thema und format mit GET. Prüfe für beide Einträge isset() und den Texttyp. Das Thema darf nach trim() nicht leer sein.
2. Das Format muss genau online oder praesenz lauten. Eine leere Auswahl oder ein fremder Wert ist ungültig.
3. Leite bei Fehlern zurück. Ein gültiges Thema bleibt stehen; ein gültiges Format wird wieder ausgewählt, ein ungültiges zurückgesetzt.
4. Bei gültigen Angaben gib Thema und Kursformat aus. Verlasse dich nicht darauf, dass ein Auswahlfeld nur erlaubte Werte sendet.

**Teste selbst:**

- PHP / keine Auswahl -> PHP bleibt erhalten.
- Leer / Online -> Online bleibt ausgewählt.
- In der GET-URL format=hybrid setzen -> Fehler; PHP / Präsenz -> Erfolg.

Zusätzlich gelten die gemeinsamen Prüfungen aus README.md: fehlende Parameter, leere Eingaben, beide Fehler und keine PHP-Warnungen.
