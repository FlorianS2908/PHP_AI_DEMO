<?php
declare(strict_types=1);

// DATEIAUFBAU
// Kein weiteres PHP-Öffnungstag in die Aufgaben kopieren.
// Speichere als UTF-8 ohne BOM. Die erste Anweisung oben bleibt unverändert.
// declare(strict_types=1) schaltet die strikte Prüfung skalarer Typdeklarationen ein.
// Es legt nicht den Datentyp normaler Variablen dauerhaft fest.
//
// VORBEREITETE ANZEIGE - NUR FÜR DIE LOKALE LERNUMGEBUNG
// Die nächsten drei Zeilen gehören nicht zu den Aufgaben.
//error_reporting(E_ALL);
//ini_set("display_errors", "1");
//header("Content-Type: text/plain; charset=UTF-8");

//echo "PHP | PHP-Grundlagen | Ueberarbeitete Uebungsdatei" . PHP_EOL;
//echo "Bearbeite die TODO-Bereiche im Editor und lade diese Seite neu." . PHP_EOL;

// ==============================================================================
// BLOCK A | Variablen und Kommentare
// ==============================================================================
// Variablen speichern Werte; ein Bezeichner ist der Name einer Variable.
// Vor einem normalen Variablenbezeichner steht $. Groß-/Kleinschreibung zählt.
// Wir verwenden Buchstaben, Ziffern und Unterstriche; am Anfang keine Ziffer.
// Leerzeichen und Bindestriche gehören nicht in einen Variablennamen.
// Kommentare werden nicht ausgeführt. Es gibt einzeilige und mehrzeilige Formen.
// echo gibt Inhalte aus. PHP_EOL ergänzt hier einen Zeilenumbruch.

// ------------------------------------------------------------------------------
// AUFGABE 01 | Eine Variable befüllen
// In der vorbereiteten Variable fehlt der Kursname.
// Speichere den Text "PHP" und gib den Inhalt der Variable aus.
// Zielausgabe: PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 01 ===" . PHP_EOL;
// TODO: Wert ergänzen und darunter die Ausgabe hinzufügen.
$kurs = "PHP";
echo $kurs;
var_dump($kurs);
print_r($kurs);
echo '<br>';



// ------------------------------------------------------------------------------
// AUFGABE 02 | Bezeichner korrigieren
// Die Bezeichner im folgenden Code sind fehlerhaft.
// Korrigiere sie an allen Stellen. Die gespeicherten Werte bleiben gleich.
// Zielausgabe: Mia lernt PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 02 ===" . PHP_EOL;
// TODO: Bezeichner korrigieren und anschließend den Code aktivieren.
/*
$1name = "Mia";
$kurs name = "PHP";
echo $1name . " lernt " . $kurs name . PHP_EOL;
*/
// UPPER CASE => Konstanten
// UpperCamelCase   => KomplexeDatenstrukturen => Klassen/Objecte => Upper_Camel_Case
// lowerCamelCase   => für alles andere lower_camel_case => lowercamelcase
echo '<br>';
$name1 = "Mia";
$kursName = "PHP";
echo $name1 . " lernt " . $kursName . '<br>';


// ------------------------------------------------------------------------------
// AUFGABE 03 | Kommentare ergänzen
// Kommentiere den vorhandenen Code mit allen drei Kommentarformen.
// Setze einen Kommentar vor die Zuweisung, einen Blockkommentar dahinter
// und die dritte Kommentarform hinter die Ausgabe. Der Code bleibt erhalten.
// Zielausgabe: Berlin; die Kommentare werden nicht mit ausgegeben.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 03 ===" . PHP_EOL;
echo '<br>';
// TODO: Die drei Kommentare an den beschriebenen Stellen ergänzen.
// Dient den TODO
# beschreibung der nachfolgenden Zeile
/**
 * Dokumentative Kommentare
 */
