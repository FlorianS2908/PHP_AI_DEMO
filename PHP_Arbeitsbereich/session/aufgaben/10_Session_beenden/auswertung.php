<?php
require __DIR__ . "/function.php";

// TODO: Die konfigurierte Session vor jeder Ausgabe starten; einen Startfehler kontrolliert beenden.

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $_SESSION["fehler"] = ["Bitte das POST-Formular verwenden."];
    $_SESSION["alte_daten"] = [];
    header("Location: index.php", true, 303);
    exit;
}
$fehler = [];
$gueltigeDaten = [];
$aktion = "";
if (isset($_POST["aktion"]) && is_string($_POST["aktion"])) {
    $aktion = $_POST["aktion"];
}
if ($aktion === "beenden") {
    // TODO: Alle Session-Werte leeren, das passende Session-Cookie ablaufen lassen und die serverseitige Session zerstören.
    header("Location: ende.html", true, 303);
    exit;
}
if ($aktion !== "speichern") { $fehler[] = "Unbekannte Aktion."; }
$alias = "";
// TODO: Alias aus POST mit isset() und is_string() prüfen; trim() und die fachliche Prüfung ergänzen. Gültige Daten und Fehler getrennt sammeln.
$format = "";
// TODO: Format aus POST mit isset() und is_string() prüfen; trim() und die fachliche Prüfung ergänzen. Gültige Daten und Fehler getrennt sammeln.
// TODO: Bei Fehlern alle Meldungen und nur gültige neue Formwerte in der Session hinterlegen; ohne URL-Daten zurückleiten.
// TODO: Beide vollständig geprüften Werte in der Session speichern.
header("Location: index.php", true, 303);
exit;
