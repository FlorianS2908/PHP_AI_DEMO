# Prüfprotokoll – PHP Formularlabor

Prüfumgebung: PHP Built-in-Server, Linux; XAMPP nicht ausgeführt. PHP 8.4.23. Prüfzeit laut Laufzeitumgebung: 2026-10-01T09:18:14.604360+02:00.

**152 von 152 HTTP-Funktionstests bestanden.**

| Aufgabe | Bestandene Tests | Kontrollsumme der Beispieleingabe |
|---|---:|---:|
| Workshop-Anmeldung | 27 | 272,00 € |
| Fahrrad-Werkstattauftrag | 32 | 104,00 € |
| Raumreservierung | 30 | 135,00 € |
| Teamshirt-Konfigurator | 32 | 281,00 € |
| PC-Konfigurator | 31 | 1.024,00 € |

## Geprüfte Funktionsbereiche

Initialaufruf, POST-Ziel, Labels, lokale Icons, Weiterleitung beim Direktaufruf, gültige Ergebnisse, leere Eingaben, gleichzeitige Fehler, Erhalt gültiger und Leeren ungültiger Werte, E-Mail-Format, Array-statt-Text, HTML-Maskierung, unbekannte Auswahlwerte, falsche und verschachtelte Checkbox-Listen, ignorierte Preismanipulation, Zahlengrenzen und unmögliche Datumswerte. Hinzu kommen die jeweiligen Geschäftsregeln.

## Darstellung

Die Formulare und Ergebnisse aller fünf Aufgaben wurden mit Chromium bei 1440 und 390 Pixeln Viewportbreite gerendert. Kein horizontaler Seitenüberlauf; CSS Grid ist aktiv. Eine PC-Fehlerantwort wurde ebenfalls gerendert. Das HTML wurde hierfür vom lokalen PHP-Server mit requests bezogen und im Browser mit eingebettetem identischem CSS dargestellt. Dies war eine getrennte Renderprüfung, kein vollständiger Browser-End-to-End-Test.

## PDFs und Kopiertest

Aufgaben: zwölf Seiten; Dozentenunterlage: acht Seiten; zusätzlich fünf einzelne Aufgaben-PDFs. Der Kopiertest-Marker ist mit pypdf auf jeder Aufgaben-Seite nachweisbar und wird auch von Poppler/pdftotext zwölfmal extrahiert. Ein Pixelvergleich aller zwölf Seiten bestätigt die visuelle Gleichheit mit der sauberen Referenz. Die Wirkung auf konkrete KI-Systeme wurde nicht getestet und ist nicht garantiert.

## Grenzen

Getestet wurde unter Linux mit dem PHP-Entwicklungsserver, nicht unter Windows/XAMPP. Es gibt keine echte Datenbank, Verfügbarkeitsprüfung, Bestellung oder E-Mail-Auslösung. Die Regeln sind Unterrichtsannahmen. Produktivbetrieb, Lasttests, vollständige Sicherheitsprüfung, PDF/UA-Konformität und eine formale Barrierefreiheitszertifizierung waren nicht Bestandteil der Prüfung.

Die vollständigen automatisierten Testergebnisse stehen in pruefprotokoll.json und browserpruefung.json.