$stadt = "Berlin";
echo $stadt . PHP_EOL;
echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 04 | Einen Wert überschreiben
// Die Punktzahl soll nach dem Startwert auf 9 geändert werden.
// Lass die erste Zuweisung unverändert und ergänze die Änderung vor der Ausgabe.
// Zielausgabe: 9
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 04 ===" . PHP_EOL;
echo '<br>';
$punkte = 5;
// TODO: Den gespeicherten Wert hier ändern.
#$punkte = 9;
#$punkte += 4; # => $punkte = $punkte + 4;
$punkte = $punkte + 4;
echo $punkte . PHP_EOL;

$i = 1;
#$i++; # $i = $i + 1 =>pos Inkrement pre ++$i
echo '<br>';
echo $i++; # outline
echo '<br>';
echo $i;
echo '<br>';
echo ++$i; # inline

echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 05 | Eine Textverknüpfung reparieren
// Die Ausgabe im vorbereiteten Code funktioniert nicht wie vorgesehen.
// Korrigiere die Verknüpfung. Zwischen den Namen soll genau ein Leerzeichen stehen.
// Zielausgabe: Mia Sommer
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 05 ===" . PHP_EOL;
echo '<br>';
// TODO: Die fehlerhafte Ausgabe korrigieren und den Code aktivieren.
/*
$vorname = "Mia";
$nachname = "Sommer";
echo $vorname + "   " + $nachname . PHP_EOL;
*/
$vorname = "Mia";
$nachname = "Sommer";
echo $vorname . " " . $nachname;
echo '<br>';
// ==============================================================================
// BLOCK B | Datentypen und Rechnen
// ==============================================================================
// int: ganze Zahl. float: Dezimalzahl. string: Text. bool: Wahrheitswert.
// array: mehrere Einträge. null: ausdrücklich kein Wert.
// null, eine leere Zeichenkette und die Zahl 0 sind nicht dasselbe.
// var_dump() macht Werte und Datentypen sichtbar.
// Wähle bei Berechnungen den Operator passend zur fachlichen Bedeutung.
// Eine Typumwandlung ersetzt keine Prüfung beliebiger Benutzereingaben.

// ------------------------------------------------------------------------------
// AUFGABE 06 | Zahlentypen korrigieren
// Die Werte haben noch nicht die vorgesehenen Datentypen.
// Die Anzahl soll eine ganze Zahl, der Preis eine Dezimalzahl sein.
// Korrigiere die Zuweisungen, ohne die Zahlenwerte zu ändern.
// Zielausgabe: int(3) und float(2.5)
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 06 ===" . PHP_EOL;
echo '<br>';
// TODO: Die beiden Zuweisungen korrigieren.
$anzahl = "3";
$preis = "2.5";
var_dump($anzahl, $preis);
$anzahl = 3;
$preis = 2.5;
var_dump($anzahl, $preis);
$preis = (float) "2.4a"; # casting => Typcasting => hartes umwandeln der Information in den jeweiligen Datentypen
var_dump($preis);
$anzahl = intval("3");

$preis = floatval("2.5a"); # Dient für alle Datentypen auch komplexe(Objecte)

var_dump($anzahl, $preis);
echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 07 | Text und Wahrheitswert korrigieren
// Die erste Variable soll einen Text enthalten, die zweite einen Wahrheitswert.
// Korrigiere die Datentypen in den beiden Zuweisungen.
// Zielausgabe: string(1) "7" und bool(true)
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 07 ===" . PHP_EOL;
echo '<br>';
// TODO: Die Datentypen der gespeicherten Werte korrigieren.
$zahlAlsText = 7;
$aktiv = "true";
var_dump((string) $zahlAlsText, (bool)$aktiv);
var_dump($zahlAlsText, $aktiv);

$zahlAlsText = 7;
$zahlAlsText = $zahlAlsText . "";
var_dump($zahlAlsText);

