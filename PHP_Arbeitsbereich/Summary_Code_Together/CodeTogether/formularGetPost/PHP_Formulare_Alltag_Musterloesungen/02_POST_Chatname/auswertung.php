<?php
require __DIR__ . "/function.php";

$alias = "";
$fehler = [];
$gueltigeDaten = [];

// 1. Die Methode muss zum Formular passen.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $fehler[] = "Bitte das Formular mit POST absenden.";
}

// 2. Kein ungeprüfter Zugriff auf Formulardaten.
if (isset($_POST["alias"]) && is_string($_POST["alias"])) {
    $alias = trim($_POST["alias"]);
}

// 3. Alle Felder vollständig prüfen, bevor eine Rückleitung erfolgt.
if ($alias === "") {
    $fehler[] = "Chatname: Bitte ausfüllen.";
} else {
    $gueltigeDaten["alias"] = $alias;
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
echo "<p>Chatname: " . html($alias) . "</p>";
?>
    <p>Übung: Die Daten wurden nur geprüft und angezeigt.</p>
    <p><a href="index.php">Neue Eingabe</a></p>
</body>
</html>
