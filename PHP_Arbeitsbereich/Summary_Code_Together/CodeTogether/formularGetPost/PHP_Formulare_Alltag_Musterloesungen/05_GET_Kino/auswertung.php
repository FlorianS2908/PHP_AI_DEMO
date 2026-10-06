<?php
require __DIR__ . "/function.php";

$film = "";
$karten = "";
$fehler = [];
$gueltigeDaten = [];

// 1. Die Methode muss zum Formular passen.
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    $fehler[] = "Bitte das Formular mit GET absenden.";
}

// 2. Kein ungeprüfter Zugriff auf Formulardaten.
if (isset($_GET["film"]) && is_string($_GET["film"])) {
    $film = trim($_GET["film"]);
}

if (isset($_GET["karten"]) && is_string($_GET["karten"])) {
    $karten = trim($_GET["karten"]);
}

// 3. Alle Felder vollständig prüfen, bevor eine Rückleitung erfolgt.
if ($film === "") {
    $fehler[] = "Film: Bitte ausfüllen.";
} else {
    $gueltigeDaten["film"] = $film;
}

if ($karten === "") {
    $fehler[] = "Anzahl Karten: Bitte ausfüllen.";
} elseif (!ctype_digit($karten)) {
    $fehler[] = "Anzahl Karten: Bitte eine ganze Zahl aus Ziffern eingeben.";
} elseif ((int) $karten < 1 || (int) $karten > 6) {
    $fehler[] = "Anzahl Karten: Erlaubt sind 1 bis 6.";
} else {
    $gueltigeDaten["karten"] = $karten;
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
echo "<p>Film: " . html($film) . "; Karten: " . html($karten) . "</p>";
?>
    <p>Übung: Die Daten wurden nur geprüft und angezeigt.</p>
    <p><a href="index.php">Neue Eingabe</a></p>
</body>
</html>
