<?php
require __DIR__ . "/function.php";

// Vor jeder Ausgabe arbeiten. GET darf diese POST-Aktionen nicht auslösen.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php?fehler=Bitte+das+POST-Formular+verwenden.", true, 303);
    exit;
}

$fehler = [];
$gueltigeDaten = [];

$ansicht = "";
if (!isset($_POST["ansicht"]) || !is_string($_POST["ansicht"]) || !in_array($_POST["ansicht"], ["liste", "kacheln"], true)) {
    $fehler[] = "Bitte Liste oder Kacheln auswählen.";
} else {
    $ansicht = $_POST["ansicht"];
    $gueltigeDaten["ansicht"] = $ansicht;
}

// Bekanntes Muster: Fehler UND ausschließlich gültige Formwerte zurückgeben.
if (!empty($fehler)) {
    $gueltigeDaten["fehler"] = implode(" ", $fehler);
    header("Location: index.php?" . http_build_query($gueltigeDaten, "", "&"), true, 303);
    exit;
}

setcookie("PHP_c01_ansicht", $ansicht, ["expires" => time() + 3600, "path" => $cookiePfad, "secure" => false, "httponly" => true, "samesite" => "Lax"]);
header("Location: index.php", true, 303);
exit;
