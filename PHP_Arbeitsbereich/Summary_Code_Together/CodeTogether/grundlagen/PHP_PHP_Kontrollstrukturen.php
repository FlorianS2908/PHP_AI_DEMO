<?php
declare(strict_types=1);

// PHP | PHP-Kontrollstrukturen | 25 Aufgaben in fünf Stufen
// Aufgaben zum Korrigieren und Ergänzen
// Stand: 29.09.2026
//
// START MIT XAMPP
// 1. Diese Datei unter C:\xampp\htdocs\PHP\ speichern.
// 2. Im XAMPP Control Panel Apache starten.
// 3. Im Browser öffnen:
//    http://localhost/PHP/PHP_PHP_Kontrollstrukturen_25_Aufgaben.php
// Alternativ im Terminal: php PHP_PHP_Kontrollstrukturen_25_Aufgaben.php
// Es werden keine weiteren Dateien, Bibliotheken oder Datenbanken benötigt.
// UTF-8 ohne BOM verwenden; kein weiteres PHP-Öffnungstag in die Abschnitte kopieren.
//
// SO ARBEITEST DU
// Bearbeite die Aufgaben in Reihenfolge direkt im TODO-Bereich.
// Bei "Korrigieren" ist bereits falscher Code vorhanden: Ändere ihn an Ort und Stelle.
// Bei "Ergänzen" vervollständigst du den vorhandenen Code.
// Startdaten und gewünschte Ausgaben bleiben erhalten, außer für die Zusatztests.
// Die Zielausgabe dient zur Kontrolle. Schreibe sie nicht als fertiges Ergebnis ab,
// sondern erzeuge sie mit den Variablen und der verlangten Kontrollstruktur.
// Die Aufgaben enthalten keine Musterlösungen und keine vorgegebenen Ersatzbedingungen.
// Jede Aufgabe setzt ihre Startwerte neu. Gleiche Variablennamen sind beabsichtigt.
// Ausgabeüberschriften und print_r() sind vorbereitet und keine eigenen Aufgaben.
//
// SICHER AUSFÜHREN
// Die unbearbeitete Datei läuft durch, zeigt aber absichtlich falsche oder fehlende Ergebnisse.
// Prüfe bei allen Schleifen, ob der Ablauf auch mit den Zusatztests wieder endet.
// Aufgabe 24 ist wegen einer möglichen Endlosschleife zunächst auskommentiert.
// Bearbeite dort zuerst den Code im Block und entferne erst danach die äußeren
// Blockkommentarzeichen. Die übrigen Aufgaben sind bereits aktiv.
//
// VORKENNTNISSE UND UMFANG
// Variablen, Ausgaben und einfache Arrays aus den Grundlagen werden vorausgesetzt.
// In höheren Stufen kommen die bekannten String- und Typprüfungen hinzu.
// Keine eigenen Funktionen, keine Klassen, keine Formulare und keine Datenbank.
// In Stufe 1 und 2 reichen meist wenige Änderungen; später werden Abläufe kombiniert.
// Die angegebenen Datenannahmen gelten jeweils nur für die betreffende Aufgabe.
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

echo "PHP | PHP-Kontrollstrukturen | Aufgabendatei" . PHP_EOL;


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
// Ab der Mindestpunktzahl soll "Ziel erreicht" erscheinen, darunter "Weiter ueben".
// Die vorbereitete Verzweigung behandelt einen Grenzfall falsch.
// Korrigiere die Bedingung. Die beiden Ausgaben bleiben unverändert.
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

