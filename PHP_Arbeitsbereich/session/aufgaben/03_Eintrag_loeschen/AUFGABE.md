# 03 Nur einen Eintrag entfernen

**POST · notiz (Text) · Aktionen speichern / loeschen**

unset() löscht gezielt einen Schlüssel

1. Starte die Session. Initialisiere einen fehlenden Bereich einmalig mit werkraum und zeige Bereich sowie Notiz getrennt an.
2. Prüfe beim Speichern die Notiz mit isset(), is_string() und trim(). Ein leerer Text darf einen alten Eintrag nicht überschreiben.
3. Beim POST-Auftrag loeschen entfernst du ausschließlich die Notiz. Bereich und Session müssen erhalten bleiben. Löschen verlangt keine neue Texteingabe.
4. Leite nach jeder gültigen Aktion zurück. Ohne Notiz erscheint „Keine Notiz“; erneutes Löschen darf keine PHP-Warnung auslösen.

## Teste selbst

- „Schlüssel abholen“ speichern und löschen → nur die Notiz verschwindet.
- Der Bereich werkraum bleibt nach dem Löschen sichtbar.
- Löschen bei leerem Feld → erlaubt; Speichern bei leerem Feld → Fehler.

Die gemeinsamen Regeln stehen im Aufgaben-PDF. Startdateien enthalten keine fertige Verarbeitung.
