<?php
declare(strict_types=1);

// PHP | PHP von Anfang an | 30 Musterlösungen
// Passendes Begleitskript: PHP_PHP_Grundlagen_Skript.pdf
//
// START IM REPOSITORY
// 1. PHP-START.cmd im Hauptordner ausführen oder das gesamte Repo mit XAMPP öffnen.
// 2. Im Browser: Arbeitsbereich > Summary Code Together > Grundlagen.
// 3. Diese Datei im Editor lesen und über den PHP-Server ausführen.
// Alternativ in einem Terminal mit PHP im Suchpfad: php PHP_PHP_Grundlagen_Loesungen.php
//
// SO ARBEITEST DU
// Eine Aufgabe nach der anderen bearbeiten. Jede Aufgabe ist eigenständig.
// Neue Werte werden pro Aufgabe gesetzt. Wiederholte Variablennamen sind hier Absicht.
// Startwerte, Überschriften und Ausgabe-Hilfen zählen nicht zur eigentlichen Lösung.
// Die Lösung besteht meist aus wenigen Anweisungen; Klammern stehen lesbar in eigenen Zeilen.
// Kein zusätzliches PHP-Öffnungstag in die Abschnitte kopieren.
// Ungültige Beispielbezeichner stehen nur in Kommentaren.
// Alle Beispiele laufen beim Öffnen automatisch. Vergleiche die Ausgabe mit "Erwartet".
//
// VORBEREITETE ANZEIGE - NUR FÜR DIE LOKALE LERNUMGEBUNG
// Die nächsten drei Zeilen zeigen Fehler und geben lesbaren Klartext im Browser aus.
// Sie sind keine zusätzliche Aufgabe und müssen nicht verändert werden.
error_reporting(E_ALL);
ini_set("display_errors", "1");
header("Content-Type: text/plain; charset=UTF-8");

echo "PHP | PHP-Grundlagen | Musterloesungen" . PHP_EOL;
echo "Vergleiche erst nach eigener Bearbeitung mit diesen 30 Musterlösungen." . PHP_EOL;

// ====================================================================================
// BLOCK A | Variablen und Kommentare
// ====================================================================================
// Eine Variable hat einen Namen und speichert einen Wert: $kurs = "PHP";
// Das $ gehört vor den Variablennamen. = weist zu; ; beendet die Anweisung.
// Normale Variablennamen: erster Buchstabe A-Z/a-z oder Unterstrich; danach auch Ziffern.
// Keine Leerzeichen oder Bindestriche: $kursName und $kurs_name sind geeignet.
// $name und $Name sind zwei verschiedene Variablen. Aussagekräftige Namen verwenden.
// Umlaute können technisch funktionieren; für unsere Beispiele verwenden wir ASCII-Namen.
// $this ist speziell reserviert und wird hier nicht als eigener Variablenname verwendet.
// Kommentare: // oder # bis Zeilenende; /* ... */ für Blockkommentare. Nicht verschachteln.
// echo gibt einen Wert aus. . verbindet Texte. PHP_EOL ergänzt einen Zeilenumbruch.
// Eine reine PHP-Datei benötigt hier kein schließendes PHP-Tag.

// ------------------------------------------------------------------------------
// AUFGABE 01 | Eine Variable anlegen
// 1. Lege die Variable $kurs an und speichere den Text "PHP".
// 2. Gib den Inhalt der Variable mit echo aus.
// 3. Ergänze mit PHP_EOL einen Zeilenumbruch.
// Hinweis: $ steht vor dem Variablennamen; Text steht in Anführungszeichen.
// Erwartet: PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 01 ===" . PHP_EOL;
$kurs = "PHP";
echo $kurs . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 02 | Bezeichner reparieren
// 1. Korrigiere den ungültigen Namen $1name zu $name1; Wert: "Mia".
// 2. Korrigiere den ungültigen Namen $kurs name zu $kursName; Wert: "PHP".
// 3. Gib beide Werte mit dem Text " lernt " dazwischen aus.
// Hinweis: Eine Ziffer darf nicht am Anfang stehen; Leerzeichen sind nicht erlaubt.
// Erwartet: Mia lernt PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 02 ===" . PHP_EOL;
$name1 = "Mia";
$kursName = "PHP";
echo $name1 . " lernt " . $kursName . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 03 | Kommentare schreiben
// 1. Schreibe vor den Code einen Kommentar mit //.
// 2. Speichere "Berlin" in $stadt; ergänze dahinter einen Kommentar mit /* ... */.
// 3. Gib $stadt aus; ergänze dahinter einen Kommentar mit #.
// Hinweis: Die Kommentare erklären den Code und werden nicht ausgegeben.
// Erwartet: Berlin
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 03 ===" . PHP_EOL;
// Beispielort speichern
$stadt = "Berlin"; /* Eine Textvariable */
echo $stadt . PHP_EOL; # Ort ausgeben


