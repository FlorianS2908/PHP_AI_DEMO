<?php
declare(strict_types=1);
header("Content-Type: text/plain; charset=UTF-8");
// Aufgabe 07: Warenkorb mit Rabatt und Versand
// Arbeitsauftrag und Tests: ../PHP_PHP_Uebungsaufgaben.pdf, Seite 8.
// Startdaten sind vorgegeben. Ergänze deine Verarbeitung an den TODO-Stellen.

$positionen = [
    ["name" => " PHP-Handout ", "menge" => "2", "preis" => "12,50"],
    ["name" => "USB-Stick", "menge" => "1", "preis" => "19.90"],
    ["name" => "Sticker", "menge" => "0", "preis" => "2,00"],
    ["name" => "Mappe", "menge" => "2abc", "preis" => "4,00"]
];
$versandart = " Express ";
// TODO: Pruefen, Positionen berechnen und zusammenfassen.

echo "Startdatei: Bearbeite die TODOs gemäß Aufgabenblatt." . PHP_EOL;
