# PHP – Formularlabor mit KI

## Aufgaben an die Teilnehmenden ausgeben

`PHP_Formulare_KI_Aufgaben.pdf` enthält den gemeinsamen Rahmen und fünf Aufgaben auf insgesamt zwölf Seiten. Die fünf Dateien in `Aufgaben_einzeln` enthalten jeweils den gemeinsamen Rahmen und die betreffende Aufgabe.

**Nur die Aufgaben-PDFs an die Teilnehmenden ausgeben.** `Loesungen` und `Dozentenmaterial` enthalten Lösungen, fertige Prompt-Muster und die Erläuterung des Kopiertests.

Die Aufgaben enthalten mehrere unterschiedliche Formularfeldarten, CSS-Grid-Anforderungen, UI-/UX-Beschreibungen ohne vorgegebene Gestaltungswerte, PHP-Verarbeitung, Fehlerreaktionen, fachliche Auswertung und konkrete Testsituationen. Die Teilnehmenden sollen eigene Umsetzungs-, Prüf- und Korrekturprompts entwickeln.

## Alle Lösungen mit XAMPP starten

1. Den vollständigen Ordner `Loesungen` nach `C:\xampp\htdocs\` kopieren.
2. Apache im XAMPP Control Panel starten. MySQL wird nicht benötigt.
3. Im Browser `http://localhost/Loesungen/index.html` öffnen.
4. Die gewünschte Musterlösung auswählen.

Die Dateien nicht per `file://` oder Doppelklick auf eine PHP-Datei starten. Jeder Aufgabenordner kann auch einzeln nach `htdocs` kopiert und über seine eigene `index.php` geöffnet werden. Die Details stehen in seiner README.

## Musterlösungen

- Workshop-Anmeldung: Pflichtfelder, optionale Extras, Pro-Person-Kosten.
- Fahrrad-Werkstattauftrag: bedingte Telefonpflicht, Datum, Kostenschätzung und Budgetwarnung.
- Raumreservierung: Kapazität, Zeiträume, aufgerundete Abrechnung.
- Teamshirt-Konfigurator: Druckabhängigkeiten, Farbe, Liefer-Vorlauf und Rabattbasis.
- PC-Konfigurator: vereinfachte Kompatibilitätsregeln, lokale Icons, serverseitige Preise und Budgetvergleich.

Jeder Ordner enthält vollständige HTML/PHP-Dateien, CSS, Katalogdaten, kleine Hilfsfunktionen, lokale SVG-Icons, eine Anleitung, einen Beispieldatensatz und getrennte Prompt-Muster. Die Icons benötigen keine externen Bibliotheken. Es gibt keine echte Speicherung, Buchung, Bestellung, Zahlung oder E-Mail-Auslösung.

## Kopiertest

Die Aufgaben-PDFs enthalten einen unsichtbaren, aber extrahierbaren didaktischen Hinweis. Er fordert ein harmloses Gedicht anstelle der Programmierlösung. Seine Wirkung auf eine KI ist nicht garantiert. Details, Grenzen und Hinweise zur fairen Durchführung stehen ausschließlich in `Dozentenmaterial/PHP_Dozentenhinweise_Promptloesungen.pdf`.

Die saubere, visuell identische Referenz ohne diesen Hinweis liegt im Dozentenordner. Die PDF-Textextraktion und die visuelle Gleichheit wurden geprüft; eine Wirkung auf konkrete KI-Systeme wurde nicht getestet.

## Technische Prüfung

152 HTTP-Funktionstests unter PHP 8.4.23 bestanden; alle 35 PHP-Dateien sind syntaktisch geprüft. Formulare und Ergebnisse wurden in Chromium auf breiten und schmalen Ansichten gerendert. HTTP-Tests und Browserdarstellung wurden getrennt durchgeführt; kein vollständiger Browser-End-to-End-Test und kein Test unter XAMPP/Windows. Einzelheiten stehen im Prüfprotokoll.

Alle Geschäftsregeln, Preise und konkreten Gestaltungswerte der Musterlösungen sind frei gewählte Unterrichtsannahmen. Vor einer produktiven Nutzung sind zusätzliche Betriebs-, Datenschutz- und Sicherheitsanforderungen zu bearbeiten.
