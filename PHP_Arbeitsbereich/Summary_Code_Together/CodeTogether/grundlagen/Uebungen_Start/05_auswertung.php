<?php
declare(strict_types=1);
header("Content-Type: text/plain; charset=UTF-8");
// Aufgabe 05: Lagerbewegungen kontrolliert verbuchen
// Arbeitsauftrag und Tests: ../PHP_PHP_Uebungsaufgaben.pdf, Seite 6.
// Startdaten sind vorgegeben. Ergänze deine Verarbeitung an den TODO-Stellen.

$lager = [
    "A-01" => ["name" => "Stift", "bestand" => 3],
    "A-02" => ["name" => "Mappe", "bestand" => 0],
    "A-03" => ["name" => "Block", "bestand" => 10]
];
$bewegungen = [
    ["artikel" => "A-01", "aenderung" => "4"],
    ["artikel" => "A-02", "aenderung" => "-1"],
    ["artikel" => "A-01", "aenderung" => "2abc"],
    ["artikel" => "X-99", "aenderung" => "5"],
    ["artikel" => "A-03", "aenderung" => "-3"],
    ["artikel" => "A-02", "aenderung" => "0"],
    ["artikel" => "A-01", "aenderung" => []],
    ["aenderung" => "1"]
];
// TODO: Auf einer Kopie arbeiten; Fehler protokollieren.

echo "Startdatei: Bearbeite die TODOs gemäß Aufgabenblatt." . PHP_EOL;