// ------------------------------------------------------------------------------
// AUFGABE 04 | Einen Wert überschreiben
// 1. Speichere die Zahl 5 in $punkte.
// 2. Weise derselben Variable anschließend die Zahl 9 zu.
// 3. Gib den aktuellen Wert aus.
// Hinweis: = weist einen Wert zu. Die zweite Zuweisung ersetzt die erste.
// Erwartet: 9
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 04 ===" . PHP_EOL;
$punkte = 5;
$punkte = 9;
echo $punkte . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 05 | Texte verbinden
// 1. Speichere "Mia" in $vorname und "Sommer" in $nachname.
// 2. Verbinde die beiden Werte bei der Ausgabe mit dem Punktoperator.
// 3. Setze zwischen Vorname und Nachname genau ein Leerzeichen.
// Hinweis: Für Textverknüpfung verwendest du . und nicht +.
// Erwartet: Mia Sommer
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 05 ===" . PHP_EOL;
$vorname = "Mia";
$nachname = "Sommer";
echo $vorname . " " . $nachname . PHP_EOL;


// ====================================================================================
// BLOCK B | Datentypen und Rechnen
// ====================================================================================
// int: ganze Zahl, z. B. 3. float: Dezimalzahl, z. B. 2.5 (Punkt, nicht Komma).
// string: Text, z. B. "7". bool: true oder false ohne Anführungszeichen.
// array: mehrere Einträge, z. B. ["rot", "blau"]. Erster Index hier: 0.
// null: expliziter Nullwert, weder der leere String noch die Zahl 0.
// object und resource gibt es ebenfalls; sie sind kein Übungsthema dieses Skripts.
// var_dump($wert) zeigt Wert und Typ. bool(false) wird dadurch sichtbar.
// PHP-Variablen können auch mit strict_types später Werte anderer Typen aufnehmen.
// declare(strict_types=1); steht als erste Anweisung direkt nach dem Öffnungstag.
// Keine Ausgabe und kein HTML davor; Datei als UTF-8 ohne BOM speichern.
// Strict Types betrifft skalare Typdeklarationen, etwa an Parametern und Rückgaben.
// Bei Parametern zählt die aufrufende Datei. Ein int ist für einen float-Parameter erlaubt.
// Keine automatische Bereichs- oder Inhaltsprüfung: Negative int-Werte bleiben int.
// + addiert, - subtrahiert, * multipliziert, / dividiert; % berechnet einen Divisionsrest.
// (int) wandelt gezielt um. Nur bekannte gültige Zahlenstrings damit umwandeln;
// ein Cast allein ist keine Prüfung beliebiger Eingaben.

// ------------------------------------------------------------------------------
// AUFGABE 06 | int und float ansehen
// 1. Speichere die ganze Zahl 3 in $anzahl.
// 2. Speichere die Dezimalzahl 2.5 in $preis.
// 3. Zeige beide Werte samt Datentyp mit einem Aufruf von var_dump().
// Hinweis: var_dump($a, $b) kann mehrere Werte anzeigen. Dezimaltrennzeichen: Punkt.
// Erwartet: int(3) und float(2.5)
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 06 ===" . PHP_EOL;
$anzahl = 3;
$preis = 2.5;
var_dump($anzahl, $preis);


// ------------------------------------------------------------------------------
// AUFGABE 07 | string und bool unterscheiden
// 1. Speichere den Text "7" in $zahlAlsText.
// 2. Speichere den Wahrheitswert true in $aktiv.
// 3. Zeige beide Werte samt Datentyp mit var_dump().
// Hinweis: "7" ist ein String. true steht ohne Anführungszeichen.
// Erwartet: string(1) "7" und bool(true)
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 07 ===" . PHP_EOL;
$zahlAlsText = "7";
$aktiv = true;
var_dump($zahlAlsText, $aktiv);


