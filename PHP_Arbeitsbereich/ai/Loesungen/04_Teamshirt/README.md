# Teamshirt-Konfigurator – Musterlösung PHP

## Start mit XAMPP

Den gesamten Ordner `04_Teamshirt` nach `C:\xampp\htdocs\` kopieren. Apache im XAMPP Control Panel starten. Im Browser `http://localhost/04_Teamshirt/index.php` öffnen. MySQL wird nicht benötigt. Nicht per Doppelklick / `file://` öffnen.

Die Anwendungen sind für PHP 8 geschrieben. In dieser Erstellung wird die verfügbare PHP-Version gesondert im Prüfprotokoll dokumentiert. Keine externen Bibliotheken, kein Composer, keine Datenbank, keine Sessions, keine Cookies und kein JavaScript. Eine HTML-Datei allein könnte die geprüften Werte nicht serverseitig wieder einsetzen; die Formularansicht ist deshalb PHP mit normalem HTML-Markup.

## Dateien und Ablauf

`index.php` initialisiert Werte. `formular.php` enthält das Formular. `auswertung.php` liest POST, prüft alle Daten und berechnet das Ergebnis. `ergebnis.php` stellt es dar. `daten.php` enthält Kataloge, Preise und Regeln. `funktionen.php` enthält kleine wiederverwendbare Prüf- und Ausgabehelfer, `kopf.php` den HTML-Kopf und `style.css` das eigenständige CSS-Grid-Layout.

Bei Fehlern: HTTP 422 und erneute Darstellung von `formular.php`, ohne echte Weiterleitung. Gültige Felder bleiben erhalten, fehlerhafte Felder werden geleert. Bei `input type=color` zeigt der Browser bei einem leeren ungültigen Wert seinen eigenen Ersatzfarbwert; der Feldfehler bleibt dennoch sichtbar. Die gesamte Checkbox-Gruppe wird bei einem Fehler geleert. Beim Direktaufruf von `auswertung.php` ohne POST wird mit HTTP 303 zu `index.php` weitergeleitet.

## Gewählte Geschäftsregeln

- Grundpreise je Shirt: Basic 18 €, Sport 24 €, Premium 29 €. Menge 1 bis 200.
- Druck 5 €, Einzelverpackung 1,50 €, Teamlabel 2 € jeweils pro Shirt.
- Ab 10 Shirts 10 % Rabatt nur auf die Grundpreise; nicht auf Druck und Extras.
- Liefertermin frühestens 7 Kalendertage nach heute; Drucktext maximal 30 Zeichen.
- Farbe ist ein gewünschter Farbton, keine Zusage zur exakten realen Stofffarbe.

## Beispielauswertung

Die im Gesamtprüfprotokoll dokumentierte gültige Beispieleingabe ergibt **281,00 €**. Testdaten stehen in `testdaten.json`; Datums-Platzhalter sind durch passende zukünftige Werte zu ersetzen. `$regeln` und `$kataloge` sind die maßgebliche Quelle für Rechenwerte. Werden Regeln verändert, sind auch die sichtbaren Hinweistexte und HTML-Grenzen passend zu aktualisieren.

## Lern- und Prüfhinweise

Prüfe Pflichtfelder, erlaubte Optionen, Zahlen, Kombinationen und die Fachregeln. Teste die Servervalidierung auch mit deaktivierter Browservalidierung, etwa durch temporäres `novalidate` im Formular. Manipulierte Auswahlwerte und Array-statt-Text-Eingaben dürfen keine Warnungen oder Abstürze verursachen. Preise werden ausschließlich serverseitig gewählt, Geld wird in Cent berechnet und alle Eingaben in HTML mit `htmlspecialchars()` maskiert.

Die Demo führt keine echte Bestellung, Reservierung, Zahlung, Speicherung oder E-Mail aus. Sie ist kein vollständiges Produktionssystem. Vor einer Erweiterung um echte Zustandsänderungen wären unter anderem Sitzungs-/Berechtigungskonzept, CSRF-Schutz, Datenschutz, Logging und Betriebsabsicherung gesondert zu entwerfen.

## Quellen

PHP-Handbuch: Formulare verarbeiten; filter_var; htmlspecialchars; empty.
MDN: CSS grid layout; Client-side form validation.
W3C WAI: User Notifications (Forms).
Genaue Quellenlinks stehen in `QUELLEN.md` im Gesamtpaket.