$zahlAlsText = strval($zahlAlsText);
$aktiv = boolval($aktiv);
var_dump($zahlAlsText, $aktiv);
echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 08 | null und Arrayzugriff korrigieren
// Der Hinweis soll null enthalten, nicht eine leere Zeichenkette.
// Außerdem soll die erste Farbe ausgegeben werden. Korrigiere beide Stellen;
// die Reihenfolge der Farben im Array bleibt unverändert.
// Zielausgabe: NULL und string(3) "rot"
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 08 ===" . PHP_EOL;
// TODO: Den Hinweis und den Arrayzugriff korrigieren.
echo '<br>';
$hinweis = null;
$farben = ["rot", "blau"];
var_dump($hinweis, $farben[0]);
echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 09 | Eine Berechnung korrigieren
// Die Berechnung des Gesamtpreises ist fachlich falsch.
// Berechne den Preis für die angegebene Anzahl. Die Startwerte bleiben gleich.
// Zielausgabe: 12
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 09 ===" . PHP_EOL;
echo '<br>';
$preis = 4;
$anzahl = 3;
// TODO: Die Berechnung korrigieren.
$gesamt = $preis * $anzahl;
echo $gesamt . PHP_EOL;
echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 10 | Einen Zahlenstring umwandeln
// Die Eingabe ist hier ein bereits als gültig bekannter Zahlenstring.
// Die Variable $zahl soll daraus eine ganze Zahl erhalten.
// Korrigiere die zweite Zuweisung. Die Eingabe selbst bleibt ein String.
// Zielausgabe: int(12)
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 10 ===" . PHP_EOL;
echo '<br>';
$eingabe = "12";
// TODO: Die Zuweisung um eine passende Typumwandlung ergänzen.
$zahl = (int)$eingabe; # intval($eingabe)
var_dump($zahl);
echo '<br>';

// ==============================================================================
// BLOCK C | Entscheidungen
// ==============================================================================
// if führt Code abhängig von einer Bedingung aus.
// else und elseif ermöglichen weitere Fälle.
// Eine Zuweisung ist kein Vergleich. Beachte auch Grenzwerte.
// Mehrere Bedingungen lassen sich logisch miteinander verbinden.
// switch unterscheidet Fälle anhand eines Wertes.

// ------------------------------------------------------------------------------
// AUFGABE 11 | Eine Bedingung korrigieren
// Nur eine negative Zahl soll auf 0 gesetzt werden.
// Der vorbereitete Code prüft den falschen Fall. Korrigiere die Bedingung.
// Zielausgabe: 0
// Zusatztest: Mit den Startwerten 0 und 4 müssen diese Werte unverändert bleiben.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 11 ===" . PHP_EOL;
echo '<br>';
$zahl = -4;
// TODO: Die Bedingung korrigieren.
# Grenzwerte => Volljährig => AqiKlasse => 18 => volljährig === 18
# Grenzwert 17 und 19 => volljährig <= 17 || >= 19

if ($zahl < 0) {
    $zahl = 0;
}
echo $zahl . PHP_EOL;
echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 12 | Zwischen zwei Ausgaben wählen
// Ab fünf Punkten soll "Ziel erreicht" ausgegeben werden,
// bei weniger Punkten "Weiter ueben". Ergänze eine if-else-Verzweigung.
// Zielausgabe: Ziel erreicht
// Zusatztest: Teste auch genau 5 Punkte sowie 4 Punkte.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 12 ===" . PHP_EOL;
echo '<br>';
$punkte = 7;
// TODO: Die Verzweigung mit den beiden Ausgaben ergänzen.
if($punkte >= 5){# $punkte > 4
    echo "Ziel erreicht";
}else{
    echo "Weiter üben";
}
echo '<br>';
// ------------------------------------------------------------------------------
// AUFGABE 13 | Drei Fälle unterscheiden
// Gib passend zur Zahl "negativ", "null" oder "positiv" aus.
// Verwende eine Verzweigung mit if, elseif und else.
// Das Wort "null" in der Ausgabe bezeichnet hier die Zahl 0.
// Zielausgabe: null
// Zusatztest: Teste zusätzlich eine negative und eine positive ganze Zahl.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 13 ===" . PHP_EOL;
echo '<br>';
$zahl = 0;
// TODO: Die drei Fälle unterscheiden und jeweils den passenden Text ausgeben.
if($zahl < 0) # <= -1
    echo "negativ";
