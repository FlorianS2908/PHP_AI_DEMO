# Technisches Testprotokoll – 01.10.2026

## Tatsächlich geprüft
- Alle 28 PHP-Anwendungs- und Startdateien mit `php -l`: keine Syntaxfehler (PHP 8.4.23 CLI).
- Person-Klasse nativ in PHP: Konstruktor, drei Getter, getrennte Objekte und private Attribute.
- JavaScript der Webeinführung mit `node --check` und im Chromium-Renderer:
  beide Abläufe, Zurück/Weiter/Reset, ohne JavaScript-Fehler.
- Webeinführung bei 1150 und 390 Pixeln, Tabellen-/Formularansicht bei Desktop-/Mobilbreite.
- Aufgaben-PDF: sieben Seiten gerendert und visuell geprüft.

## HTTP-Tests mit ausdrücklich simuliertem Datenbankzugriff
Für diese Tests wurde NUR in einer separaten Testkopie `verbindeDatenbank()` durch
PDO-/PDOStatement-Testdoubles ersetzt. Diese Testdoubles akzeptieren genau die
verwendeten SELECT-/INSERT-Anweisungen und halten Testzeilen in einer JSON-Datei.
Die übrigen Anwendungsdateien liefen als PHP über einen lokalen HTTP-Server.
Da mbstring hier fehlt, wurden dessen zwei verwendete Funktionen nur im Test durch
UTF-8-Prüfung und iconv-basierte Zeichenzählung ersetzt. Das ist kein Test der echten Erweiterung.

Geprüft wurden: drei Zeilen in Person-Objekte umwandeln, Getter-Ausgabe in HTML,
Parameterübergabe, Pflichtfelder, fehlende Einträge, Array-Eingaben, trim(), 50/51-Zeichen-Grenze,
Umlaute, Apostrophe, Ausgabe-Maskierung, Werterhalt, 303-Rückleitungen, einmalige Erfolgsmeldung,
GET ohne Schreibzugriff, fehlender/manipulierter Formulartoken, leere Ergebnismenge,
simulierte DB-Fehler und neue Browser-Sessions. Alle zugehörigen Prüfungen bestanden.
Die Originaldatei zeigte beim hier fehlenden PDO-MySQL-Treiber eine kontrollierte Fehlermeldung.

## Nicht in dieser Umgebung getestet
Es stand kein laufender MySQL-/MariaDB-Server und kein PDO-MySQL-Treiber zur Verfügung.
Eine Installation war hier wegen fehlendem Netzwerkzugang nicht möglich.
Deshalb wurden der reale SQL-Import, echte MySQL-Persistenz, native Prepared Statements,
die reale mbstring-Erweiterung und Windows/XAMPP NICHT ausgeführt.
Die SQL-Datei wurde auf ihren kleinen CREATE-/INSERT-Aufbau geprüft, aber nicht von einem DB-Server ausgeführt.
Ein Testdouble ersetzt keinen Integrationstest mit dem echten Server.

## Lokale Abschlussprüfung in XAMPP
1. SQL einmal in eine neue Übungsdatenbank importieren: drei Beispielpersonen.
2. Lesedemo öffnen: drei Personenzeilen und Klasse Person.
3. Nora / Weber speichern: zusätzliche DB-Zeile, Erfolg, neue Tabelle.
4. Mia / leer: keine DB-Zeile, Mia erhalten, Nachname leer, Meldung.
5. Beide Felder leer, ein Feld fehlend, Arrays und 51 Zeichen: kein INSERT.
6. Léa / O'Neil speichern und HTML-Testzeichen als Text darstellen.
7. F5 nach Rückleitung: keine zusätzliche Zeile. Neues privates Fenster: gleiche DB-Personen.

Die ausgelieferten Dateien enthalten ausschließlich den echten PDO-MySQL-Code;
Testdoubles, JSON-Testdaten und Funktionsersatzdateien sind NICHT in den ZIPs enthalten.
