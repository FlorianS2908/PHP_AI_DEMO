# 02 Eine Einstellung verändern

**POST · modus (lesen / ueben)**

Einen vorhandenen Session-Wert überschreiben

1. Starte die Session auf beiden PHP-Seiten. Lies einen vorhandenen Lernmodus geprüft ein; ohne gültigen Eintrag gilt lesen.
2. Prüfe den POST-Eintrag modus ausdrücklich auf Vorhandensein, Texttyp und die erlaubten Werte lesen oder ueben.
3. Speichere nur einen gültigen Modus unter demselben Session-Schlüssel. Leite danach zurück; Anzeige und Vorauswahl müssen den neuen Wert zeigen.
4. Ein fehlender, leerer oder fremder Wert erzeugt eine Fehlermeldung. Das Fehlerfeld bleibt leer; ein älterer gespeicherter Modus bleibt unverändert.

## Teste selbst

- Lesen speichern, dann Üben → Üben ersetzt Lesen.
- modus=spielen → Fehler und leere Auswahl; alter Modus bleibt gespeichert.
- F5 nach dem Speichern → derselbe Modus.

Die gemeinsamen Regeln stehen im Aufgaben-PDF. Startdateien enthalten keine fertige Verarbeitung.
