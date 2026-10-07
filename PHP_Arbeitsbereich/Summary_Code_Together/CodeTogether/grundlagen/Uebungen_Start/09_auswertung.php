<?php
declare(strict_types=1);
header("Content-Type: text/plain; charset=UTF-8");
// Aufgabe 09: Sitzplätze vergeben – ganz oder gar nicht
// Arbeitsauftrag und Tests: ../PHP_PHP_Uebungsaufgaben.pdf, Seite 10.
// Startdaten sind vorgegeben. Ergänze deine Verarbeitung an den TODO-Stellen.

$sitzplan = [
    "A" => ["0", "Mia", null],
    "B" => ["Tom", "", null],
    "C" => [null, "Lena", "Kai"]
];
$anzahlRoh = "3";
$gruppenname = "PHP-Team";
// TODO: Plan auswerten und Reservierung entwickeln.

echo "Startdatei: Bearbeite die TODOs gemäß Aufgabenblatt." . PHP_EOL;
