<?php
require __DIR__ . "/function.php";

// Vor jeder Ausgabe arbeiten. GET darf diese POST-Aktionen nicht auslösen.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php?fehler=Bitte+das+POST-Formular+verwenden.", true, 303);
    exit;
}

$fehler = [];
$gueltigeDaten = [];

$lautstaerke = "";
// TODO: $_POST["lautstaerke"] vor dem Lesen mit isset() und is_string() prüfen.
// TODO: Den Inhalt entsprechend AUFGABE.md validieren.
// TODO: Entweder eine Fehlermeldung sammeln oder den gültigen Wert
//       in $gueltigeDaten unter dem Feldnamen ablegen.

// Bekanntes Muster: Fehler UND ausschließlich gültige Formwerte zurückgeben.
if (!empty($fehler)) {
    $gueltigeDaten["fehler"] = implode(" ", $fehler);
    header("Location: index.php?" . http_build_query($gueltigeDaten, "", "&"), true, 303);
    exit;
}

// TODO: Den geprüften Wert mit der geforderten Lebensdauer als Cookie setzen.
// TODO: Danach zur passenden Seite zurückleiten und exit ausführen.

// Vorläufiger Rücksprung: verhindert eine falsche Erfolgsmeldung im Startcode.
header("Location: index.php?fehler=TODO-Stellen+noch+bearbeiten.", true, 303);
exit;
