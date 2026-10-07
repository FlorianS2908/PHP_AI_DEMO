# Historische technische Prüfung der Musterlösungen

Dieser übernommene Nachweis bezieht sich auf den damaligen Stand. Die aktuelle Korrektur von Chatname und Fundbüro ist im zentralen [Inhaltsreview](../../../../../pruefberichte/inhaltsreview.md) dokumentiert.

Geprüft mit PHP 8.4.23 und dem integrierten PHP-Webserver.

- 60 PHP-Dateien (Startdateien und Musterlösungen) ohne Syntaxfehler.
- 345 HTTP-Anfragen für Formulare und Auswertungen.
- GET und POST werden getrennt behandelt. Falsche Methoden erzeugen keine Erfolgsausgabe.
- Fehlende, leere, nur aus Leerzeichen bestehende und als Array manipulierte Pflichtfelder werden abgefangen.
- Fehler führen per HTTP 303 zum Formular zurück; keine Ausgabe vor oder nach dieser Rückleitung.
- Gültige Werte bleiben erhalten. Ungültige Felder werden geleert; Auswahl und Checkbox behalten nur gültige Zustände.
- Bestandszahl 0, Zahlenbereiche, E-Mail-Format und freiwillige Extras sind geprüft.
- Aufgabe 10 prüft erst die Einzelwerte, dann die Reihenfolge. 2 bis 5 ergibt 4 Seiten, 5 bis 5 ergibt 1 Seite.
- Korrektur-Durchläufe nach einer Rückleitung sowie HTML- und URL-Kodierung mit Sonderzeichen sind geprüft.
- Das Aufgaben-PDF hat 7 Seiten; alle Seiten wurden gerendert und auf das Layout kontrolliert.

Die Startdateien enthalten absichtlich TODOs; ihre Auswertungen sind noch keine fertigen Anwendungen.
Die HTTP-Funktionstests betreffen die ausgearbeiteten Musterlösungen.
