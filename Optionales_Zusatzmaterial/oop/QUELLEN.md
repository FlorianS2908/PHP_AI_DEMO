# Quellen und Abgrenzung

## Aus deinen Unterlagen

- **BigPicture_PHP.pdf, PDF-Seite 4–5:** nennt „Grundlagen OOP in PHP“ im Zusammenhang mit dem späteren MVC-Entwurf. Dieser Paketbaustein behandelt nur die Grundlagen, nicht das MVC-Projekt.
- **Java-Grundlagen_Teil 5 Java-OO_Präsentation.pdf:** vorhandene Java-Unterlage als begrifflicher Anschluss, nicht als PHP-Syntaxquelle. PDF-Seiten 9–11: Klasse als Bauplan, Objekte, Attribute und Methoden. Seiten 15–16: public/private und Kapselung. PDF-Seite 43 (gedruckte Folie 44): Konstruktor und Initialisierung. Folie „Attribute“ (gedruckte Folie 62): Getter/Setter und Datenprüfung.
- **PHP-Kurs_Kapitel 2_Qualitätssicherung_Präsentation(1).pdf, Seiten 8 und 22:** erwartete Testergebnisse festlegen sowie übersichtlicher, modularer Quellcode.
- **PHP_10_Aufgaben_Formulare_Alltag.pdf:** Anschluss an den bereits vorbereiteten POST-Ablauf mit serverseitigen Prüfungen, Fehler-Rückleitung und Werterhalt.

In den hier verfügbaren PHP-Kapiteln 1–5 steckt keine ausgearbeitete PHP-OOP-Lektion.
Die zehn Aufgaben, Beispielklassen und Lernreihenfolge sind eine **neu erstellte didaktische Ausarbeitung**, keine wörtliche Übernahme aus den Präsentationen.
Die Java-Begriffe werden ausdrücklich in PHP umgesetzt. Beispielsweise heißt der PHP-Konstruktor __construct und nicht wie die Klasse. Java-spezifische Regeln werden nicht als PHP-Regeln übernommen.

## Zusätzliche technische Referenz: offizielles PHP-Handbuch

Die folgenden Seiten dienen ausschließlich zur Prüfung der neuen PHP-Umsetzung, nicht als Nachweis, dass diese Syntax in deinen Folien behandelt wird.

1. Klassen, new, $this, Methoden: https://www.php.net/manual/de/language.oop5.basic.php
2. Eigenschaften: https://www.php.net/manual/de/language.oop5.properties.php
3. Konstruktor: https://www.php.net/manual/de/language.oop5.decon.php
4. Sichtbarkeit: https://www.php.net/manual/de/language.oop5.visibility.php
5. Rückgabewerte: https://www.php.net/manual/de/functions.returning-values.php
6. require_once: https://www.php.net/manual/de/function.require-once.php
7. Formulare: https://www.php.net/manual/de/tutorial.forms.php
8. isset / is_string / is_int: https://www.php.net/manual/de/function.isset.php , https://www.php.net/manual/de/function.is-string.php , https://www.php.net/manual/de/function.is-int.php
9. header: https://www.php.net/manual/de/function.header.php
10. HTML-Ausgabe: https://www.php.net/manual/de/function.htmlspecialchars.php
11. URL-Parameter: https://www.php.net/manual/de/function.http-build-query.php

Abruf und technische Kontrolle: 01.10.2026. Konkrete lokale Tests stehen im separaten Lösungspaket.

## Absichtlich nicht enthalten

Vererbung, Interfaces, Traits, statische Mitglieder, Autoloading, Composer, Frameworks, Datenbank, Login, vollständiges MVC und Objekte in Sessions. Konstruktoren werden ausgeschrieben; keine Kurzschreibweise mit Property Promotion. PHP-Typdeklarationen sind in diesem Einstiegsbaustein nicht zusätzlich erforderlich. Wo die Aufgaben einen bestimmten Datentyp verlangen, wird er ausdrücklich geprüft.
