<?php
declare(strict_types=1);
header('Content-Type: text/plain; charset=UTF-8');

// Vier Übungen: zuerst README.md lesen, dann in einer Kopie arbeiten.
// Dies ist Startcode. Die TODO-Funktionen sind noch keine Lösungen.
// Musterlösungen stehen getrennt in loesungen_testarray.php.

// 1. Ungültige Mengen entfernen, negative Ganzzahlen auf 0 setzen.
function negativeMengenKorrigieren(mixed $mengen): array
{
    // TODO: Array und Werte prüfen, Artikelschlüssel erhalten, Mengen konvertieren.
    // TODO: Die Zahl 0 und der Text "0" sind gültig.
    return []; // Platzhalter.
}
$mengen = ['Tee' => 8, 'Kaffee' => -3, 'Kakao' => '0',
    'Saft' => null, 'Wasser' => '', 'Milch' => 'abc'];
// TODO: Vorhersage notieren, Funktion aufrufen, Ergebnis vergleichen.

// 2. Nur eine gültige Lieferung verändert den passenden Artikelbestand.
function bestandErgaenzen(mixed $lager, mixed $eingabe): array
{
    // TODO: Arrays und Pflichtangaben prüfen; bei Fehlern gültiges Lager erhalten.
    // TODO: Neuen Artikel anlegen oder gültigen vorhandenen Bestand erhöhen.
    return []; // Platzhalter.
}
$lager = ['Tee' => 5, 'Kaffee' => 0];
$eingabe = ['artikel' => ' Tee ', 'menge' => '3'];
// TODO: Original sichern, Funktion aufrufen, Ergebnis und Original vergleichen.

// 3. Gültige endliche Zahlen addieren; ein Fehler ergibt false.
function getSum(mixed $zahl1, mixed $zahl2): int|float|false
{
    // TODO: Eingaben prüfen, rechnen und Ergebnis mit return zurückgeben.
    return false; // Platzhalter.
}
// TODO: 3/5, -3/3, "2.5"/1 und "abc"/1 prüfen.

// 4. Größte von drei Zahlen finden: if/elseif/else, ohne max().
function getMax(mixed $zahl1, mixed $zahl2, mixed $zahl3): int|float|false
{
    // TODO: Eingaben prüfen und größten Wert bestimmen; Gleichstände zulassen.
    return false; // Platzhalter.
}
// TODO: 12/11/12, -5/-2/-9, 0/0/0 und ungültige Eingaben prüfen.

echo "Startdatei: Bearbeite die TODOs und dokumentiere Soll- und Ist-Ergebnis." . PHP_EOL;