elseif($zahl == 0) # === Value + Typ & == Value + Typ egal
    echo "Null";
else
    echo "positiv";
echo '<br>';
// ------------------------------------------------------------------------------
// AUFGABE 14 | Zwei Voraussetzungen prüfen
// "Bestanden" darf nur erscheinen, wenn mindestens fünf Punkte vorliegen
// und die Aufgabe abgegeben wurde. Sonst soll keine Meldung erscheinen.
// Korrigiere die logische Verknüpfung im vorhandenen Code.
// Zielausgabe: Bestanden
// Zusatztest: Bei 4 Punkten und true sowie bei 8 Punkten und false darf nichts erscheinen.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 14 ===" . PHP_EOL;
echo '<br>';
$punkte = 8;
$abgegeben = true;
// TODO: Die Verknüpfung der beiden Prüfungen korrigieren.
if ($punkte >= 5 && $abgegeben === true) { # && verlangt immer beide seiten True oder false
    echo "Bestanden" . PHP_EOL;
}
echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 15 | Den Ablauf eines switch korrigieren
// Bei der Aktion "start" soll ausschließlich "Los" erscheinen.
// Bei allen anderen Aktionen soll ausschließlich "Unbekannt" erscheinen.
// Im vorbereiteten Code läuft nach dem passenden Fall noch weiterer Code.
// Zielausgabe: Los
// Zusatztest: Mit der Aktion "pause" soll nur "Unbekannt" erscheinen.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 15 ===" . PHP_EOL;
echo '<br>';
$aktion = "start";
// TODO: Den Ablauf so korrigieren, dass genau eine Meldung erscheint.
switch ($aktion) {# der funktioniert nur bei gleichheit
    case "start":
        echo "Los" . PHP_EOL;
        break;
    default:
        echo "Unbekannt" . PHP_EOL;
        break;
}
echo '<br>';
$zahl = 0;
switch($zahl){# gleichheit => Value
    case 0:
        echo "Test 0";
        echo '<br>';
        break;
    case "0":
        echo "Test 0 as int";
        echo '<br>';
        break;
    default:
        echo "wenn kein andere Case trifft beendet das Switch nicht einfach ohne wert";
        break;
}
echo '<br>';

// ==============================================================================
// BLOCK D | Schleifen und kleine Arrays
// ==============================================================================
// for, while und do-while wiederholen Anweisungen.
// Prüfe bei jeder Zählschleife Startwert, Bedingung und Veränderung.
// Eine Schleife muss auch wieder enden können.
// foreach verarbeitet Arrayeinträge; dabei sind Werte und Schlüssel zugänglich.
// Achte darauf, in welcher Variable eine Änderung tatsächlich gespeichert wird.

// ------------------------------------------------------------------------------
// AUFGABE 16 | Eine Zählschleife korrigieren
// Die Schleife soll alle ganzen Zahlen von 1 bis einschließlich 3 ausgeben.
// Der vorbereitete Code endet zu früh. Korrigiere die Schleife.
// Zielausgabe: 1, 2, 3 - jeweils in einer eigenen Zeile
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 16 ===" . PHP_EOL;
echo '<br>';
// TODO: Die Schleife korrigieren.
for ($i = 1; $i <= 3; $i++) { # $i < 4
    echo $i . PHP_EOL;
}
echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 17 | Mit while herunterzählen
// Ergänze eine while-Schleife, die von $rest bis einschließlich 1 herunterzählt.
// Gib jede Zahl in einer eigenen Zeile aus. Die 0 wird nicht mehr ausgegeben.
// Zielausgabe: 3, 2, 1 - jeweils in einer eigenen Zeile
// Zusatztest: Mit dem Startwert 0 soll keine Zahl ausgegeben werden.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 17 ===" . PHP_EOL;
echo '<br>';
$rest = 3;
// TODO: Die while-Schleife ergänzen.
while($rest > 0){# $rest >= 1
    echo $rest;# kürzer => echo $rest--; => pos Dekrement
    $rest--;
    echo '<br>';
}


