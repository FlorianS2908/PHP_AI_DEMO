## Aufgabe 04: Kontakt: Name und E-Mail

**Methode:** POST  
**Felder:** Name: name; E-Mail-Adresse: email

Zusätzlich zum Pflichtfeld auch das Format einer Eingabe prüfen.

1. Empfange name und email mit POST. Prüfe beide Einträge mit isset(), übernimm nur Textwerte und entferne äußere Leerzeichen.
2. Der Name darf nicht leer sein. Die E-Mail-Adresse muss zusätzlich die PHP-Prüfung mit FILTER_VALIDATE_EMAIL bestehen.
3. Prüfe beide Felder vor der Rückleitung. Erhalte nur gültige Angaben; eine falsche E-Mail-Adresse wird geleert.
4. Bei Erfolg gib Name und E-Mail-Adresse aus. Es wird keine E-Mail verschickt und kein Postfach auf Existenz geprüft.

**Teste selbst:**

- Mia / mia@example.org -> Erfolg.
- Mia / keine-mail -> Name bleibt, E-Mail-Feld leer.
- Leer / mia@example.org -> Adresse bleibt; beide leer -> beide Meldungen.

Zusätzlich gelten die gemeinsamen Prüfungen aus README.md: fehlende Parameter, leere Eingaben, beide Fehler und keine PHP-Warnungen.
