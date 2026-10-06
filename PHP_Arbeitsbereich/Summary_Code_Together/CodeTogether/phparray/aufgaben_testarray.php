<?php
// Aufgabe 1
// Ungültige Werte prüfen und entfernen
// foreach Schleife key Value
// isset() => null werte ausschließen können
// String darf nicht leer sein => $var === "" => $emptyString = "" => $var === $emptyString
// strlen($var) => === 0 => keine Magic Numbers
// is_numeric() => prüfen ob Zahl oder String Zahl ist
// $zahl < 0 => negative Zahlen ausschließen

$mengen = [
    'Tee' => 8, 'Kaffee' => -3, 'Kakao' => '0',
    'Saft' => null, 'Wasser' => '', 'Milch' => 'abc'
];
var_dump(negativeMengenKorrigieren($mengen));

function negativeMengenKorrigieren($mengen = []): array
{
    if (!is_array($mengen) || empty($mengen)) {
        return [];
    }

    foreach ($mengen as $artikel => $menge) {
        // jeden Durchlauf wird geprüft, ob der Wert gültig ist. Wenn nicht, wird er entfernt.
        if (!isset($menge) || (!is_int($menge) && !is_string($menge))) {
            unset($mengen[$artikel]);
            continue;
        }

        $menge = filter_var($menge, FILTER_VALIDATE_INT);
        if ($menge === false) {
            unset($mengen[$artikel]);
            continue;
        }

        if ($menge < 0) {
            $menge = 0;
        }
        $mengen[$artikel] = $menge;
    }
    return $mengen;
}


// Aufgabe 2
// Beide Arrays prüfen => is_array($lager) und is_array($eingabe)
// Ungültiges $lager => leeres Array [] zurückgeben
// Ungültige $eingabe => $lager unverändert zurückgeben

// Pflichtangaben prüfen => isset($eingabe["artikel"], $eingabe["menge"])
// Fehlende Angaben oder null => $lager unverändert zurückgeben

// Artikel prüfen => is_string() => Artikel muss ein String sein
// Leerzeichen am Anfang und Ende entfernen => trim()
// Artikel darf danach nicht leer sein => $emptyString = "" => $artikel === $emptyString

// Menge prüfen => is_numeric() => Zahl oder Zahlenstring erkennen
// Zusätzlich prüfen => Menge muss ganzzahlig sein; is_numeric() allein reicht nicht
// Untergrenze benennen => $mindestMenge = 0
// $menge < $mindestMenge => negative Mengen ausschließen
// 0 und "0" sind gültige Mengen => nicht mit empty() ausschließen
// Ungültiger Artikel oder ungültige Menge => $lager unverändert zurückgeben

// Artikelschlüssel prüfen => array_key_exists($artikel, $lager)
// Damit unterscheiden => Schlüssel fehlt oder Schlüssel existiert mit null als Wert
// Schlüssel fehlt => neuen Artikel mit der Menge anlegen; auch bei "0"

// Schlüssel vorhanden => bisherigen Bestand prüfen
// isset($lager[$artikel]) => null-Bestand ausschließen
// Bestand muss ebenfalls ganzzahlig und mindestens $mindestMenge sein
// Ungültiger Bestand => vorhandenen Eintrag nicht überschreiben
// Gültiger Bestand => gelieferte Menge zum bisherigen Bestand addieren

// Neue oder geänderte Bestände als int speichern
// Alle anderen Artikel unverändert lassen
// $lager zurückgeben


$lager = ['Tee' => 5, 'Kaffee' => 0];
$eingabe = ['artikel' => ' Tee ', 'menge' => '3'];
$original = $lager;
$ergebnis = bestandErgaenzen($lager, $eingabe);
var_dump($ergebnis);

// Deklaration und Signatur einer Funktion
// bezeichner | Parameterliste | Rückgabewert => Signatur

function bestandErgaenzen($lager = [], $eingabe = []): array// sobald das Wort return => ist die funktion zu ende
{
//1. Prüfe beide Arrays. Ein falsches $lager ergibt []. Ist $eingabe kein Array oder fehlen gültige
//Pflichtangaben, bleibt das Lager unverändert.
    // => Frage Array Leer? => So bauen das nur Ja oder Nein gehen
    if(!is_array($lager)){ // ! => true => false => kein Array
        return []; // => wenn array leer => dann echo im Browser an den User Operation mit den Date nkonnte nicht erfolgen
    }




    return $lager;
}

// java => byte zahl = -128 bis 127 => 255 -1 0 1
// byte zahl = 128;
function getSum($zahl1 = number, $zahl2 = number) 
{
    if (!is_numeric($zahl1) || !is_numeric($zahl2)) {
        return false;
    }else{
        echo $zahl1 + $zahl2;
        return true;
    }
}

if(getSum(3, 5) === true) { // 
    echo "Die Summe wurde berechnet.";
} else {
    echo "Fehler: Ungültige Eingabewerte.";
}




// Suche die größte dreier Zahlen
//zahl1 = 12
//zahl2 = 11
//zahl3 = 12
function getMax($zahl1 = number, $zahl2 = number, $zahl3 = number) 
{
    // PHP ist typ unsicher Sprache => zuerst immer den Typen prüfen
    if (!is_numeric($zahl1) || !is_numeric($zahl2) || !is_numeric($zahl3)) {
        return false;
    } else {
       // zahl1 größerGleich zahl2 und zahl1 größerGleich zahl3
       // dann zahl1 ist die größte
       // zahl2 größerGleich zahl3 und zahl2 größerGleich zahl1
       // dann zahl2 die größte ist
       // => dann kann nur noch zahl3 die größte sein

    }
}

getMax(10, 11, 12);