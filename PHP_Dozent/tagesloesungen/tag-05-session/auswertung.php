<?php
require __DIR__ . "/function.php";

if (!session_start()) { http_response_code(500); exit("Session konnte nicht gestartet werden."); }

// Kein Lesen aus $_GET als Ersatz für die geforderte POST-Eingabe.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php?fehler=Bitte+das+POST-Formular+verwenden.", true, 303);
    exit;
}
$fehler = [];
$gueltigeDaten = [];
$alias = "";
if (!isset($_POST["alias"]) || !is_string($_POST["alias"])) {
    $fehler[] = "Bitte einen Alias als Text senden.";
} else {
    $alias = trim($_POST["alias"]);
    if ($alias === "") { $fehler[] = "Bitte einen Alias eintragen."; }
    else { $gueltigeDaten["alias"] = $alias; }
}
if (!empty($fehler)) {
    $gueltigeDaten["fehler"] = implode(" ", $fehler);
    header("Location: index.php?" . http_build_query($gueltigeDaten, "", "&"), true, 303);
    exit;
}
$_SESSION["alias"] = $alias;
header("Location: index.php", true, 303);
exit;
