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
if ($aktion === "vorbereiten") {
    $titel = "";
    // TODO: Titel aus POST mit isset() und is_string() prüfen; trim() und die fachliche Prüfung ergänzen. Gültige Daten und Fehler getrennt sammeln.
    // TODO: Bei Fehlern alle Meldungen und nur gültige neue Formwerte in der Session hinterlegen; ohne URL-Daten zurückleiten.
    // TODO: Den gültigen Titel als Session-Entwurf speichern und zur zweiten Seite weiterleiten.
} elseif ($aktion === "bestaetigen") {
    $titel = "";
    // TODO: Einen vorhandenen, nicht leeren Entwurfstitel geprüft aus der Session lesen.
    // TODO: Ohne gültigen Entwurf mit Session-Fehlermeldung zum ersten Formular zurückleiten.
    // TODO: Die Bestätigungs-Checkbox in POST auf gesetzten Textwert ja prüfen.
    // TODO: Den geprüften Session-Entwurf als Auftrag übernehmen, Entwurf entfernen und zum Start zurückleiten.
}
// Unbekannte Aktion wird nicht stillschweigend ausgeführt.
$_SESSION["fehler"] = ["Bitte eine gültige Formularaktion verwenden."];
$_SESSION["alte_daten"] = [];
header("Location: index.php", true, 303);
exit;