// ------------------------------------------------------------------------------
// AUFGABE 18 | Eine do-while-Schleife bauen
// Gib in jedem Durchlauf zuerst $zahl aus und erhöhe sie anschließend um eins.
// Wiederhole den Durchlauf, solange die Zahl noch kleiner als 3 ist.
// Verwende do-while und erkläre, warum beim Startwert 5 eine Ausgabe entsteht.
// Zielausgabe: 5 - genau einmal; nach der Schleife hat $zahl den Wert 6.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 18 ===" . PHP_EOL;
 echo '<br>';
$zahl = 5;
// TODO: Die do-while-Schleife ergänzen.
do{
    echo $zahl;# echo $zahl++;
    $zahl++;
     echo '<br>';
}while($zahl < 3);# $zahl >= 3
echo $zahl;
 echo '<br>';
// ------------------------------------------------------------------------------
// AUFGABE 19 | Arraywerte ausgeben
// Gib alle Farben in ihrer vorhandenen Reihenfolge aus, jede in einer eigenen Zeile.
// Verwende eine foreach-Schleife statt einzelner Ausgaben pro Arrayposition.
// Zielausgabe: rot, gruen, blau - jeweils in einer eigenen Zeile
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 19 ===" . PHP_EOL;
echo '<br>';
$farben = ["rot", "gruen", "blau"];# Bezeichner ist immer plural
// TODO: Die foreach-Schleife mit der Ausgabe ergänzen.
foreach($farben as $farbe){
    echo $farbe . "<br>";# in jedem Schleifen durchlauf ändern sich die Laufvariable
}

foreach($farben as $key => $value){
    echo $farbe . " " . $value .  "<br>";# in jedem Schleifen durchlauf ändern sich die Laufvariable
}
var_dump($farben);

// ------------------------------------------------------------------------------
// AUFGABE 20 | Eine Arrayänderung reparieren
// Erhöhe den gespeicherten Bestand jedes Artikels um eins. => Inkrement
// Der aktuelle Code verändert das ursprüngliche Lager nicht.
// Korrigiere die Änderung innerhalb der Schleife.
// Zielausgabe: 3 / 1
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 20 ===" . PHP_EOL;
echo '<br>';
$lager = ["Stift" => 2, "Heft" => 0];
// TODO: Die Änderung in der Schleife korrigieren.
foreach ($lager as $artikel => $bestand) {
    #1. Durchlauf die Variablen $artikel(Stift) $bestand(2)
    $bestand = $bestand + 1;# $bestand++ => $bestand+=1
    $lager[$artikel] = $bestand;
}
echo $lager["Stift"] . " / " . $lager["Heft"] . PHP_EOL;
echo '<br>';

// ==============================================================================
// BLOCK E | Strings verändern
// ==============================================================================
// String-Funktionen können Texte bereinigen, umwandeln oder Teile ersetzen.
// Ein Funktionsaufruf und das Speichern seines Ergebnisses sind zwei Dinge.
// Die Beispiele verwenden ASCII-Texte ohne Umlaute und Emojis.
// Bei diesen Texten stimmen Byteanzahl und Zeichenanzahl überein.

