<?php
declare(strict_types=1);

// Erst bei der Ausgabe maskieren: für HTML-Text und zitierte HTML-Attribute.
function html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
