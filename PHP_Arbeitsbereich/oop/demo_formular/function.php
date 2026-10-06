<?php
// Bereits bekannt: ausschließlich bei der Ausgabe nach HTML maskieren.
function html($text)
{
    return htmlspecialchars((string) $text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
