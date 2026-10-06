<?php
// Texte sicher in HTML ausgeben.
function ausgabe(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

// Nur ein gültiges Datum im Format JJJJ-MM-TT akzeptieren.
function pruefeDatum(string $text)
{
    if (strlen($text) !== 10 || strpos($text, "\0") !== false) {
        return false;
    }

    $datum = DateTimeImmutable::createFromFormat("!Y-m-d", $text);

    if ($datum === false || $datum->format("Y-m-d") !== $text) {
        return false;
    }

    return $datum;
}

function redirctAndDatenInjecten(array $redirectDaten, array $stammDaten){
    echo "Daten aus Function";
    var_dump($redirectDaten);
    var_dump($stammDaten);
}

?>