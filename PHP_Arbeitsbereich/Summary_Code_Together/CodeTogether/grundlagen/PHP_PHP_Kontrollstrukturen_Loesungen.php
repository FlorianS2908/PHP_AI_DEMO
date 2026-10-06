<?php
declare(strict_types=1);

// PHP | PHP-Kontrollstrukturen | 25 Aufgaben in fünf Stufen
// Musterlösungen
// Stand: 29.09.2026
//
// START MIT XAMPP
// 1. Diese Datei unter C:\xampp\htdocs\PHP\ speichern.
// 2. Im XAMPP Control Panel Apache starten.
// 3. Im Browser öffnen:
//    http://localhost/PHP/PHP_PHP_Kontrollstrukturen_25_Loesungen.php
// Alternativ im Terminal: php PHP_PHP_Kontrollstrukturen_25_Loesungen.php
// Es werden keine weiteren Dateien, Bibliotheken oder Datenbanken benötigt.
// UTF-8 ohne BOM verwenden; kein weiteres PHP-Öffnungstag in die Abschnitte kopieren.
//
// VERWENDUNG
// Diese Datei enthält ausschließlich die Musterlösungen zur separaten Aufgabendatei.
// Die Nummerierung und Ausgangsdaten stimmen mit der Aufgabendatei überein.
// Alle Lösungen laufen beim Öffnen nacheinander. Jede Aufgabe ist eigenständig.
// Zu jeder Lösung gibt es eine kurze Erklärung und Zusatztests als Kommentare.
// Für einen Zusatztest nur die betreffenden Startwerte der Aufgabe ändern.
// Es gibt mehrere mögliche Lösungen; gezeigt wird jeweils eine einfache Variante.
// Die Erläuterungen und Quellen am Dateiende sind für die gemeinsame Auswertung.
//
// ORIENTIERUNG
// Pro Stufe: eine Verzweigung, eine switch-Aufgabe und drei Schleifenaufgaben.
// for und foreach werden in jeder Stufe geübt; while und do-while wechseln sich ab.
// Später kommen verschachtelte Strukturen sowie break und continue hinzu.
//
// STUFE 1 | LEICHT
// 01 | if / else | Den Grenzwert berücksichtigen
// 02 | switch / case / default | Genau einen Fall ausführen
// 03 | for | Bis zur letzten Zahl zählen
// 04 | while | Ohne zusätzliche Null herunterzählen
// 05 | foreach | Die Werte statt der Positionen ausgeben
// STUFE 2 | LEICHT-MITTEL
// 06 | if / elseif / else | Drei Punktbereiche richtig einordnen
// 07 | switch / case / default | Zwei Fälle gemeinsam behandeln
// 08 | for | Eine Summe in der Schleife aufbauen
// 09 | do-while | Zuerst ausführen, dann prüfen
// 10 | foreach mit Schlüssel und Wert | Die Änderungen im Lager speichern
// STUFE 3 | MITTEL
// 11 | if / else mit mehreren Bedingungen | Eine Sperre muss immer gelten
// 12 | switch mit einer Verzweigung | Eine Warenkorbmenge verändern
// 13 | for mit Schleifensteuerung | Einzelne Zahlen überspringen
// 14 | while | Aufträge und Bearbeitungsgrenze beachten
// 15 | foreach mit Verzweigung | Leere Texte ausfiltern, Inhalt behalten
// STUFE 4 | MITTELSCHWER
// 16 | if / elseif / else | Eine Menge stufenweise prüfen
// 17 | switch mit if / else | Versandfälle und Freigrenze kombinieren
// 18 | verschachtelte for-Schleifen | Ein Dreieck statt eines Quadrats erzeugen
// 19 | do-while mit mehreren Bedingungen | Versuche bis zum Erfolg begrenzen
// 20 | foreach mit Verzweigung und Abbruch | Den ersten lieferbaren Artikel finden
// STUFE 5 | SCHWER
// 21 | mehrstufige und verschachtelte Verzweigungen | Fehlend, null und leer unterscheiden
// 22 | switch innerhalb von foreach | Eine ganze Aktionsfolge verarbeiten
// 23 | for mit Verzweigung und Abbruch | Eine Primzahlprüfung reparieren
// 24 | while mit Schleifensteuerung | Überspringen und Stoppen sicher kombinieren
// 25 | foreach mit Verzweigungen und Überspringen | Produktdatensätze prüfen und erweitern
//
// VORBEREITETE ANZEIGE - NUR FÜR DIE LOKALE LERNUMGEBUNG
// Diese drei Zeilen bleiben unverändert.
error_reporting(E_ALL);
ini_set("display_errors", "1");
header("Content-Type: text/plain; charset=UTF-8");