// ------------------------------------------------------------------------------
// AUFGABE 08 | null und ein kleines Array
// 1. Lege $hinweis mit dem Wert null an.
// 2. Lege $farben als Array mit "rot" und "blau" an.
// 3. Zeige $hinweis und das erste Arrayelement mit var_dump().
// Hinweis: Bei diesem Array ist der erste Index 0: $farben[0].
// Erwartet: NULL und string(3) "rot"
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 08 ===" . PHP_EOL;
$hinweis = null;
$farben = ["rot", "blau"];
var_dump($hinweis, $farben[0]);


// ------------------------------------------------------------------------------
// AUFGABE 09 | Mit Variablen rechnen
// 1. Multipliziere $preis mit $anzahl.
// 2. Speichere das Ergebnis in $gesamt.
// 3. Gib $gesamt aus.
// Hinweis: Der Multiplikationsoperator ist *.
// Erwartet: 12
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 09 ===" . PHP_EOL;
$preis = 4;
$anzahl = 3;
$gesamt = $preis * $anzahl;
echo $gesamt . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 10 | Einen bekannten Zahlenstring umwandeln
// 1. Wandle den vorgegebenen String mit (int) in eine ganze Zahl um.
// 2. Speichere das Ergebnis in $zahl.
// 3. Prüfe das Ergebnis mit var_dump().
// Hinweis: Hier ist "12" bereits als gültig bekannt. Ein Cast ist keine Eingabeprüfung.
// Erwartet: int(12)
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 10 ===" . PHP_EOL;
$eingabe = "12";
$zahl = (int) $eingabe;
var_dump($zahl);


// ====================================================================================
// BLOCK C | Entscheidungen
// ====================================================================================
// Eine Bedingung ergibt true oder false. if führt einen Block bei true aus.
// else ist die Alternative; elseif prüft eine weitere Bedingung.
// = bedeutet Zuweisung. == vergleicht mit möglichen Typumwandlungen.
// === prüft gleichen Wert UND gleichen Typ; !== ist das Gegenstück.
// < kleiner, > größer, <= höchstens, >= mindestens.
// && bedeutet UND; || bedeutet ODER; ! bedeutet NICHT.
// Geschweifte Klammern fassen Anweisungen zusammen. Kein ; direkt hinter if (...).
// switch wählt einen passenden case. break beendet den Fall; default ist der Ersatzfall.
// switch vergleicht nicht strikt; strict_types ändert das nicht. Hier nur Textwerte
// verwenden.

// ------------------------------------------------------------------------------
// AUFGABE 11 | Eine negative Zahl korrigieren
// 1. Prüfe mit if, ob $zahl kleiner als 0 ist.
// 2. Setze $zahl nur in diesem Fall auf 0.
// 3. Gib $zahl nach der Verzweigung aus.
// Hinweis: Die Änderung steht innerhalb der geschweiften Klammern.
// Erwartet: 0
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 11 ===" . PHP_EOL;
$zahl = -4;
if ($zahl < 0) {
    $zahl = 0;
}
echo $zahl . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 12 | Zwischen zwei Ausgaben wählen
// 1. Prüfe mit if, ob $punkte mindestens 5 beträgt.
// 2. Gib dann "Ziel erreicht" aus.
// 3. Gib im else-Zweig "Weiter ueben" aus.
// Hinweis: Mindestens bedeutet >=. Es wird genau einer der beiden Zweige ausgeführt.
// Erwartet: Ziel erreicht
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 12 ===" . PHP_EOL;
$punkte = 7;
if ($punkte >= 5) {
    echo "Ziel erreicht" . PHP_EOL;
} else {
    echo "Weiter ueben" . PHP_EOL;
}


// ------------------------------------------------------------------------------
// AUFGABE 13 | Drei Fälle unterscheiden
// 1. Gib bei einer Zahl kleiner als 0 den Text "negativ" aus.
// 2. Prüfe danach mit elseif auf === 0 und gib "null" aus.
// 3. Gib im else-Zweig "positiv" aus.
// Hinweis: Hier ist $zahl eine ganze Zahl; "null" ist nur der auszugebende Text.
// Erwartet: null
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 13 ===" . PHP_EOL;
$zahl = 0;
if ($zahl < 0) {
    echo "negativ" . PHP_EOL;
} elseif ($zahl === 0) {
    echo "null" . PHP_EOL;
} else {
    echo "positiv" . PHP_EOL;
}


