<?php
// Vorgegeben: gleicher Session-Name und Cookie-Pfad auf allen Seiten dieser Übung.
// Diese Datei STARTET noch keine Session. session_start() bleibt in jeder PHP-Seite sichtbar.
session_name("PHPSU06");
ini_set("session.use_cookies", "1");
ini_set("session.use_only_cookies", "1");
ini_set("session.use_strict_mode", "1");
ini_set("session.use_trans_sid", "0");
$cookiePfad = rtrim(dirname($_SERVER["SCRIPT_NAME"]), "/\\") . "/";
session_set_cookie_params([
    "lifetime" => 0, // Browser-Sitzung; KEIN fester serverseitiger Timeout.
    "path" => $cookiePfad,
    "secure" => false, // Nur lokale HTTP-Übung. Für HTTPS auf true setzen.
    "httponly" => true,
    "samesite" => "Lax"
]);
header("Cache-Control: no-store");

function html(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}