echo "PHP | PHP-Kontrollstrukturen | Musterloesungen" . PHP_EOL;


// ==============================================================================================
// STUFE 1 | LEICHT | AUFGABEN 01-05
// Einzelne Fehler erkennen; einfache Fälle und Schleifengrenzen.
// ==============================================================================================
echo PHP_EOL . "STUFE 1 | LEICHT" . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 01 | Den Grenzwert berücksichtigen
// Schwerpunkt: if / else
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Der Mindestwert gehört bereits zum erlaubten Bereich.
//
// Zielausgabe: Ziel erreicht
// Zusatztests:
// $punkte = 4: Weiter ueben; $punkte = 6: Ziel erreicht.
// $mindestPunkte = 8 und $punkte = 8: Ziel erreicht.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 01 ===" . PHP_EOL;
// Startwerte:
$punkte = 5;
$mindestPunkte = 5;

if ($punkte >= $mindestPunkte) {
    echo "Ziel erreicht" . PHP_EOL;
} else {
    echo "Weiter ueben" . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 02 | Genau einen Fall ausführen
// Schwerpunkt: switch / case / default
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// break beendet den jeweiligen switch-Fall. Ohne break läuft der Code
// in den folgenden Fall weiter. Am Ende des letzten Zweigs ist es hier unnötig.
//
// Zielausgabe: Los
// Zusatztests:
// $aktion = "stop": Ende; $aktion = "pause": Unbekannt.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 02 ===" . PHP_EOL;
// Startwerte:
$aktion = "start";

switch ($aktion) {
    case "start":
        echo "Los" . PHP_EOL;
        break;
    case "stop":
        echo "Ende" . PHP_EOL;
        break;
    default:
        echo "Unbekannt" . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 03 | Bis zur letzten Zahl zählen
// Schwerpunkt: for
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Die letzte Zahl soll noch ausgegeben werden. Deshalb wird die Grenze eingeschlossen.
//
// Zielausgabe: 1, 2, 3, 4, 5 - jeweils in einer eigenen Zeile
// Zusatztests:
// $ende = 1: nur 1; $ende = 3: 1, 2, 3; $ende = 0: keine Zahl.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 03 ===" . PHP_EOL;
// Startwerte:
$ende = 5;

for ($zahl = 1; $zahl <= $ende; $zahl++) {
    echo $zahl . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 04 | Ohne zusätzliche Null herunterzählen
// Schwerpunkt: while
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// while prüft vor jedem Durchlauf. Bei 0 startet hier kein weiterer Durchlauf.
//
// Zielausgabe: 3, 2, 1 - jeweils in einer eigenen Zeile
// Zusatztests:
// $rest = 0: keine Zahl; $rest = 1: nur 1.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 04 ===" . PHP_EOL;
// Startwerte:
$rest = 3;

while ($rest > 0) {
    echo $rest . PHP_EOL;
    $rest--;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 05 | Die Werte statt der Positionen ausgeben
// Schwerpunkt: foreach
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Die Schleife liefert den Schlüssel in $index und den eigentlichen Wert in $farbe.
//
// Zielausgabe: rot, gruen, blau - jeweils in einer eigenen Zeile
// Zusatztests:
// $farben = ["gelb"]: gelb; $farben = []: keine Ausgabe.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 05 ===" . PHP_EOL;
// Startwerte:
$farben = ["rot", "gruen", "blau"];

foreach ($farben as $index => $farbe) {
    echo $farbe . PHP_EOL;
}


// ==============================================================================================
// STUFE 2 | LEICHT-MITTEL | AUFGABEN 06-10
// Mehrere Fälle, Summen und einfache Änderungen an Arraywerten.
// ==============================================================================================
echo PHP_EOL . "STUFE 2 | LEICHT-MITTEL" . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 06 | Drei Punktbereiche richtig einordnen
// Schwerpunkt: if / elseif / else
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Sobald ein Zweig passt, werden die weiteren elseif-Zweige nicht mehr geprüft.
// Deshalb muss der höhere Punktebereich zuerst geprüft werden.
//
// Zielausgabe: Gut
// Zusatztests:
// 80 Punkte: Gut; 79 Punkte: Bestanden; 50 Punkte: Bestanden; 49 Punkte: Weiter ueben.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 06 ===" . PHP_EOL;
// Startwerte:
$punkte = 85;
$gutAb = 80;
$bestandenAb = 50;

if ($punkte >= $gutAb) {
    echo "Gut" . PHP_EOL;
} elseif ($punkte >= $bestandenAb) {
    echo "Bestanden" . PHP_EOL;
} else {
    echo "Weiter ueben" . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 07 | Zwei Fälle gemeinsam behandeln
// Schwerpunkt: switch / case / default
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Der erste Fall hat absichtlich keinen eigenen Anweisungsblock.
// Beide case-Werte führen dadurch zur gleichen Ausgabe.
//
// Zielausgabe: Wochenende
// Zusatztests:
// $tag = "sonntag": Wochenende; $tag = "montag": Werktag.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 07 ===" . PHP_EOL;
// Startwerte:
$tag = "samstag";

switch ($tag) {
    case "samstag":
    case "sonntag":
        echo "Wochenende" . PHP_EOL;
        break;
    default:
        echo "Werktag" . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 08 | Eine Summe in der Schleife aufbauen
// Schwerpunkt: for
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Die bisherige Summe wird um den aktuellen Wert erweitert.
// Nur $zahl zuzuweisen würde das bisherige Ergebnis immer wieder ersetzen.
//
// Zielausgabe: 10
// Zusatztests:
// $grenze = 1: 1; $grenze = 3: 6; $grenze = 0: 0.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 08 ===" . PHP_EOL;
// Startwerte:
$grenze = 4;
$summe = 0;

for ($zahl = 1; $zahl <= $grenze; $zahl++) {
    $summe = $summe + $zahl;
}
echo $summe . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 09 | Zuerst ausführen, dann prüfen
// Schwerpunkt: do-while
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Bei do-while steht die Prüfung nach dem Schleifenkörper.
// Die Bedingung entscheidet erst über einen weiteren Durchlauf.
//
// Zielausgabe: 1, 2 - jeweils in einer eigenen Zeile
// Zusatztests:
// $zahl = 5: nur 5; $zahl = 3: nur 3. Dabei bleibt $grenze = 3.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 09 ===" . PHP_EOL;
// Startwerte:
$zahl = 1;
$grenze = 3;

do {
    echo $zahl . PHP_EOL;
    $zahl++;
} while ($zahl < $grenze);


// ----------------------------------------------------------------------------------------------
// AUFGABE 10 | Die Änderungen im Lager speichern
// Schwerpunkt: foreach mit Schlüssel und Wert
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// $bestand enthält hier nur den gelesenen Wert, keine Referenz auf das Arrayelement.
// Deshalb wird das Ergebnis über den Artikelschlüssel im Array gespeichert.
//
// Zielausgabe: Im Lager: Stift = 5 und Heft = 3.
// Zusatztests:
// $zugang = 0: Stift = 2 und Heft = 0.
// $lager = []: bleibt leer; ["Buch" => 1] bei Zugang 3: Buch = 4.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 10 ===" . PHP_EOL;
// Startwerte:
$lager = ["Stift" => 2, "Heft" => 0];
$zugang = 3;

foreach ($lager as $artikel => $bestand) {
    $lager[$artikel] = $bestand + $zugang;
}
print_r($lager);


// ==============================================================================================
// STUFE 3 | MITTEL | AUFGABEN 11-15
// Bedingungen verbinden, Abläufe steuern und Daten filtern.
// ==============================================================================================
echo PHP_EOL . "STUFE 3 | MITTEL" . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 11 | Eine Sperre muss immer gelten
// Schwerpunkt: if / else mit mehreren Bedingungen
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Die Klammer fasst die beiden Zugangsmöglichkeiten zusammen.
// Die gemeinsame Zusatzbedingung !$gesperrt muss in beiden Fällen wahr sein.
//
// Zielausgabe: Gesperrt
// Zusatztests:
// admin, false, false: Zugriff; gast, true, false: Zugriff.
// gast, false, false: Gesperrt; gast, true, true: Gesperrt.
// Die Werte stehen jeweils für Rolle, Freigabe und Sperre.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 11 ===" . PHP_EOL;
// Startwerte:
$rolle = "admin";
$freigegeben = false;
$gesperrt = true;

if (($rolle === "admin" || $freigegeben === true) && !$gesperrt) {
    echo "Zugriff" . PHP_EOL;
} else {
    echo "Gesperrt" . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 12 | Eine Warenkorbmenge verändern
// Schwerpunkt: switch mit einer Verzweigung
// Arbeitsweise: Ergänzen
//
// MUSTERLÖSUNG
// Die zusätzliche if-Prüfung verhindert eine negative Menge beim Verringern.
//
// Zielausgabe: 1
// Zusatztests:
// Menge 0 und "weniger": 0; Menge 2 und "mehr": 3.
// Menge 2 und "leeren": 0; Menge 2 und "pause": 2.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 12 ===" . PHP_EOL;
// Startwerte:
$menge = 2;
$aktion = "weniger";

switch ($aktion) {
    case "mehr":
        $menge++;
        break;
    case "weniger":
        if ($menge > 0) {
            $menge--;
        }
        break;
    case "leeren":
        $menge = 0;
        break;
    default:
        // Die Menge bleibt unverändert.
}
echo $menge . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 13 | Einzelne Zahlen überspringen
// Schwerpunkt: for mit Schleifensteuerung
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// continue überspringt die restlichen Anweisungen dieses Durchlaufs.
// Bei for wird danach die Zähleränderung ausgeführt. break würde die Schleife beenden.
//
// Zielausgabe: 2, 4, 6, 8 - jeweils in einer eigenen Zeile
// Zusatztests:
// $ende = 1: keine Zahl; $ende = 2: nur 2; $ende = 5: 2 und 4.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 13 ===" . PHP_EOL;
// Startwerte:
$ende = 8;

for ($zahl = 1; $zahl <= $ende; $zahl++) {
    if ($zahl % 2 !== 0) {
        continue;
    }
    echo $zahl . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 14 | Aufträge und Bearbeitungsgrenze beachten
// Schwerpunkt: while
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Nur wenn beide Grenzen noch nicht erreicht sind, darf ein weiterer Auftrag gelesen werden.
//
// Zielausgabe: A, B - jeweils in einer eigenen Zeile
// Zusatztests:
// $limit = 0: keine Ausgabe; $limit = 4: A, B, C, D.
// $auftraege = [] und Limit 3: keine Ausgabe; ["A"] und Limit 3: nur A.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 14 ===" . PHP_EOL;
// Startwerte:
$auftraege = ["A", "B", "C", "D"];
$limit = 2;
$index = 0;
$anzahlAuftraege = count($auftraege);

while ($index < $anzahlAuftraege && $index < $limit) {
    echo $auftraege[$index] . PHP_EOL;
    $index++;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 15 | Leere Texte ausfiltern, Inhalt behalten
// Schwerpunkt: foreach mit Verzweigung
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// empty() bewertet auch den String "0" als leer. Hier ist ausschließlich
// der nach trim() leere String auszuschließen, deshalb der strikte Vergleich.
//
// Zielausgabe: Im Ergebnisarray: Mia, 0, Tom - in dieser Reihenfolge, jeweils als String.
// Zusatztests:
// ["", "   ", " 0 "]: nur "0"; []: leeres Ergebnis.
// ["  Mia Sommer  "]: "Mia Sommer"; innere Leerzeichen bleiben erhalten.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 15 ===" . PHP_EOL;
// Startwerte:
$namen = ["  Mia  ", "   ", "0", " Tom "];
$bereinigt = [];

foreach ($namen as $name) {
    $name = trim($name);
    if ($name === "") {
        continue;
    }
    $bereinigt[] = $name;
}
print_r($bereinigt);


// ==============================================================================================
// STUFE 4 | MITTELSCHWER | AUFGABEN 16-20
// Grenzfälle, verschachtelte Abläufe und erste Datensätze.
// ==============================================================================================
echo PHP_EOL . "STUFE 4 | MITTELSCHWER" . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 16 | Eine Menge stufenweise prüfen
// Schwerpunkt: if / elseif / else
// Arbeitsweise: Korrigieren und ergänzen
//
// MUSTERLÖSUNG
// isset() lässt den gültigen Wert 0 zu, schließt aber fehlende Felder und null aus.
// Der Typ wird vor dem Zahlenvergleich geprüft. Ein String "0" ist kein int.
//
// Zielausgabe: Gueltig
// Zusatztests:
// [] und ["menge" => null]: Fehlt; ["menge" => "0"]: Falscher Typ.
// ["menge" => -1]: Negativ; ["menge" => 2]: Gueltig.
// ["menge" => false] und ["menge" => 2.5]: Falscher Typ.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 16 ===" . PHP_EOL;
// Startwerte:
$eingabe = ["menge" => 0];

if (!isset($eingabe["menge"])) {
    echo "Fehlt" . PHP_EOL;
} elseif (!is_int($eingabe["menge"])) {
    echo "Falscher Typ" . PHP_EOL;
} elseif ($eingabe["menge"] < 0) {
    echo "Negativ" . PHP_EOL;
} else {
    echo "Gueltig" . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 17 | Versandfälle und Freigrenze kombinieren
// Schwerpunkt: switch mit if / else
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Zwei Fehler waren enthalten: Der Grenzwert wurde ausgeschlossen und
// der Standardfall lief in den Expressfall weiter. Beide Stellen müssen stimmen.
//
// Zielausgabe: 0
// Zusatztests:
// standard bei Warenwert 49: 4; bei 50 oder 99: 0.
// express bei 99: 9; abholung bei 49: 0; unbekannt: -1.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 17 ===" . PHP_EOL;
// Startwerte:
$versandart = "standard";
$warenwert = 50;
$freiAb = 50;
$standardKosten = 4;
$expressKosten = 9;
$ungueltig = -1;
$versand = $ungueltig;

switch ($versandart) {
    case "standard":
        if ($warenwert >= $freiAb) {
            $versand = 0;
        } else {
            $versand = $standardKosten;
        }
        break;
    case "express":
        $versand = $expressKosten;
        break;
    case "abholung":
        $versand = 0;
        break;
    default:
        $versand = $ungueltig;
}
echo $versand . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 18 | Ein Dreieck statt eines Quadrats erzeugen
// Schwerpunkt: verschachtelte for-Schleifen
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Die aktuelle Zeilennummer bestimmt die Sternanzahl der inneren Schleife.
// Der Zeilenumbruch steht nach der inneren, aber noch innerhalb der äußeren Schleife.
//
// Zielausgabe: Drei Zeilen:
// *
// **
// ***
// Zusatztests:
// $zeilen = 1: eine Zeile mit *; $zeilen = 0: keine Ausgabe.
// $zeilen = 4: zusätzlich eine vierte Zeile mit ****.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 18 ===" . PHP_EOL;
// Startwerte:
$zeilen = 3;

for ($zeile = 1; $zeile <= $zeilen; $zeile++) {
    for ($spalte = 1; $spalte <= $zeile; $spalte++) {
        echo "*";
    }
    echo PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 19 | Versuche bis zum Erfolg begrenzen
// Schwerpunkt: do-while mit mehreren Bedingungen
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Ein weiterer Versuch ist nur bei bisherigem Misserfolg UND freiem Versuchskontingent erlaubt.
// Die Aufgabenannahme zum Limit verhindert einen Zugriff hinter das Ende der Liste.
//
// Zielausgabe: Versuch 1
// Versuch 2
// Versuch 3
// bool(true)
// Zusatztests:
// [true, false, false], Limit 3: nur Versuch 1; bool(true).
// [false, false, false], Limit 2: Versuch 1 und 2; bool(false).
// [false], Limit 1: nur Versuch 1; bool(false).
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 19 ===" . PHP_EOL;
// Startwerte:
$ergebnisse = [false, false, true, true];
$maxVersuche = 3;
$versuch = 0;
$erfolgreich = false;

do {
    $erfolgreich = $ergebnisse[$versuch];
    $versuch++;
    echo "Versuch " . $versuch . PHP_EOL;
} while ($erfolgreich === false && $versuch < $maxVersuche);
var_dump($erfolgreich);


// ----------------------------------------------------------------------------------------------
// AUFGABE 20 | Den ersten lieferbaren Artikel finden
// Schwerpunkt: foreach mit Verzweigung und Abbruch
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// break beendet die foreach-Schleife. Spätere passende Artikel werden nicht mehr gelesen.
//
// Zielausgabe: Heft
// Zusatztests:
// Leere Liste oder ausschließlich Bestand 0: Kein Artikel.
// Erster Datensatz mit positivem Bestand: dessen Name; spätere Treffer zählen nicht.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 20 ===" . PHP_EOL;
// Startwerte:
$produkte = [
    ["name" => "Stift", "bestand" => 0],
    ["name" => "Heft", "bestand" => 3],
    ["name" => "Block", "bestand" => 5],
];
$treffer = "Kein Artikel";

foreach ($produkte as $produkt) {
    if ($produkt["bestand"] > 0) {
        $treffer = $produkt["name"];
        break;
    }
}
echo $treffer . PHP_EOL;


// ==============================================================================================
// STUFE 5 | SCHWER | AUFGABEN 21-25
// Bekannte Strukturen kombinieren und mehrere Regeln zuverlässig umsetzen.
// ==============================================================================================
echo PHP_EOL . "STUFE 5 | SCHWER" . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 21 | Fehlend, null und leer unterscheiden
// Schwerpunkt: mehrstufige und verschachtelte Verzweigungen
// Arbeitsweise: Korrigieren und ergänzen
//
// MUSTERLÖSUNG
// Erst wird der Container geprüft, dann der Schlüssel, dann der Inhalt.
// array_key_exists() erkennt einen vorhandenen Schlüssel auch bei null;
// isset() allein könnte fehlend und null nicht auseinanderhalten.
// trim() wird erst nach der String-Prüfung aufgerufen. "0" bleibt gültig.
//
// Zielausgabe: Gueltig: 0
// Zusatztests:
// null als gesamte Eingabe: Kein Array; []: Fehlt; ["artikel" => null]: Ohne Wert.
// ["artikel" => 12]: Falscher Typ; ["artikel" => "   "]: Leer.
// ["artikel" => "  Mia Sommer  "]: Gueltig: Mia Sommer.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 21 ===" . PHP_EOL;
// Startwerte:
$eingabe = ["artikel" => " 0 "];
$meldung = "";

if (!is_array($eingabe)) {
    $meldung = "Kein Array";
} elseif (!array_key_exists("artikel", $eingabe)) {
    $meldung = "Fehlt";
} elseif ($eingabe["artikel"] === null) {
    $meldung = "Ohne Wert";
} elseif (!is_string($eingabe["artikel"])) {
    $meldung = "Falscher Typ";
} else {
    $artikel = trim($eingabe["artikel"]);
    if ($artikel === "") {
        $meldung = "Leer";
    } else {
        $meldung = "Gueltig: " . $artikel;
    }
}
echo $meldung . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 22 | Eine ganze Aktionsfolge verarbeiten
// Schwerpunkt: switch innerhalb von foreach
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Die Prüfung beim Verringern schützt den Nullbestand.
// Ein einfaches break beendet nur das switch; die foreach-Schleife geht weiter.
// break 2 würde zusätzlich die umgebende Schleife beenden.
//
// Zielausgabe: Bestand: 2
// Unbekannt: 1
// Zusatztests:
// ["minus"] bei Bestand 0: Bestand 0, Unbekannt 0.
// ["x", "plus"] bei Bestand 0: Bestand 1, Unbekannt 1.
// [] bei Bestand 0: Bestand 0, Unbekannt 0; ["plus", "leeren"]: ebenfalls 0 und 0.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 22 ===" . PHP_EOL;
// Startwerte:
$aktionen = ["plus", "plus", "minus", "unbekannt", "leeren", "minus", "plus", "plus"];
$bestand = 0;
$unbekannt = 0;

foreach ($aktionen as $aktion) {
    switch ($aktion) {
        case "plus":
            $bestand++;
            break;
        case "minus":
            if ($bestand > 0) {
                $bestand--;
            }
            break;
        case "leeren":
            $bestand = 0;
            break;
        default:
            $unbekannt++;
            break;
    }
}
echo "Bestand: " . $bestand . PHP_EOL;
echo "Unbekannt: " . $unbekannt . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 23 | Eine Primzahlprüfung reparieren
// Schwerpunkt: for mit Verzweigung und Abbruch
// Arbeitsweise: Korrigieren und ergänzen
//
// MUSTERLÖSUNG
// Zahlen unter 2 werden bereits als nicht prim vorgemerkt; die Schleife startet dort nicht.
// Die Zahl selbst darf nicht als Gegenbeispiel zählen, deshalb die obere Grenze ohne Gleichheit.
// Die einfache Teilersuche ist für den kleinen Testbereich bewusst nicht weiter optimiert.
//
// Zielausgabe: Primzahl
// Zusatztests:
// 2 und 13: Primzahl; 1, 0 und -5: Keine Primzahl; 9 und 25: Keine Primzahl.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 23 ===" . PHP_EOL;
// Startwerte:
$zahl = 29;

$istPrim = $zahl >= 2;
for ($teiler = 2; $teiler < $zahl; $teiler++) {
    if ($zahl % $teiler === 0) {
        $istPrim = false;
        break;
    }
}
if ($istPrim) {
    echo "Primzahl" . PHP_EOL;
} else {
    echo "Keine Primzahl" . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 24 | Überspringen und Stoppen sicher kombinieren
// Schwerpunkt: while mit Schleifensteuerung
// Arbeitsweise: Korrigieren
//
// MUSTERLÖSUNG
// Die Leseposition wird unmittelbar nach dem Lesen weitergesetzt. So überspringt
// continue nicht die Zähleränderung und kann nicht am selben leeren Text hängenbleiben.
// break beendet bei STOP die Schleife. Nur der tatsächliche Ausgabepfad zählt mit.
//
// Zielausgabe: Mia
// 0
// Bearbeitet: 2
// Zusatztests:
// [] oder ["STOP", "Tom"]: nur Bearbeitet: 0.
// ["", "Tom"]: Tom und Bearbeitet: 1; ["0", ""]: 0 und Bearbeitet: 1.
// ["   ", ""]: nur Bearbeitet: 0; kein endloser Lauf.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 24 ===" . PHP_EOL;
// Startwerte:
$eintraege = ["  Mia ", "   ", "0", "STOP", "Tom"];
$index = 0;
$bearbeitet = 0;

while ($index < count($eintraege)) {
    $text = trim($eintraege[$index]);
    $index++;
    if ($text === "") {
        continue;
    }
    if ($text === "STOP") {
        break;
    }
    echo $text . PHP_EOL;
    $bearbeitet++;
}
echo "Bearbeitet: " . $bearbeitet . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 25 | Produktdatensätze prüfen und erweitern
// Schwerpunkt: foreach mit Verzweigungen und Überspringen
// Arbeitsweise: Ergänzen
//
// MUSTERLÖSUNG
// Jede frühe Prüfung überspringt nur den ungültigen Datensatz. Die übrigen laufen weiter.
// Die Reihenfolge der Prüfungen verhindert Zugriffe auf fehlende Felder und falsche Typen.
// isset() schließt null aus, lässt aber 0 zu. is_int() akzeptiert keine Zahlenstrings.
// Erst nach allen Prüfungen werden Status, Ergebnisliste und Summe verändert.
//
// Zielausgabe: Gueltige Artikel: 2
// Gesamtbestand: 3
// Danach das Ergebnisarray: Stift / 0 / ausverkauft; Heft / 3 / lieferbar.
// Zusatztests:
// [] oder ausschließlich ungültige Datensätze: 0 Artikel, Gesamtbestand 0, leeres Ergebnis.
// Eintrag mit Name " 0 " und Bestand 0: Name "0", Bestand 0, Status ausverkauft.
// Eintrag mit Bestand "4", false oder 2.5: jeweils überspringen.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 25 ===" . PHP_EOL;
// Startwerte:
$produkte = [
    ["name" => " Stift ", "bestand" => 0],
    ["name" => "Heft", "bestand" => 3],
    ["name" => "Block", "bestand" => null],
    ["name" => "   ", "bestand" => 2],
    ["name" => "Mappe", "bestand" => -1],
    ["name" => "Ordner", "bestand" => "4"],
    "defekt",
    ["name" => "Lineal"],
];
$bereinigt = [];
$summe = 0;

foreach ($produkte as $produkt) {
    if (!is_array($produkt)) {
        continue;
    }
    if (!isset($produkt["name"], $produkt["bestand"])) {
        continue;
    }
    if (!is_string($produkt["name"])) {
        continue;
    }
    $name = trim($produkt["name"]);
    $bestand = $produkt["bestand"];
    if ($name === "" || !is_int($bestand) || $bestand < 0) {
        continue;
    }
    if ($bestand === 0) {
        $status = "ausverkauft";
    } else {
        $status = "lieferbar";
    }
    $bereinigt[] = ["name" => $name, "bestand" => $bestand, "status" => $status];
    $summe = $summe + $bestand;
}
echo "Gueltige Artikel: " . count($bereinigt) . PHP_EOL;
echo "Gesamtbestand: " . $summe . PHP_EOL;
print_r($bereinigt);


// ==============================================================================================
// KURZE AUSWERTUNGSHILFEN | NICHT TEIL DER AUFGABEN
// ==============================================================================================
// if / elseif / else: Die erste passende Alternative einer solchen Kette wird ausgeführt.
// while prüft vor, do-while nach dem Schleifenkörper. for bündelt Start, Prüfung und Änderung.
// foreach kann Werte oder Schlüssel und Werte liefern. Ohne Referenz muss eine Änderung
// ausdrücklich zurück in das Array geschrieben werden.
// break beendet die nächstgelegene Schleife oder das nächstgelegene switch.
// continue überspringt den Rest des aktuellen Schleifendurchlaufs; es beendet nicht die Schleife.
// In einem switch verhält sich continue in PHP besonders. In diesen Lösungen steht continue
// deshalb nur direkt in Schleifen. Für das Beenden eines switch-Falls wird break verwendet.
// switch vergleicht typschwach. Die switch-Übungen verwenden bewusst ausschließlich Strings.
// declare(strict_types=1) macht switch-Vergleiche nicht strikt und validiert keine Arrayinhalte.
// isset() ist bei fehlenden Werten und null falsch. array_key_exists() prüft die Schlüsselexistenz.
// empty() ist unter anderem bei 0 und "0" wahr. Diese beiden Werte sind nicht automatisch ungültig.
// Bei einer Datentypprüfung sind 0, "0", null, false und "" voneinander zu unterscheiden.
//
// FACHLICHE REFERENZEN | OFFIZIELLES PHP-HANDBUCH | geprüft am 29.09.2026
// https://www.php.net/manual/de/control-structures.if.php
// https://www.php.net/manual/de/control-structures.elseif.php
// https://www.php.net/manual/de/control-structures.switch.php
// https://www.php.net/manual/de/control-structures.for.php
// https://www.php.net/manual/de/control-structures.while.php
// https://www.php.net/manual/de/control-structures.do.while.php
// https://www.php.net/manual/de/control-structures.foreach.php
// https://www.php.net/manual/de/control-structures.break.php
// https://www.php.net/manual/de/control-structures.continue.php
// https://www.php.net/manual/de/function.isset.php
// https://www.php.net/manual/de/function.empty.php
// https://www.php.net/manual/de/function.array-key-exists.php