// ------------------------------------------------------------------------------
// AUFGABE 14 | Zwei Bedingungen verbinden
// 1. Prüfe, ob $punkte mindestens 5 beträgt.
// 2. Prüfe zugleich, ob $abgegeben === true ist. Verbinde beide Prüfungen mit &&.
// 3. Gib nur dann "Bestanden" aus. Ein else-Zweig ist nicht nötig.
// Hinweis: && bedeutet: Beide Bedingungen müssen wahr sein.
// Erwartet: Bestanden
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 14 ===" . PHP_EOL;
$punkte = 8;
$abgegeben = true;
if ($punkte >= 5 && $abgegeben === true) {
    echo "Bestanden" . PHP_EOL;
}


// ------------------------------------------------------------------------------
// AUFGABE 15 | Eine Aktion mit switch auswerten
// 1. Werte $aktion mit switch aus.
// 2. Gib im case "start" den Text "Los" aus und beende den Fall mit break.
// 3. Gib im default-Zweig für alle anderen Werte "Unbekannt" aus.
// Hinweis: Die vollständige switch-Schreibweise braucht etwas mehr Klammer- und
// Strukturzeilen.
// Erwartet: Los
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 15 ===" . PHP_EOL;
$aktion = "start";
switch ($aktion) {
    case "start":
        echo "Los" . PHP_EOL;
        break;
    default:
        echo "Unbekannt" . PHP_EOL;
}


// ====================================================================================
// BLOCK D | Schleifen und kleine Arrays
// ====================================================================================
// for: Start, Bedingung und Veränderung stehen im Schleifenkopf.
// while: Bedingung zuerst prüfen, dann gegebenenfalls den Block ausführen.
// do-while: zuerst ausführen, dann prüfen; mindestens ein Durchlauf.
// $i++ erhöht um 1; $i-- verringert um 1. Zählbedingungen müssen irgendwann enden.
// foreach ($farben as $farbe) liest nacheinander die Werte eines Arrays.
// foreach ($lager as $artikel => $bestand) liefert Schlüssel und Wert.
// Änderungen im Array speichern: $lager[$artikel] = neuerWert;
// Nur $bestand neu zuzuweisen ändert bei dieser foreach-Form nicht das ursprüngliche Array.
// break beendet eine Schleife; continue überspringt den restlichen aktuellen Durchlauf.
// In den fünf Übungen brauchen wir keine verschachtelten Schleifen.

// ------------------------------------------------------------------------------
// AUFGABE 16 | Mit for zählen
// 1. Starte eine for-Schleife mit $i = 1.
// 2. Wiederhole, solange $i <= 3 gilt; erhöhe $i mit $i++.
// 3. Gib $i in jedem Durchlauf in einer eigenen Zeile aus.
// Hinweis: Im Schleifenkopf stehen Start; Bedingung; Änderung.
// Erwartet: 1, 2, 3 - jeweils in einer eigenen Zeile
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 16 ===" . PHP_EOL;
for ($i = 1; $i <= 3; $i++) {
    echo $i . PHP_EOL;
}


// ------------------------------------------------------------------------------
// AUFGABE 17 | Mit while herunterzählen
// 1. Wiederhole mit while, solange $rest größer als 0 ist.
// 2. Gib zuerst den aktuellen Wert aus.
// 3. Verringere $rest danach mit $rest-- um 1.
// Hinweis: Die Veränderung des Zählers verhindert hier eine Endlosschleife.
// Erwartet: 3, 2, 1 - jeweils in einer eigenen Zeile
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 17 ===" . PHP_EOL;
$rest = 3;
while ($rest > 0) {
    echo $rest . PHP_EOL;
    $rest--;
}


// ------------------------------------------------------------------------------
// AUFGABE 18 | do-while führt zuerst aus
// 1. Gib innerhalb eines do-Blocks $zahl aus.
// 2. Erhöhe $zahl anschließend mit $zahl++.
// 3. Wiederhole am Ende mit while ($zahl < 3);. Erkläre die einmalige Ausgabe.
// Hinweis: Die Bedingung wird erst nach dem ersten Durchlauf geprüft.
// Erwartet: 5 - genau einmal
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 18 ===" . PHP_EOL;
$zahl = 5;
do {
    echo $zahl . PHP_EOL;
    $zahl++;
} while ($zahl < 3);