// TODO: Die fehlerhafte Bedingung korrigieren.
if ($punkte > $mindestPunkte) {
    echo "Ziel erreicht" . PHP_EOL;
} else {
    echo "Weiter ueben" . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 02 | Genau einen Fall ausführen
// Schwerpunkt: switch / case / default
// Arbeitsweise: Korrigieren
//
// Bei "start" soll nur "Los", bei "stop" nur "Ende" erscheinen.
// Für jeden anderen Text soll nur "Unbekannt" erscheinen.
// Der Ablauf des vorbereiteten switch ist fehlerhaft. Korrigiere ihn.
//
// Zielausgabe: Los
// Zusatztests:
// $aktion = "stop": Ende; $aktion = "pause": Unbekannt.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 02 ===" . PHP_EOL;
// Startwerte:
$aktion = "start";

// TODO: Den Ablauf korrigieren, ohne die Meldungen zu verändern.
switch ($aktion) {
    case "start":
        echo "Los" . PHP_EOL;
    case "stop":
        echo "Ende" . PHP_EOL;
    default:
        echo "Unbekannt" . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 03 | Bis zur letzten Zahl zählen
// Schwerpunkt: for
// Arbeitsweise: Korrigieren
//
// Gib die ganzen Zahlen von 1 bis einschließlich $ende aus, jeweils in einer Zeile.
// Die vorhandene Schleife endet zu früh. Korrigiere den Schleifenkopf.
//
// Zielausgabe: 1, 2, 3, 4, 5 - jeweils in einer eigenen Zeile
// Zusatztests:
// $ende = 1: nur 1; $ende = 3: 1, 2, 3; $ende = 0: keine Zahl.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 03 ===" . PHP_EOL;
// Startwerte:
$ende = 5;

// TODO: Den Schleifenkopf korrigieren.
for ($zahl = 1; $zahl < $ende; $zahl++) {
    echo $zahl . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 04 | Ohne zusätzliche Null herunterzählen
// Schwerpunkt: while
// Arbeitsweise: Korrigieren
//
// Gib den Restwert aus und zähle bis einschließlich 1 herunter.
// Die 0 darf nicht mehr erscheinen. Bei einem Startwert von 0 gibt es keine Ausgabe.
// Die vorbereitete Schleife läuft einen Durchgang zu weit.
//
// Zielausgabe: 3, 2, 1 - jeweils in einer eigenen Zeile
// Zusatztests:
// $rest = 0: keine Zahl; $rest = 1: nur 1.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 04 ===" . PHP_EOL;
// Startwerte:
$rest = 3;

// TODO: Die Wiederholungsbedingung korrigieren.
while ($rest >= 0) {
    echo $rest . PHP_EOL;
    $rest--;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 05 | Die Werte statt der Positionen ausgeben
// Schwerpunkt: foreach
// Arbeitsweise: Korrigieren
//
// Gib die Farben in ihrer vorhandenen Reihenfolge aus, jede in einer eigenen Zeile.
// Die Schleife gibt bisher etwas anderes aus. Korrigiere die Ausgabe.
// Das Array und die Schleife bleiben erhalten.
//
// Zielausgabe: rot, gruen, blau - jeweils in einer eigenen Zeile
// Zusatztests:
// $farben = ["gelb"]: gelb; $farben = []: keine Ausgabe.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 05 ===" . PHP_EOL;
// Startwerte:
$farben = ["rot", "gruen", "blau"];

// TODO: Die fehlerhafte Ausgabe korrigieren.
foreach ($farben as $index => $farbe) {
    echo $index . PHP_EOL;
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
// Ab $gutAb Punkten soll "Gut" erscheinen. Ab $bestandenAb Punkten, aber noch
// unter $gutAb, soll "Bestanden" erscheinen. Darunter gilt "Weiter ueben".
// Es darf genau eine Meldung erscheinen. Korrigiere die Reihenfolge der Fälle.
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

// TODO: Die Reihenfolge der Fälle korrigieren.
if ($punkte >= $bestandenAb) {
    echo "Bestanden" . PHP_EOL;
} elseif ($punkte >= $gutAb) {
    echo "Gut" . PHP_EOL;
} else {
    echo "Weiter ueben" . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 07 | Zwei Fälle gemeinsam behandeln
// Schwerpunkt: switch / case / default
// Arbeitsweise: Korrigieren
//
// Für "samstag" und "sonntag" soll jeweils "Wochenende" erscheinen.
// Bei allen anderen Texten soll "Werktag" erscheinen; gültige Wochentage werden vorausgesetzt.
// Behandle die beiden Wochenendtage gemeinsam: Die Ausgabe "Wochenende" darf
// nur einmal im Code stehen. Korrigiere den vorhandenen Ablauf.
//
// Zielausgabe: Wochenende
// Zusatztests:
// $tag = "sonntag": Wochenende; $tag = "montag": Werktag.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 07 ===" . PHP_EOL;
// Startwerte:
$tag = "samstag";

// TODO: Den gemeinsamen Fall korrigieren.
switch ($tag) {
    case "samstag":
        break;
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
// Addiere alle ganzen Zahlen von 1 bis einschließlich $grenze.
// Gib nur die fertige Summe nach der Schleife aus. Bei $grenze = 0 bleibt sie 0.
// Die Berechnung innerhalb der Schleife ist fachlich falsch.
//
// Zielausgabe: 10
// Zusatztests:
// $grenze = 1: 1; $grenze = 3: 6; $grenze = 0: 0.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 08 ===" . PHP_EOL;
// Startwerte:
$grenze = 4;
$summe = 0;

// TODO: Die Berechnung innerhalb der Schleife korrigieren.
for ($zahl = 1; $zahl <= $grenze; $zahl++) {
    $summe = $zahl;
}
echo $summe . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 09 | Zuerst ausführen, dann prüfen
// Schwerpunkt: do-while
// Arbeitsweise: Korrigieren
//
// Gib zu Beginn jedes Durchlaufs $zahl aus und erhöhe sie danach um eins.
// Wiederhole, solange der erhöhte Wert noch unter $grenze liegt.
// Der erste Durchlauf findet auch statt, wenn der Startwert die Grenze bereits erreicht.
// Korrigiere die Wiederholungsbedingung; die do-while-Struktur bleibt erhalten.
//
// Zielausgabe: 1, 2 - jeweils in einer eigenen Zeile
// Zusatztests:
// $zahl = 5: nur 5; $zahl = 3: nur 3. Dabei bleibt $grenze = 3.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 09 ===" . PHP_EOL;
// Startwerte:
$zahl = 1;
$grenze = 3;

// TODO: Die Bedingung am Ende korrigieren.
do {
    echo $zahl . PHP_EOL;
    $zahl++;
} while ($zahl === $grenze);


// ----------------------------------------------------------------------------------------------
// AUFGABE 10 | Die Änderungen im Lager speichern
// Schwerpunkt: foreach mit Schlüssel und Wert
// Arbeitsweise: Korrigieren
//
// Erhöhe jeden gespeicherten Artikelbestand um $zugang.
// Die vorbereitete Schleife verändert das ursprüngliche Array noch nicht.
// Korrigiere die Zuweisung in der Schleife. Alle Artikel müssen erhalten bleiben.
// Die Bestände und der Zugang sind hier gültige, nicht negative ganze Zahlen.
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

// TODO: Die Speicherung der geänderten Bestände korrigieren.
foreach ($lager as $artikel => $bestand) {
    $bestand = $bestand + $zugang;
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
// Zugriff gibt es nur ohne Sperre. Zusätzlich muss die Rolle "admin" sein
// oder eine Freigabe vorliegen. Sonst soll "Gesperrt" erscheinen.
// Der vorhandene Code lässt einen gesperrten Administrator durch.
// Korrigiere die Bedingung; Rolle, Freigabe und Sperre werden bereits passend typisiert
// geliefert.
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

// TODO: Die Verknüpfung so korrigieren, dass die Sperre immer wirkt.
if ($rolle === "admin" || $freigegeben === true && $gesperrt === false) {
    echo "Zugriff" . PHP_EOL;
} else {
    echo "Gesperrt" . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 12 | Eine Warenkorbmenge verändern
// Schwerpunkt: switch mit einer Verzweigung
// Arbeitsweise: Ergänzen
//
// "mehr" erhöht die Menge um eins. "weniger" verringert sie um eins,
// aber niemals unter 0. "leeren" setzt die Menge auf 0.
// Unbekannte Aktionen verändern nichts. Ergänze die Verarbeitung in den Fällen.
// Die Anfangsmenge ist eine nicht negative ganze Zahl; die Aktion ist ein String.
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

// TODO: Die fehlende Verarbeitung ergänzen.
switch ($aktion) {
    case "mehr":
        // TODO: Verarbeitung ergänzen.
        break;
    case "weniger":
        // TODO: Verarbeitung ergänzen.
        break;
    case "leeren":
        // TODO: Verarbeitung ergänzen.
        break;
    default:
        // TODO: Vorgabe für unbekannte Aktionen berücksichtigen.
}
echo $menge . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 13 | Einzelne Zahlen überspringen
// Schwerpunkt: for mit Schleifensteuerung
// Arbeitsweise: Korrigieren
//
// Betrachte jede ganze Zahl von 1 bis einschließlich $ende.
// Gib nur gerade Zahlen aus. Ungerade Zahlen sollen übersprungen werden,
// ohne die Prüfung der nachfolgenden Zahlen zu beenden.
// Der vorbereitete Ablauf stoppt zu früh. Korrigiere ihn.
//
// Zielausgabe: 2, 4, 6, 8 - jeweils in einer eigenen Zeile
// Zusatztests:
// $ende = 1: keine Zahl; $ende = 2: nur 2; $ende = 5: 2 und 4.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 13 ===" . PHP_EOL;
// Startwerte:
$ende = 8;

// TODO: Den Ablauf innerhalb der Verzweigung korrigieren.
for ($zahl = 1; $zahl <= $ende; $zahl++) {
    if ($zahl % 2 !== 0) {
        break;
    }
    echo $zahl . PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 14 | Aufträge und Bearbeitungsgrenze beachten
// Schwerpunkt: while
// Arbeitsweise: Korrigieren
//
// Gib die ersten Aufträge in ihrer Reihenfolge aus, höchstens $limit Stück.
// Es dürfen nie mehr Aufträge gelesen werden, als im Array vorhanden sind.
// Das Limit ist eine nicht negative ganze Zahl; das Array ist fortlaufend ab 0 indiziert.
// Korrigiere die Wiederholungsbedingung. Bei Limit 0 oder leerer Liste gibt es keine Ausgabe.
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

// TODO: Die Verknüpfung der beiden Begrenzungen korrigieren.
while ($index < $anzahlAuftraege || $index < $limit) {
    echo $auftraege[$index] . PHP_EOL;
    $index++;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 15 | Leere Texte ausfiltern, Inhalt behalten
// Schwerpunkt: foreach mit Verzweigung
// Arbeitsweise: Korrigieren
//
// Entferne äußere Leerzeichen und sammle nicht leere Texte in $bereinigt.
// Die Reihenfolge bleibt erhalten. Alle Eingabeelemente sind hier Strings.
// Auch "0" ist Inhalt und muss erhalten bleiben.
// Die vorhandene Prüfung verwirft einen gültigen Eintrag. Korrigiere sie.
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

// TODO: Die fehlerhafte Leerprüfung korrigieren.
foreach ($namen as $name) {
    $name = trim($name);
    if (empty($name)) {
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
// Prüfe das Feld "menge". $eingabe ist in dieser Aufgabe immer ein Array.
// Fehlt das Feld oder enthält es null, lautet die Meldung "Fehlt".
// Bei einem anderen Typ als int gilt "Falscher Typ", bei negativem int "Negativ".
// Eine ganze Zahl ab 0 ist "Gueltig". Zahlenstrings sind hier ausdrücklich nicht erlaubt.
// Korrigiere und vervollständige die Fallunterscheidung. Gib genau eine Meldung aus.
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

// TODO: Die Prüfungen korrigieren und den fehlenden Fall ergänzen.
if (empty($eingabe["menge"])) {
    echo "Fehlt" . PHP_EOL;
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
// Für "standard" gelten die Standardkosten; ab $freiAb Warenwert kostet Standardversand 0.
// "express" kostet unabhängig vom Warenwert die Expresskosten. "abholung" kostet 0.
// Bei unbekannter Versandart wird $ungueltig ausgegeben. Alle Zahlen sind hier nicht negativ,
// ausgenommen die ausdrücklich als Fehlermarker vorgesehene Variable $ungueltig.
// Korrigiere die Fallverarbeitung. Ein Fall darf keinen anderen nachträglich ausführen.
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

// TODO: Die Verarbeitung der Fälle korrigieren.
switch ($versandart) {
    case "standard":
        if ($warenwert > $freiAb) {
            $versand = 0;
        } else {
            $versand = $standardKosten;
        }
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
// Erzeuge ein linksbündiges Dreieck mit $zeilen Zeilen: zuerst ein Stern,
// dann zwei Sterne und so weiter. Keine Leerzeichen vor oder zwischen den Sternen.
// $zeilen ist eine nicht negative ganze Zahl; bei 0 soll nichts erscheinen.
// Der vorhandene Code erzeugt ein Quadrat. Korrigiere die verschachtelten Schleifen.
// Verwende weiterhin beide Schleifen, keine Funktion zum Wiederholen eines Textes.
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

// TODO: Die Schleifen so korrigieren, dass das geforderte Dreieck entsteht.
for ($zeile = 1; $zeile <= $zeilen; $zeile++) {
    for ($spalte = 1; $spalte <= $zeilen; $spalte++) {
        echo "*";
    }
    echo PHP_EOL;
}


// ----------------------------------------------------------------------------------------------
// AUFGABE 19 | Versuche bis zum Erfolg begrenzen
// Schwerpunkt: do-while mit mehreren Bedingungen
// Arbeitsweise: Korrigieren
//
// Lies pro Versuch den nächsten booleschen Wert aus $ergebnisse und zähle den Versuch.
// false bedeutet Misserfolg, true bedeutet Erfolg. Stoppe nach dem ersten Erfolg
// oder nach $maxVersuche Versuchen. Mindestens ein Versuch wird durchgeführt.
// Die Liste ist nicht leer; das Limit liegt zwischen 1 und ihrer Eintragszahl.
// Korrigiere die Wiederholungsbedingung. Keine zusätzlichen Eingabeprüfungen nötig.
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

// TODO: Die Wiederholungsbedingung korrigieren.
do {
    $erfolgreich = $ergebnisse[$versuch];
    $versuch++;
    echo "Versuch " . $versuch . PHP_EOL;
} while ($erfolgreich === true && $versuch < $maxVersuche);
var_dump($erfolgreich);


// ----------------------------------------------------------------------------------------------
// AUFGABE 20 | Den ersten lieferbaren Artikel finden
// Schwerpunkt: foreach mit Verzweigung und Abbruch
// Arbeitsweise: Korrigieren
//
// Suche in der vorhandenen Reihenfolge den ersten Artikel mit positivem Bestand.
// Speichere seinen Namen in $treffer und beende die Suche sofort.
// Ohne passenden Artikel bleibt "Kein Artikel" erhalten. Alle Datensätze sind hier gültig.
// Die aktuelle Schleife liefert bei mehreren Treffern den falschen Artikel.
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

// TODO: Den Ablauf so korrigieren, dass der erste Treffer erhalten bleibt.
foreach ($produkte as $produkt) {
    if ($produkt["bestand"] > 0) {
        $treffer = $produkt["name"];
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
// Prüfe $eingabe in dieser Reihenfolge: Kein Array -> "Kein Array";
// Artikelschlüssel fehlt -> "Fehlt"; Wert ist null -> "Ohne Wert";
// anderer Werttyp als string -> "Falscher Typ".
// Ein nach dem Trimmen leerer Text ergibt "Leer". Sonst gib "Gueltig: "
// und den bereinigten Artikel aus. Auch "0" ist ein gültiger Artikeltext.
// Korrigiere und erweitere die Prüfung. Pro Eingabe erscheint genau eine Meldung.
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

// TODO: Die fehlerhafte Prüfung korrigieren und um die fehlenden Fälle erweitern.
if (isset($eingabe["artikel"])) {
    $artikel = trim($eingabe["artikel"]);
    if (empty($artikel)) {
        $meldung = "Leer";
    } else {
        $meldung = "Gueltig: " . $artikel;
    }
} else {
    $meldung = "Fehlt";
}
echo $meldung . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 22 | Eine ganze Aktionsfolge verarbeiten
// Schwerpunkt: switch innerhalb von foreach
// Arbeitsweise: Korrigieren
//
// Verarbeite alle Aktionen der Reihe nach. "plus" erhöht den Bestand um eins,
// "minus" verringert ihn um eins, aber nie unter 0. "leeren" setzt ihn auf 0.
// Jede unbekannte Aktion erhöht nur $unbekannt; spätere Aktionen werden weiter verarbeitet.
// Korrigiere die Fallverarbeitung und den Ablauf. Alle Aktionen sind Strings;
// der Anfangsbestand ist eine nicht negative ganze Zahl.
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

// TODO: Die Fehler in der Verarbeitung und im Ablauf korrigieren.
foreach ($aktionen as $aktion) {
    switch ($aktion) {
        case "plus":
            $bestand++;
            break;
        case "minus":
            $bestand--;
            break;
        case "leeren":
            $bestand = 0;
            break;
        default:
            $unbekannt++;
            break 2;
    }
}
echo "Bestand: " . $bestand . PHP_EOL;
echo "Unbekannt: " . $unbekannt . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 23 | Eine Primzahlprüfung reparieren
// Schwerpunkt: for mit Verzweigung und Abbruch
// Arbeitsweise: Korrigieren und ergänzen
//
// Eine Primzahl ist eine ganze Zahl größer als 1 mit genau zwei positiven Teilern:
// 1 und sich selbst. Prüfe $zahl durch mögliche weitere Teiler in einer for-Schleife.
// Gib "Primzahl" oder "Keine Primzahl" aus. Beende die Teilersuche beim ersten Gegenbeispiel.
// Korrigiere die Vorbereitung und die Schleifengrenze. Die vorgegebene Zahl bleibt erhalten.
// Testbereich dieser Übung: ganze Zahlen von -1000 bis 1000.
//
// Zielausgabe: Primzahl
// Zusatztests:
// 2 und 13: Primzahl; 1, 0 und -5: Keine Primzahl; 9 und 25: Keine Primzahl.
// ----------------------------------------------------------------------------------------------
echo PHP_EOL . "=== Aufgabe 23 ===" . PHP_EOL;
// Startwerte:
$zahl = 29;

// TODO: Vorbereitung und Schleifengrenze korrigieren.
$istPrim = true;
for ($teiler = 2; $teiler <= $zahl; $teiler++) {
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
// Lies die Texte der Reihe nach und entferne jeweils äußere Leerzeichen.
// Überspringe leere Texte. "0" bleibt gültiger Inhalt. Beim Text "STOP" endet die
// gesamte Verarbeitung sofort; "STOP" selbst und spätere Texte werden nicht ausgegeben.
// Zähle nur tatsächlich ausgegebene Texte. Die Liste enthält ausschließlich Strings.
// Der Startcode kann hängen. Korrigiere ihn im Kommentarblock und aktiviere ihn erst danach.
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

// TODO: Den Ablauf korrigieren, dann nur die äußeren Blockkommentarzeichen entfernen.
// ACHTUNG: Den folgenden Startcode nicht unverändert aktivieren.
/*
while ($index < count($eintraege)) {
    $text = trim($eintraege[$index]);
    if ($text === "") {
        continue;
    }
    if ($text === "STOP") {
        break;
    }
    echo $text . PHP_EOL;
    $bearbeitet++;
    $index++;
}
*/
echo "Bearbeitet: " . $bearbeitet . PHP_EOL;


// ----------------------------------------------------------------------------------------------
// AUFGABE 25 | Produktdatensätze prüfen und erweitern
// Schwerpunkt: foreach mit Verzweigungen und Überspringen
// Arbeitsweise: Ergänzen
//
// $produkte ist eine Liste. Übernimm nur Datensätze, die selbst Arrays sind und
// die Felder "name" und "bestand" mit Werten ungleich null enthalten.
// Der Name muss ein nach dem Trimmen nicht leerer String sein; "0" bleibt gültig.
// Der Bestand muss int und mindestens 0 sein. Zahlenstrings sind nicht erlaubt.
// Überspringe ungültige Datensätze und bearbeite die folgenden weiter.
// Sammle gültige Einträge in ursprünglicher Reihenfolge in $bereinigt, neu ab 0 indiziert:
// bereinigter "name", unveränderter "bestand", zusätzlich "status" = "ausverkauft"
// bei Bestand 0, sonst "lieferbar". Addiere nur gültige Bestände in $summe.
// Ergänze die Verarbeitung innerhalb der vorbereiteten foreach-Schleife.
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
    // TODO: Datensatz prüfen, gegebenenfalls überspringen, sonst verarbeiten.

}
echo "Gueltige Artikel: " . count($bereinigt) . PHP_EOL;
echo "Gesamtbestand: " . $summe . PHP_EOL;
print_r($bereinigt);
