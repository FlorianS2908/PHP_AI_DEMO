<?php
declare(strict_types=1);
header('Content-Type: text/plain; charset=UTF-8');

// Musterlösungen zu README.md. Funktionen berechnen; die Aufrufstelle gibt aus.

/** Aufgabe 1: Artikelschlüssel erhalten, nicht brauchbare Werte entfernen. */
function negativeMengenKorrigieren(mixed $mengen): array
{
    if (!is_array($mengen)) {
        return [];
    }
    foreach ($mengen as $artikel => $rohwert) {
        // Vor dem Konvertieren prüfen: Arrays oder true sind keine Bestände.
        if (!is_int($rohwert) && !is_string($rohwert)) {
            unset($mengen[$artikel]);
            continue;
        }
        $menge = filter_var($rohwert, FILTER_VALIDATE_INT);
        if ($menge === false) {
            unset($mengen[$artikel]);
            continue;
        }
        $mengen[$artikel] = $menge < 0 ? 0 : $menge;
    }
    return $mengen;
}

/** Hilfsfunktion zu Aufgabe 2: nichtnegative Ganzzahlen oder deren Texte. */
function bestandszahl(mixed $wert): int|false
{
    if (!is_int($wert) && !is_string($wert)) {
        return false;
    }
    return filter_var($wert, FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]]);
}

/** Aufgabe 2: Bei ungültigen Daten keine teilweise Veränderung zurückgeben. */
function bestandErgaenzen(mixed $lager, mixed $eingabe): array
{
    if (!is_array($lager)) {
        return [];
    }
    if (!is_array($eingabe) || !isset($eingabe['artikel'], $eingabe['menge'])
        || !is_string($eingabe['artikel'])) {
        return $lager;
    }
    $artikel = trim($eingabe['artikel']);
    $menge = bestandszahl($eingabe['menge']);
    if ($artikel === '' || $menge === false) {
        return $lager;
    }
    if (!array_key_exists($artikel, $lager)) {
        $lager[$artikel] = $menge;
        return $lager;
    }
    // array_key_exists erkennt auch einen vorhandenen Schlüssel mit null.
    $bestand = bestandszahl($lager[$artikel]);
    if ($bestand === false || $bestand > PHP_INT_MAX - $menge) {
        return $lager; // Ungültigen Bestand bzw. Integer-Überlauf nicht überschreiben.
    }
    $lager[$artikel] = $bestand + $menge;
    return $lager;
}

/** Aufgaben 3/4: endliche Zahlen; Zahlenstrings sind ausdrücklich erlaubt. */
function endlicheZahl(mixed $wert): bool
{
    return is_numeric($wert) && is_finite((float) $wert);
}

function getSum(mixed $zahl1, mixed $zahl2): int|float|false
{
    if (!endlicheZahl($zahl1) || !endlicheZahl($zahl2)) {
        return false;
    }
    $summe = $zahl1 + $zahl2;
    return is_finite((float) $summe) ? $summe : false;
}

function getMax(mixed $zahl1, mixed $zahl2, mixed $zahl3): int|float|false
{
    if (!endlicheZahl($zahl1) || !endlicheZahl($zahl2) || !endlicheZahl($zahl3)) {
        return false;
    }
    // Nach der Prüfung dürfen Zahlenstrings in Zahlen umgewandelt werden.
    $zahl1 += 0;
    $zahl2 += 0;
    $zahl3 += 0;
    if ($zahl1 >= $zahl2 && $zahl1 >= $zahl3) {
        return $zahl1;
    } elseif ($zahl2 >= $zahl1 && $zahl2 >= $zahl3) {
        return $zahl2;
    } else {
        return $zahl3;
    }
}

echo "1. Bereinigte Mengen" . PHP_EOL;
var_export(negativeMengenKorrigieren(['Tee' => 8, 'Kaffee' => -3, 'Kakao' => '0',
    'Saft' => null, 'Wasser' => '', 'Milch' => 'abc']));
echo PHP_EOL . "2. Ergänzter Bestand" . PHP_EOL;
var_export(bestandErgaenzen(['Tee' => 5, 'Kaffee' => 0], ['artikel' => ' Tee ', 'menge' => '3']));
echo PHP_EOL . "3. Summe: ";
var_export(getSum(3, 5));
echo PHP_EOL . "4. Größter Wert: ";
var_export(getMax(12, 11, 12));
echo PHP_EOL;