// ------------------------------------------------------------------------------
// AUFGABE 19 | Arraywerte mit foreach lesen
// 1. Durchlaufe $farben mit foreach.
// 2. Nenne die Variable für den jeweiligen Wert $farbe.
// 3. Gib jede Farbe in einer eigenen Zeile aus.
// Hinweis: Grundform: foreach ($array as $wert).
// Erwartet: rot, gruen, blau - jeweils in einer eigenen Zeile
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 19 ===" . PHP_EOL;
$farben = ["rot", "gruen", "blau"];
foreach ($farben as $farbe) {
    echo $farbe . PHP_EOL;
}


// ------------------------------------------------------------------------------
// AUFGABE 20 | Mit Schlüssel und Wert verändern
// 1. Durchlaufe $lager mit foreach; verwende $artikel als Schlüssel und $bestand als Wert.
// 2. Speichere für jeden Artikel $bestand + 1 zurück in $lager[$artikel].
// 3. Gib danach die Bestände von "Stift" und "Heft" getrennt durch " / " aus.
// Hinweis: $bestand zu ändern allein verändert das Array hier nicht. Schreibe über den
// Schlüssel zurück.
// Erwartet: 3 / 1
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 20 ===" . PHP_EOL;
$lager = ["Stift" => 2, "Heft" => 0];
foreach ($lager as $artikel => $bestand) {
    $lager[$artikel] = $bestand + 1;
}
echo $lager["Stift"] . " / " . $lager["Heft"] . PHP_EOL;


// ====================================================================================
// BLOCK E | Strings verändern
// ====================================================================================
// String-Funktionen liefern einen Rückgabewert. Das Ergebnis muss gespeichert oder benutzt
// werden.
// $name = trim($name); entfernt hier äußere Leerzeichen. Innere bleiben erhalten.
// strtolower() wandelt ASCII-Buchstaben in Kleinbuchstaben um.
// strtoupper() wandelt ASCII-Buchstaben in Großbuchstaben um.
// strlen() zählt Bytes. Bei den ASCII-Beispielen ist das auch die Zeichenanzahl.
// Umlaute und Emojis können mehrere Bytes benötigen; dafür später mb_*-Funktionen betrachten.
// str_replace("rot", "blau", $text) ersetzt passende Vorkommen im Text.
// $text === "" prüft genau auf einen leeren String; "0" ist dabei nicht leer.
// isset($wert): Variable vorhanden und nicht null. empty($wert): auch bei 0 und "0" wahr.

// ------------------------------------------------------------------------------
// AUFGABE 21 | Äußere Leerzeichen entfernen
// 1. Rufe trim() mit $name auf.
// 2. Speichere den Rückgabewert wieder in $name.
// 3. Gib den bereinigten Namen aus.
// Hinweis: trim() entfernt hier die Leerzeichen am Anfang und Ende, nicht in der Mitte.
// Erwartet: Mia
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 21 ===" . PHP_EOL;
$name = "  Mia  ";
$name = trim($name);
echo $name . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 22 | In Kleinbuchstaben umwandeln
// 1. Wandle den Text mit strtolower() in Kleinbuchstaben um.
// 2. Speichere das Ergebnis wieder in $text.
// 3. Gib $text aus.
// Hinweis: Für diese Übung verwenden wir nur ASCII-Buchstaben.
// Erwartet: php macht spass
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 22 ===" . PHP_EOL;
$text = "PHP MACHT SPASS";
$text = strtolower($text);
echo $text . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 23 | In Großbuchstaben umwandeln
// 1. Wandle den Text mit strtoupper() in Großbuchstaben um.
// 2. Speichere das Ergebnis wieder in $text.
// 3. Gib $text aus.
// Hinweis: Auch diese Übung verwendet nur ASCII-Buchstaben.
// Erwartet: HALLO PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 23 ===" . PHP_EOL;
$text = "hallo php";
$text = strtoupper($text);
echo $text . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 24 | Die Länge eines Textes bestimmen
// 1. Bestimme die Länge mit strlen().
// 2. Speichere das Ergebnis in $laenge.
// 3. Gib $laenge aus.
// Hinweis: strlen() zählt Bytes. Bei "Hallo" entspricht jedes Zeichen genau einem Byte.
// Erwartet: 5
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 24 ===" . PHP_EOL;
$text = "Hallo";
$laenge = strlen($text);
echo $laenge . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 25 | Einen Textteil ersetzen
// 1. Ersetze mit str_replace() das Wort "rot" durch "blau".
// 2. Speichere das Ergebnis wieder in $text.
// 3. Gib den geänderten Satz aus.
// Hinweis: Reihenfolge: str_replace(Suche, Ersatz, ursprünglicher Text).
// Erwartet: Das Auto ist blau.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 25 ===" . PHP_EOL;
$text = "Das Auto ist rot.";
$text = str_replace("rot", "blau", $text);
echo $text . PHP_EOL;


