<?php
declare(strict_types=1);
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/function.php";
starteSession();

// Schreiben nur per POST. Ein direkter GET-Aufruf legt keine Person an.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php", true, 303);
    exit;
}

$fehler = [];
$werte = ["vorname" => "", "nachname" => ""];
$vorname = "";
$nachname = "";

// TODO 06: Beide POST-Einträge unabhängig mit isset() und is_string() prüfen.
// Vorhandene Textwerte mit trim() in $vorname bzw. $nachname übernehmen.
// Für fehlende oder unpassende Einträge je eine Meldung in $fehler sammeln.

// TODO 07a: Beide Inhalte prüfen: nicht leer, gültiges UTF-8, höchstens 50 Zeichen.
// Verwende für die vorgegebene Textlänge mb_strlen($text, "UTF-8").
// Nur gültige Werte in $werte übernehmen. Ungültige Felder bleiben dort leer.
// Den folgenden Schutz erst entfernen, wenn beide Prüfungen vollständig sind:
$fehler["todo"] = "TODO 06/07: Die serverseitige Prüfung fehlt noch.";

// Vorgegebener Rahmen: fremde/veraltete Formulare nicht akzeptieren.
if (!tokenIstGueltig()) {
    $fehler["formular"] = "Das Formular ist abgelaufen oder ungültig. Bitte prüfe die Angaben und sende erneut.";
}

if (!empty($fehler)) {
    // TODO 07b: $fehler und $werte unter $_SESSION["formular"] ablegen.
    // Mit 303 zu index.php zurückleiten und anschließend beenden.
    // Die vorläufige Ausgabe ersetzen (vor header() darf keine Ausgabe bleiben):
    exit("TODO 07: Bei Fehlern zurück zum Formular. Noch kein INSERT ausgeführt.");
}

// Erst nach allen Prüfungen darf der Schreibzugriff stattfinden.
try {
    $pdo = verbindeDatenbank();
    // TODO 08: INSERT mit benannten Platzhaltern vorbereiten.
    // Mit execute() beide geprüften Werte aus $werte binden und speichern.
    // Die folgende vorläufige Ausnahme danach entfernen:
    throw new PDOException("TODO 08: INSERT ergänzen.");
} catch (PDOException $e) {
    // Technische Details gehören ins Serverprotokoll, nicht in die Webseite.
    error_log("PHP Person speichern: " . $e->getMessage());
    $_SESSION["formular"] = [
        "fehler" => ["Speichern nicht möglich. Prüfe den Datenbankdienst und config.php. Die gültigen Eingaben bleiben erhalten."],
        "werte" => $werte
    ];
    header("Location: index.php", true, 303);
    exit;
}

// TODO 09: Erfolgsmeldung in $_SESSION["erfolg"] ablegen.
// Mit 303 zu index.php zurückleiten und anschließend beenden.
// Diese vorläufige Ausgabe danach entfernen:
exit("Das INSERT ist fertig. TODO 09: Rückleitung ergänzen. Nicht erneut absenden.");
