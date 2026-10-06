<?php

// Vorgegeben: Nur bei der Ausgabe für HTML maskieren.
// Geeignet für HTML-Text und value-Attribute in Anführungszeichen.
function html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

// Bekannter Ablauf, jetzt an einer Stelle wiederverwendbar.
function zurueckZumFormular(array $gueltigeDaten, array $fehler): void
{
    $gueltigeDaten["fehler"] = implode(" ", $fehler);
    $parameter = http_build_query($gueltigeDaten, "", "&");

    // 303: Der Browser ruft index.php anschließend mit GET auf.
    header("Location: index.php?" . $parameter, true, 303);
    exit;
}
