<?php
require __DIR__ . "/function.php";

// Vor jeder Ausgabe arbeiten. GET darf diese POST-Aktionen nicht auslösen.
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
if ($aktion !== "speichern" && $aktion !== "loeschen") {
    header("Location: index.php?fehler=Bitte+eine+gueltige+Aktion+waehlen.", true, 303);
    exit;
}

if ($aktion === "loeschen") {
    // Ein abgelaufenes Cookie an den Browser schicken. unset() würde nicht genügen.
    setcookie("PHP_demo_sprache", "", [
        "expires" => time() - 3600,
        "path" => $cookiePfad,
        "secure" => false, // NUR lokale HTTP-Übung. Bei HTTPS: true.
        "httponly" => true,
        "samesite" => "Lax"
    ]);
    header("Location: index.php", true, 303);
    exit;
}

$sprache = "";
if (isset($_POST["sprache"]) && is_string($_POST["sprache"])) {
    $sprache = $_POST["sprache"];
}
if (in_array($sprache, ["de", "en"], true)) {
    $gueltigeDaten["sprache"] = $sprache;
} else {
    $fehler[] = "Sprache: Bitte einen erlaubten Wert wählen.";
}

// Bekanntes Muster: Fehler UND ausschließlich gültige Formwerte zurückgeben.
if (!empty($fehler)) {
    $gueltigeDaten["fehler"] = implode(" ", $fehler);
    header("Location: index.php?" . http_build_query($gueltigeDaten, "", "&"), true, 303);
    exit;
}

// Erst nach ALLEN Prüfungen Cookies verändern.
setcookie("PHP_demo_sprache", $sprache, [
        "expires" => time() + 3600,
        "path" => $cookiePfad,
        "secure" => false, // NUR lokale HTTP-Übung. Bei HTTPS: true.
        "httponly" => true,
        "samesite" => "Lax"
    ]);
// Neuer GET-Request: Erst jetzt kann der Browser die neuen Cookies mitsenden.
header("Location: index.php", true, 303);
exit;
