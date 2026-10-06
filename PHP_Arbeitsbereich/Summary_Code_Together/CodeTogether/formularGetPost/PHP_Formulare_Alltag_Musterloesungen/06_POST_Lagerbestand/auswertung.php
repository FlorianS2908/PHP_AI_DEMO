<?php
require __DIR__ . "/function.php";

$artikel = "";
$bestand = "";
$fehler = [];
$gueltigeDaten = [];

// 1. Die Methode muss zum Formular passen.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $fehler[] = "Bitte das Formular mit POST absenden.";
}

// 2. Kein ungeprüfter Zugriff auf Formulardaten.
if (isset($_POST["artikel"]) && is_string($_POST["artikel"])) {
    $artikel = trim($_POST["artikel"]);
}

if (isset($_POST["bestand"]) && is_string($_POST["bestand"])) {
    $bestand = trim($_POST["bestand"]);
}

// 3. Alle Felder vollständig prüfen, bevor eine Rückleitung erfolgt.
// Nicht empty($bestand) verwenden: Der String "0" ist hier ausdrücklich gültig.
if ($artikel === "") {
    $fehler[] = "Artikel: Bitte ausfüllen.";
} else {
    $gueltigeDaten["artikel"] = $artikel;
}

if ($bestand === "") {
    $fehler[] = "Bestand: Bitte ausfüllen.";
} elseif (!ctype_digit($bestand)) {
    $fehler[] = "Bestand: Bitte eine ganze Zahl aus Ziffern eingeben.";
} elseif ((int) $bestand < 0 || (int) $bestand > 50) {
    $fehler[] = "Bestand: Erlaubt sind 0 bis 50.";
} else {
    $gueltigeDaten["bestand"] = $bestand;
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
echo "<p>Artikel: " . html($artikel) . "; Bestand: " . html($bestand) . "</p>";
?>
    <p>Übung: Die Daten wurden nur geprüft und angezeigt.</p>
    <p><a href="index.php">Neue Eingabe</a></p>
</body>
</html>
