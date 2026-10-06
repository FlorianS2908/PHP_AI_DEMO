PHP – PHP: Arrays und mehrseitige Formulare
============================================

FERTIGES UNTERRICHTSPAKET – kein Build-Schritt, keine Paketinstallation.

1. WEBVARIANTE
   START-Webvariante.cmd oder webvariante.html öffnen.
   Die Webvariante enthält alle Styles und die Foliensteuerung in einer Datei.
   Navigation: Pfeiltasten links/rechts, Pos1/Ende, Schaltflächen, Themennavigation.
   Leseansicht und Druckansicht sind vorhanden.

2. ECHTE PHP-DEMO
   ZIP vollständig entpacken. PHP-START.cmd starten.
   Das Fenster offen lassen und http://127.0.0.1:8080/ im Browser öffnen.
   Ein vorhandenes PHP oder XAMPP-PHP wird verwendet, nichts nachinstalliert.
   MySQL / MariaDB wird NICHT benötigt.
   Alternativ im Paketordner:
   php -d session.auto_start=0 -S 127.0.0.1:8080 -t .
   Alternativ XAMPP: Ordner nach htdocs kopieren, Apache starten, über localhost öffnen.

3. MINI-DEMO
   demo/00-mini/formular.html -> ausgabe.php
   Dropdown, Checkbox-Array und Textarea; echte PHP-Auswertung.

4. MEHRSEITIGE DEMO
   demo/01-mehrseitig/auswahl.php -> pruefen.php -> ergebnis.php
   Katalogoptionen, Mehrfachauswahl, Radio und Änderungs-Dropdown.
   Alle Werte werden explizit über POST/Hidden erneut transportiert.
   Jede Empfangsseite prüft neu. Preise kommen aus katalog.php.
   Bearbeiten nutzt POST zurück; ein normaler Link trägt keine POST-Daten.

5. ARRAY-LABOR
   demo/02-arrays/arrays-kontrollstrukturen.php
   Elf tatsächliche PHP-Ausgaben zu Arrays und Kontrollstrukturen.

6. SICHERHEIT UND UNTERRICHTSGRENZEN
   Nur fiktive Daten verwenden. Keine Datenbank, Sessions, Cookies, Anmeldung,
   Buchung oder dauerhafte Speicherung. Kein produktionsreifes Buchungssystem.
   Die Hauptdemo setzt keine Cookies. session.auto_start muss ausgeschaltet sein;
   beim beigelegten PHP-Startbefehl wird das ausdrücklich festgelegt.
   POST ist keine Verschlüsselung. Für produktiven, vertraulichen Transport: HTTPS.
   HTML-Text wird mit htmlspecialchars maskiert. Hidden-Werte bleiben veränderbar.
   Gültige andere IDs sind andere gültige Auswahlen, kein Nachweis früherer Eingaben.
   Debug-Ansichten sind Unterrichtshilfen und nicht für produktive Nutzerdaten gedacht.

7. MATERIALIEN
   aufgaben.html: 6 Aufgaben
   dozent/loesungen.html: separate Lösungshinweise
   pseudocode.html und pseudocode.txt
   dozent/leitfaden.html: Ablauf / Demonstrationshinweise
   dozent/testprotokoll.html: konkrete Prüfungen und Umgebungsgrenzen
   quelltexte/index.html: lesbare Quelltexte
   quellen.html: Quellen, Vertiefungen und Präzisierungen

8. EINORDNUNG IN DEN BISHERIGEN KURS
   Den Ordner als eigenständige Ergänzung neben den bisherigen Kurs legen.
   Der alte Kurs wird nicht überschrieben. Innerhalb desselben Serververzeichnisses
   kann von dessen Übersicht auf diesen Ordner/index.html verlinkt werden.

9. TESTS
   php tests/run.php führt reine PHP-Tests ohne Browser oder Datenbank aus.
   Das bereitgestellte Testprotokoll nennt zusätzlich Browser-/HTTP-Prüfungen.
   Die Windows-CMD-Dateien wurden nicht in einer Windows-Umgebung ausgeführt.
