## Aufgabe 03: Fundbüro: Gegenstand beschreiben

**Methode:** GET  
**Felder:** Gegenstand: gegenstand; Farbe: farbe

Zwei Pflichtfelder getrennt prüfen und gültige Werte wieder einsetzen.

1. Empfange gegenstand und farbe mit GET. Prüfe jeden Eintrag zuerst mit isset(); beide Textfelder sind Pflichtfelder.
2. Entferne äußere Leerzeichen. Prüfe beide Felder unabhängig und sammle alle Fehlermeldungen sowie die gültigen Werte.
3. Leite erst nach beiden Prüfungen zurück. Zeige die Meldungen, setze gültige Werte wieder ein und lasse ungültige Felder leer.
4. Sind beide Werte gültig, gib Gegenstand und Farbe aus.

**Teste selbst:**

- Schirm / leer -> Schirm bleibt erhalten, Farbe bleibt leer.
- Leer / blau -> blau bleibt erhalten; beide leer -> zwei Feldmeldungen.
- Schirm / blau -> Erfolg; lösche danach einen Parameter aus der GET-URL.

Zusätzlich gelten die gemeinsamen Prüfungen aus README.md: fehlende Parameter, leere Eingaben, beide Fehler und keine PHP-Warnungen.
