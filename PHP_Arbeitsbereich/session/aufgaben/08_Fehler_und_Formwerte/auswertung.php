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
$artikel = "";
// TODO: Artikel aus POST mit isset() und is_string() prüfen; trim() und die fachliche Prüfung ergänzen. Gültige Daten und Fehler getrennt sammeln.
$anzahl = "";
// TODO: Anzahl aus POST mit isset() und is_string() prüfen; trim() und die fachliche Prüfung ergänzen. Gültige Daten und Fehler getrennt sammeln.
// TODO: Bei Fehlern alle Meldungen und nur gültige neue Formwerte in der Session hinterlegen; ohne URL-Daten zurückleiten.
// TODO: Nur bei vollständig gültigem Formular die Vormerkung speichern; Anzahl als int ablegen.
header("Location: index.php", true, 303);
exit;
