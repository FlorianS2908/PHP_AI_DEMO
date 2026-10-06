<?php
require __DIR__ . "/function.php";

$von = "";
$bis = "";
$fehler = [];
$gueltigeDaten = [];

// 1. Die Methode muss zum Formular passen.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    $fehler[] = "Bitte das Formular mit POST absenden.";
}

// 2. Kein ungeprüfter Zugriff auf Formulardaten.
if (isset($_POST["von"]) && is_string($_POST["von"])) {
    $von = trim($_POST["von"]);
}

if (isset($_POST["bis"]) && is_string($_POST["bis"])) {
    $bis = trim($_POST["bis"]);
}

// 3. Alle Felder vollständig prüfen, bevor eine Rückleitung erfolgt.
if ($von === "") {
    $fehler[] = "Von Seite: Bitte ausfüllen.";
} elseif (!ctype_digit($von)) {
    $fehler[] = "Von Seite: Bitte eine ganze Zahl aus Ziffern eingeben.";
} elseif ((int) $von < 1 || (int) $von > 100) {
    $fehler[] = "Von Seite: Erlaubt sind 1 bis 100.";
} else {
    $gueltigeDaten["von"] = $von;
}

if ($bis === "") {
    $fehler[] = "Bis Seite: Bitte ausfüllen.";
} elseif (!ctype_digit($bis)) {
    $fehler[] = "Bis Seite: Bitte eine ganze Zahl aus Ziffern eingeben.";
} elseif ((int) $bis < 1 || (int) $bis > 100) {
    $fehler[] = "Bis Seite: Erlaubt sind 1 bis 100.";
} else {
    $gueltigeDaten["bis"] = $bis;
}

// Erst nach beiden Einzelprüfungen die Zahlen miteinander vergleichen.
if (isset($gueltigeDaten["von"]) && isset($gueltigeDaten["bis"])) {
    if ((int) $bis < (int) $von) {
        $fehler[] = "Bis Seite: Darf nicht kleiner als Von Seite sein.";
        unset($gueltigeDaten["bis"]);
    }
}

// 4. Derselbe Rücksprung wie bisher, diesmal in function.php.
if (!empty($fehler)) {
    zurueckZumFormular($gueltigeDaten, $fehler);
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
$seiten = (int) $bis - (int) $von + 1;
$einheit = $seiten === 1 ? "Seite" : "Seiten";
echo "<p>Bereich: " . html($von) . " bis " . html($bis) . "; " . $seiten . " " . $einheit . "</p>";
?>
    <p>Übung: Die Daten wurden nur geprüft und angezeigt.</p>
    <p><a href="index.php">Neue Eingabe</a></p>
</body>
</html>