// ------------------------------------------------------------------------------
// AUFGABE 21 | Eine Textbereinigung reparieren
// Vor und nach dem ausgegebenen Namen sollen keine Leerzeichen stehen.
// Die vorbereitete Bereinigung hat bei der Ausgabe noch keine Wirkung.
// Korrigiere den Code. Leerzeichen innerhalb eines Namens sollen erhalten bleiben.
// Zielausgabe: Mia - ohne äußere Leerzeichen
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 21 ===" . PHP_EOL;
echo '<br>';
$name = "  Mia  ";
// TODO: Die Bereinigung korrigieren.
$name = trim($name);

var_dump($name);
echo $name . PHP_EOL;
echo '<br>';


// ------------------------------------------------------------------------------
// AUFGABE 22 | Kleinbuchstaben erzeugen
// Wandle den gespeicherten Text mit einer String-Funktion vollständig
// in Kleinbuchstaben um. Schreibe den Satz nicht als neuen festen Text.
// Zielausgabe: php macht spass
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 22 ===" . PHP_EOL;
$text = "PHP MACHT SPASS";
echo '<br>';
// TODO: Die Umwandlung vor der Ausgabe ergänzen.
$text = strtolower($text);
var_dump($text);
$path = '"C:\xampp\htdocs\PHP\PHP\Summary_Code_Together\CodeTogether\grundlagen"';
$textArr = explode("\\", $path);
var_dump($textArr);


$arr = str_split($text,3);
var_dump($arr);

var_dump($textArr);

echo $text . PHP_EOL;
echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 23 | Eine Textumwandlung korrigieren
// Die Ausgabe soll vollständig in Großbuchstaben erscheinen.
// Im vorbereiteten Code wird die falsche String-Operation verwendet.
// Korrigiere den Funktionsaufruf. Der Starttext bleibt unverändert.
// Zielausgabe: HALLO PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 23 ===" . PHP_EOL;
echo '<br>';
$text = "hallo php";
// TODO: Die verwendete String-Operation korrigieren.
$text = strtolower($text);
$formular = "BerLin";

echo $text . PHP_EOL;
echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 24 | Die Textlänge bestimmen
// Die Variable $laenge enthält bisher nur einen vorläufigen Wert.
// Ersetze ihn durch eine Berechnung der Textlänge. Der Text selbst bleibt erhalten.
// Zielausgabe: 5
// Zusatztest: Mit dem Text "PHP" soll sich die Ausgabe automatisch auf 3 ändern.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 24 ===" . PHP_EOL;
$text = "Hallo";
echo '<br>';
$php = "PHP";
// TODO: Den vorläufigen Wert durch eine Berechnung ersetzen.
$laenge = strLen($text);

echo $laenge . PHP_EOL;
$laenge = strLen($php);
var_dump($laenge);
echo '<br>';
// ------------------------------------------------------------------------------
// AUFGABE 25 | Einen Textteil ersetzen
// Ersetze im gespeicherten Text "rot" durch "blau".
// Nutze eine String-Funktion. Schreibe nicht den gesamten Satz neu.
// Zielausgabe: Das Auto ist blau.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 25 ===" . PHP_EOL;
$text = "Das Auto ist rot.";
// TODO: Den Text vor der Ausgabe bearbeiten.
$text = substr_replace($text, "blau", strlen($text)-4,strlen($text)-1);


#$text = str_replace("rot","blau",$text);
var_dump($text);
echo $text . PHP_EOL;
echo '<br>';

// ==============================================================================
// BLOCK F | Eigene Funktionen
// ==============================================================================
// Eine Funktion hat einen Namen und kann Parameter sowie einen Rückgabetyp haben.
// Die Definition allein führt den Funktionskörper noch nicht aus.
// Rückgabe und Bildschirmausgabe sind unterschiedliche Schritte.
// Achte unter strict_types=1 auf passende Typen beim Aufruf.
// Prüfe Funktionen mit mehreren Eingaben, nicht nur mit dem ersten Beispiel.

