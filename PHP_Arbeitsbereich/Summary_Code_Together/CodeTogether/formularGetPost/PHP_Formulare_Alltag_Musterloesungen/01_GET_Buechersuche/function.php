<?php

// Vorgegeben: Nur bei der Ausgabe für HTML maskieren.
// Geeignet für HTML-Text und value-Attribute in Anführungszeichen.
function html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}
