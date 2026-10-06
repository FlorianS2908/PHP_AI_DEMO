# 10 Vom kleinen Formular zum Objekt

OOP ergänzen, ohne den bekannten Formularablauf neu zu erfinden.

**Dateien:** index.php, auswertung.php, Lagerartikel.php und function.php

1. Das Formular mit Name und Bestand sowie POST-Prüfung und Fehler-Rückleitung sind vorbereitet. Lies den Ablauf: isset(), Texttyp, trim(), Pflichtangaben und ganze Bestandszahl von 0 bis 50.
2. Ergänze Lagerartikel: private Attribute name und bestand (Startwert 0), Konstruktor für den Namen, getName(), getBestand() und setBestand($bestand). Der Setter akzeptiert nur int von 0 bis 50, liefert true/false und behält bei Fehlern den bisherigen Wert.
3. Ergänze im markierten Erfolgsbereich der Auswertung: Objekt erst nach fehlerfreier Eingabeprüfung erzeugen, Bestand über den Setter übernehmen und beide Werte über Getter ausgeben. Kein Zugriff auf $_POST in der Klasse.

## Teste selbst
- Stift / 0 → Erfolgsausgabe mit Bestand 0.
- Stift / 51 oder abc → 303-Rückleitung, Name bleibt, Bestand leer.
- Name leer / 4 → Bestand bleibt; beide leer → beide Meldungen. Direkter GET-Aufruf der Auswertung darf keinen Erfolg auslösen.

Neu erstellte PHP-Übung. Umfang und Herkunft: QUELLEN.md im Paketstamm.
