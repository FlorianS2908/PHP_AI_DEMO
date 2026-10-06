# 07 Eine Meldung nur einmal anzeigen

**POST · notiz (Text)**

Flash-Meldung: lesen, merken, aus der Session entfernen

1. Prüfe eine neue Notiz wie bisher. Bei gültigem Text speicherst du die Notiz in der Session; bei Fehlern bleibt der alte Wert erhalten.
2. Lege bei Erfolg zusätzlich die Meldung „Notiz gespeichert.“ in einem eigenen Session-Eintrag ab. Leite mit HTTP 303 zum Formular zurück.
3. Lies die Meldung in index.php in eine lokale Variable und entferne anschließend nur ihren Session-Eintrag. Gib die lokale Meldung unter dem Formular-Titel aus.
4. Lade die Seite erneut: Die Meldung ist weg, die Notiz bleibt. Eine weitere erfolgreiche Speicherung erzeugt wieder genau eine neue Meldung.

## Teste selbst

- „Buch zurückgeben“ speichern → Notiz und Meldung sichtbar.
- F5 → Meldung verschwunden; Notiz weiterhin gespeichert.
- Leere Eingabe → Fehler, keine neue Erfolgsmeldung.

Die gemeinsamen Regeln stehen im Aufgaben-PDF. Startdateien enthalten keine fertige Verarbeitung.
