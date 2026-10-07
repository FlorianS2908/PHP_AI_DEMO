<?php
declare(strict_types=1);

// Eine Funktion kapselt die Berechnung; die Ausgabe übernimmt caller.php.
function addiere(int $zahl1, int $zahl2): int
{
    return $zahl1 + $zahl2;
}
