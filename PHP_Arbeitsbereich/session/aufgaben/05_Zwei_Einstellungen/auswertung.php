<?php
require __DIR__ . "/function.php";

// TODO: Die konfigurierte Session vor jeder Ausgabe starten; einen Startfehler kontrolliert beenden.

// Kein Lesen aus $_GET als Ersatz für die geforderte POST-Eingabe.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php?fehler=Bitte+das+POST-Formular+verwenden.", true, 303);
    exit;
}
$fehler = [];
$gueltigeDaten = [];
$sprache = "";
// TODO: Sprache aus POST mit isset() und is_string() prüfen; trim() und die fachliche Prüfung ergänzen. Gültige Daten und Fehler getrennt sammeln.
$schrift = "";
// TODO: Schrift aus POST mit isset() und is_string() prüfen; trim() und die fachliche Prüfung ergänzen. Gültige Daten und Fehler getrennt sammeln.
if (!empty($fehler)) {
    $gueltigeDaten["fehler"] = implode(" ", $fehler);
    header("Location: index.php?" . http_build_query($gueltigeDaten, "", "&"), true, 303);
    exit;
}
// TODO: Erst nach beiden erfolgreichen Prüfungen ein assoziatives Session-Array einstellungen speichern.
header("Location: index.php", true, 303);
exit;