// ------------------------------------------------------------------------------
// AUFGABE 26 | Die erste Funktion ergänzen
// Die vorbereitete Funktion soll den Text "Hallo PHP" zurückliefern.
// Ergänze den Funktionsinhalt. Rufe die Funktion anschließend außerhalb auf
// und gib dort ihren Rückgabewert aus.
// Zielausgabe: Hallo PHP
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 26 ===" . PHP_EOL;
echo '<br>';
function begruessung(): string|any
{
    // TODO: Den Funktionsinhalt ergänzen.
    $text = "Hallo PHP";
    return $text;
}
// TODO: Die fertige Funktion aufrufen und ihr Ergebnis ausgeben.
var_dump(begruessung());
echo begruessung();
echo '<br>';
// ------------------------------------------------------------------------------
// AUFGABE 27 | Eine Funktionsberechnung korrigieren
// Die Funktion soll das Doppelte der übergebenen ganzen Zahl zurückliefern.
// Der Rückgabewert ist fachlich falsch. Korrigiere den Funktionsinhalt;
// Parameter und Typdeklarationen bleiben unverändert.
// Zielausgabe: 8
// Zusatztest: Die Aufrufe mit 0 und -3 müssen 0 beziehungsweise -6 liefern.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 27 ===" . PHP_EOL;
echo '<br>';
function verdoppeln(int $zahl): int
{
    // TODO: Den Rückgabewert korrigieren.
    return $zahl * 2;
}
echo verdoppeln(4) . PHP_EOL;

echo '<br>';
// ------------------------------------------------------------------------------
// AUFGABE 28 | Eine Funktion mit zwei Parametern bauen
// Erstelle eine Funktion namens addiere mit zwei ganzzahligen Parametern.
// Sie soll deren Summe als ganze Zahl zurückliefern. Verwende Typdeklarationen.
// Rufe sie mit den vorbereiteten Werten auf und gib das Ergebnis aus.
// Zielausgabe: 7
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 28 ===" . PHP_EOL;
echo '<br>';
$ersteZahl = 3;
$zweiteZahl = 4;
// TODO: Die Funktion definieren, mit den Startwerten aufrufen und das Ergebnis ausgeben.
function addiere(int $zahl1, int $zahl2):int{
    return $zahl1+ $zahl2;
}
var_dump(addiere($ersteZahl, $zweiteZahl));
echo '<br>';
// ------------------------------------------------------------------------------
// AUFGABE 29 | Eine Bereinigungsfunktion vervollständigen
// Die Funktion soll den übergebenen Namen ohne äußere Leerzeichen zurückliefern.
// Bisher liefert sie den Namen unverändert. Ergänze die Verarbeitung;
// Leerzeichen innerhalb des Namens sollen erhalten bleiben.
// Zielausgabe: Mia - ohne äußere Leerzeichen
// Zusatztest: Aus "  Mia Sommer  " soll "Mia Sommer" werden.
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 29 ===" . PHP_EOL;
echo '<br>';
function bereinigeName(string $name): string
{
    // TODO: Die Verarbeitung im Funktionskörper ergänzen.´
    if(empty($name)){
        echo "User Information";
    }
    return trim($name);
}
var_dump(bereinigeName(""));
echo '<br>';

// ------------------------------------------------------------------------------
// AUFGABE 30 | Eine Leerprüfung korrigieren
// Die Funktion soll true liefern, wenn der Text nach dem Entfernen äußerer
// Leerzeichen leer ist. Andernfalls soll sie false liefern.
// Auch "0" ist Inhalt. Die aktuelle Prüfung behandelt die Beispiele falsch.
// Zielausgabe: bool(true), danach bool(false)
// Zusatztest: Teste außerdem eine leere Zeichenkette und den Text "Mia".
// ------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 30 ===" . PHP_EOL;
function istLeer(string $text): bool
{
    // TODO: Die Prüfung im Funktionskörper korrigieren.
    #trim
    # prüfung ob leer
    return strlen(trim($text)) == 0 ;#trim($text) === ""
}
var_dump(istLeer("   "));
var_dump(istLeer("0"));