<?php
declare(strict_types=1);
header("Content-Type: text/plain; charset=UTF-8");
// Aufgabe 01: Preisimport mit Stolperfallen
// Arbeitsauftrag und Tests: ../PHP_PHP_Uebungsaufgaben.pdf, Seite 2.
// Startdaten sind vorgegeben. Ergänze deine Verarbeitung an den TODO-Stellen.

$rohpreise = [
    " 12,50 ", "8.90", "0", "1e2", "-2,50",
    "12abc", "", "  ", "1.234,56", null, ["9,90"]
];
// TODO: Pruefen, umwandeln und auswerten.

echo "Startdatei: Bearbeite die TODOs gemäß Aufgabenblatt." . PHP_EOL;
