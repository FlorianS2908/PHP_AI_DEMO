<?php
declare(strict_types=1);
header("Content-Type: text/plain; charset=UTF-8");
// Aufgabe 03: Konfiguration: Welche Keys überleben?
// Arbeitsauftrag und Tests: ../PHP_PHP_Uebungsaufgaben.pdf, Seite 4.
// Startdaten sind vorgegeben. Ergänze deine Verarbeitung an den TODO-Stellen.

$basis = ["modus" => "standard", "limit" => "5", 0 => "Start"];
$import = [
    "modus" => "kurs", "limit" => null,
    "8" => "Text-8", 8 => "Zahl-8", "08" => "Null-8",
    "" => "Leer", null => "Nullkey"
];
// TODO: Zuerst Vermutungen notieren, dann pruefen.

echo "Startdatei: Bearbeite die TODOs gemäß Aufgabenblatt." . PHP_EOL;
