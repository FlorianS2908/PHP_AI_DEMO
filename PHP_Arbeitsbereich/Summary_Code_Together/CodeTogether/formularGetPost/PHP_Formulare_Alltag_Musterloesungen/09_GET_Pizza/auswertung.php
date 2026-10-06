<?php
require __DIR__ . "/function.php";

$pizza = "";
$extra = "";
$fehler = [];
$gueltigeDaten = [];

// 1. Die Methode muss zum Formular passen.
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    $fehler[] = "Bitte das Formular mit GET absenden.";
}

// 2. Kein ungeprüfter Zugriff auf Formulardaten.
if (isset($_GET["pizza"]) && is_string($_GET["pizza"])) {
    $pizza = trim($_GET["pizza"]);
}

if (isset($_GET["extra"]) && is_string($_GET["extra"])) {
    $extra = trim($_GET["extra"]);
}

// 3. Alle Felder vollständig prüfen, bevor eine Rückleitung erfolgt.
if ($pizza === "") {
    $fehler[] = "Pizza: Bitte ausfüllen.";
} else {
    $gueltigeDaten["pizza"] = $pizza;
}

// Fehlend oder leer ist erlaubt; ein übermitteltes Array ist dagegen ungültig.
if (isset($_GET["extra"]) && !is_string($_GET["extra"])) {
    $fehler[] = "Extra: Bitte nur einen einzelnen Textwert senden.";
} elseif ($extra !== "" && $extra !== "kaese" && $extra !== "pilze") {
    $fehler[] = "Extra: Erlaubt sind kaese, pilze oder eine leere Eingabe.";
} else {
    $gueltigeDaten["extra"] = $extra;
}

// 4. Nur gültige Werte und die gesammelten Fehlermeldungen zurückgeben.
if (!empty($fehler)) {
    $gueltigeDaten["fehler"] = implode(" ", $fehler);
    $parameter = http_build_query($gueltigeDaten, "", "&");

    // 303: Der Browser öffnet index.php danach mit GET.
    header("Location: index.php?" . $parameter, true, 303);
    exit;
}

// 5. Erst nach allen Prüfungen und möglichen Rückleitungen folgt die Ausgabe.
header("Content-Type: text/html; charset=UTF-8");
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ergebnis</title>
    <style>body { font-family: Arial, sans-serif; margin: 24px; line-height: 1.5; }</style>
</head>
<body>
    <h1>Ergebnis</h1>
<?php
$extraText = "Kein Extra";
if ($extra === "kaese") {
    $extraText = "Käse";
} elseif ($extra === "pilze") {
    $extraText = "Pilze";
}
echo "<p>Pizza: " . html($pizza) . "; Extra: " . html($extraText) . "</p>";
?>
    <p>Übung: Die Daten wurden nur geprüft und angezeigt.</p>
    <p><a href="index.php">Neue Eingabe</a></p>
</body>
</html>