// ====================================================================================
// BLOCK F | Eigene Funktionen
// ====================================================================================
// Eine eigene Funktion bündelt Code unter einem Namen und wird mit () aufgerufen.
// function startet die Definition. Namen ohne $ schreiben.
// Parameter sind benannte Eingaben, z. B. int $zahl. Beim Aufruf wird etwa 4 übergeben.
// : int nach der Parameterliste beschreibt den Rückgabetyp.
// return liefert das Ergebnis an die aufrufende Stelle und beendet diesen Funktionsaufruf.
// echo zeigt etwas an; return ist keine Bildschirmausgabe.
// Lokale Variablen einer Funktion sind nicht automatisch Variablen außerhalb der Funktion.
// Wir übergeben benötigte Werte als Parameter und verwenden keine globalen Variablen.
// Unter strict_types=1 verursacht verdoppeln("4") bei int-Parameter einen TypeError.
// Der gültige Aufruf verdoppeln(4) wird in Aufgabe 27 verwendet.
// Funktionen einmal definieren, danach beliebig oft mit passenden Werten aufrufen.

// ------------------------------------------------------------------------------
// AUFGABE 26 | Die erste eigene Funktion
// 1. Definiere die Funktion begruessung() ohne Parameter mit Rückgabetyp string.
// 2. Gib innerhalb der Funktion mit return den Text "Hallo PHP" zurück.
// 3. Rufe die Funktion außerhalb auf und gib ihr Ergebnis mit echo aus.
// Hinweis: In der Funktion steht return; die Bildschirmausgabe erfolgt beim Aufruf.
// Erwartet: Hallo PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 26 ===" . PHP_EOL;
function begruessung(): string {
    return "Hallo PHP";
}
echo begruessung() . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 27 | Einen Parameter übergeben
// 1. Definiere verdoppeln(int $zahl): int.
// 2. Gib mit return das Doppelte von $zahl zurück.
// 3. Rufe die Funktion mit der Zahl 4 auf und gib das Ergebnis aus.
// Hinweis: 4 ist ein int. "4" ist ein String und passt unter strict_types=1 hier nicht.
// Erwartet: 8
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 27 ===" . PHP_EOL;
function verdoppeln(int $zahl): int {
    return $zahl * 2;
}
echo verdoppeln(4) . PHP_EOL;
// Absichtlich NICHT ausführen: verdoppeln("4");
// Unter strict_types=1 passt string nicht zum Parameter int.


// ------------------------------------------------------------------------------
// AUFGABE 28 | Zwei Parameter verwenden
// 1. Definiere addiere(int $a, int $b): int.
// 2. Gib die Summe der beiden Parameter zurück.
// 3. Rufe die Funktion mit 3 und 4 auf und gib das Ergebnis aus.
// Hinweis: Parameter und übergebene Werte werden jeweils durch Kommas getrennt.
// Erwartet: 7
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 28 ===" . PHP_EOL;
function addiere(int $a, int $b): int {
    return $a + $b;
}
echo addiere(3, 4) . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 29 | Eine String-Operation verpacken
// 1. Definiere bereinigeName(string $name): string.
// 2. Gib den mit trim() bereinigten Namen zurück.
// 3. Rufe die Funktion mit "  Mia  " auf und gib das Ergebnis aus.
// Hinweis: Verwende die bekannte String-Funktion innerhalb deiner eigenen Funktion.
// Erwartet: Mia
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 29 ===" . PHP_EOL;
function bereinigeName(string $name): string {
    return trim($name);
}
echo bereinigeName("  Mia  ") . PHP_EOL;


// ------------------------------------------------------------------------------
// AUFGABE 30 | Eine Prüfung als bool zurückgeben
// 1. Definiere istLeer(string $text): bool.
// 2. Gib zurück, ob trim($text) exakt dem leeren String "" entspricht.
// 3. Teste mit var_dump() zuerst "   " und danach "0".
// Hinweis: Gib das Ergebnis des Vergleichs direkt zurück. Ein zusätzliches if ist nicht
// nötig.
// Erwartet: bool(true), danach bool(false)
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 30 ===" . PHP_EOL;
function istLeer(string $text): bool {
    return trim($text) === "";
}
var_dump(istLeer("   "));
var_dump(istLeer("0"));
