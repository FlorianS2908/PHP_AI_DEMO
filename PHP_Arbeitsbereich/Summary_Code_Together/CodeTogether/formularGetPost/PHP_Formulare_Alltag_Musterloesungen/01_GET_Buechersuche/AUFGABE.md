## Aufgabe 01: Büchersuche

**Methode:** GET  
**Felder:** Suchbegriff: suchbegriff

Ein Feld empfangen, auf fehlende oder leere Eingaben reagieren.

1. Sende suchbegriff mit GET an auswertung.php. Prüfe den Eintrag in $_GET mit isset(), bevor du ihn ausliest.
2. Übernimm nur einen Textwert und entferne äußere Leerzeichen. Ein fehlender oder danach leerer Suchbegriff ist ungültig.
3. Leite bei einem Fehler mit header() zum Formular zurück. Zeige dort die Fehlermeldung; das Feld bleibt leer.
4. Bei gültiger Eingabe gib aus, wonach gesucht wird. Eine echte Büchersuche wird nicht programmiert.

**Teste selbst:**

- Roboter -> Ausgabe des Suchbegriffs.
- Leer oder nur Leerzeichen -> Fehlermeldung im Formular.
- auswertung.php ohne Parameter öffnen -> Rückleitung, keine PHP-Warnung.

Zusätzlich gelten die gemeinsamen Prüfungen aus README.md: fehlende Parameter, leere Eingaben, beide Fehler und keine PHP-Warnungen.
