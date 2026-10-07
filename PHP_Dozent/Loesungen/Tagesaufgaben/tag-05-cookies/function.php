<?php
// Vorgegeben: Nur Text für die HTML-Ausgabe maskieren.
function html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

// URL-Ordner der aktuell ausgeführten Seite, NICHT C:\xampp\htdocs.
// Der Pfad passt sich an, falls du den Aufgabenordner verschiebst.
$cookiePfad = rtrim(dirname($_SERVER["SCRIPT_NAME"]), "/\\") . "/";

// Im Unterricht soll jeder neue Aufruf wirklich zum Server gehen.
header("Cache-Control: no-store");
