<?php
require __DIR__ . "/function.php";

$name = "";
$email = "";
$fehler = [];
$gueltigeDaten = [];

// 1. Die Methode muss zum Formular passen.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $fehler[] = "Bitte das Formular mit POST absenden.";
}

// 2. Kein ungeprüfter Zugriff auf Formulardaten.
if (isset($_POST["name"]) && is_string($_POST["name"])) {
    $name = trim($_POST["name"]);
}

if (isset($_POST["email"]) && is_string($_POST["email"])) {
    $email = trim($_POST["email"]);
}

// 3. Alle Felder vollständig prüfen, bevor eine Rückleitung erfolgt.
if ($name === "") {
    $fehler[] = "Name: Bitte ausfüllen.";
} else {
    $gueltigeDaten["name"] = $name;
}

if ($email === "") {
    $fehler[] = "E-Mail-Adresse: Bitte ausfüllen.";
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    $fehler[] = "E-Mail-Adresse: Bitte eine gültige Adresse eingeben.";
} else {
    $gueltigeDaten["email"] = $email;
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
echo "<p>Name: " . html($name) . "; E-Mail: " . html($email) . "</p>";
?>
    <p>Übung: Die Daten wurden nur geprüft und angezeigt.</p>
    <p><a href="index.php">Neue Eingabe</a></p>
</body>
</html>
