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
// TODO: Bei leeren ausschließlich die Merkliste entfernen und zurückleiten.
if ($aktion !== "hinzufuegen") { $fehler[] = "Unbekannte Aktion."; }
$begriff = "";
// TODO: Begriff aus POST mit isset() und is_string() prüfen; trim() und die fachliche Prüfung ergänzen. Gültige Daten und Fehler getrennt sammeln.
$merkliste = [];
// TODO: Eine vorhandene Merkliste als Array lesen; nur Text-Einträge für die weitere Verarbeitung übernehmen.
// TODO: Doppelte Begriffe und mehr als fünf Einträge ablehnen; betroffenen Formwert nicht zurückgeben.
if (!empty($fehler)) {
    $gueltigeDaten["fehler"] = implode(" ", $fehler);
    header("Location: index.php?" . http_build_query($gueltigeDaten, "", "&"), true, 303);
    exit;
}
// TODO: Den gültigen Begriff an das Array anhängen und die Merkliste in der Session speichern.
header("Location: index.php", true, 303);
exit;
