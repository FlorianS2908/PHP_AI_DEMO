<?php
require __DIR__ . "/function.php";

if (!session_start()) {
    http_response_code(500);
    exit("Die Session konnte nicht gestartet werden. Prüfe die PHP-Konfiguration.");
}

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
if ($aktion === "entfernen") {
    unset($_SESSION["profil"], $_SESSION["fehler"], $_SESSION["alte_daten"]);
    $_SESSION["meldung"] = "Das Profil wurde entfernt. Die Session selbst bleibt bestehen.";
    header("Location: index.php", true, 303);
    exit;
}
if ($aktion !== "speichern") { $fehler[] = "Unbekannte Aktion."; }
$alias = "";
if (isset($_POST["alias"]) && is_string($_POST["alias"])) {
    $alias = trim($_POST["alias"]);
}
if ($alias !== "") {
    $gueltigeDaten["alias"] = $alias;
} else {
    $fehler[] = "Alias: Bitte ausfüllen.";
}
$sprache = "";
if (isset($_POST["sprache"]) && is_string($_POST["sprache"])) {
    $sprache = trim($_POST["sprache"]);
}
if (in_array($sprache, ["de", "en"], true)) {
    $gueltigeDaten["sprache"] = $sprache;
} else {
    $fehler[] = "Sprache: Bitte einen erlaubten Wert wählen.";
}
if (!empty($fehler)) {
    $_SESSION["fehler"] = $fehler;
    $_SESSION["alte_daten"] = $gueltigeDaten;
    header("Location: index.php", true, 303);
    exit;
}
unset($_SESSION["fehler"], $_SESSION["alte_daten"]);
// Erst nach ALLEN Prüfungen den gespeicherten Profilstand ändern.
$_SESSION["profil"] = ["alias" => $alias, "sprache" => $sprache];
$_SESSION["meldung"] = "Profil gespeichert. Diese Meldung erscheint genau einmal.";
header("Location: index.php", true, 303);
exit;
