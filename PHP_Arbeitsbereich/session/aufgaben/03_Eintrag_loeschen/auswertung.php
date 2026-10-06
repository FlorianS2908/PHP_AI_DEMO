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
$aktion = "";
if (isset($_POST["aktion"]) && is_string($_POST["aktion"])) {
    $aktion = $_POST["aktion"];
}
// TODO: Bei loeschen nur die Notiz aus der Session entfernen und sofort zurückleiten; keine Notiz-Eingabe verlangen.
if ($aktion !== "speichern") {
    $fehler[] = "Unbekannte Aktion.";
}
$notiz = "";
// TODO: Notiz aus POST mit isset() und is_string() prüfen; trim() und die fachliche Prüfung ergänzen. Gültige Daten und Fehler getrennt sammeln.
if (!empty($fehler)) {
    $gueltigeDaten["fehler"] = implode(" ", $fehler);
    header("Location: index.php?" . http_build_query($gueltigeDaten, "", "&"), true, 303);
    exit;
}
// TODO: Nur die gültige Notiz speichern.
header("Location: index.php", true, 303);
exit;
