<?php
require __DIR__ . "/function.php";

$fehler = "";
$von = "";
$bis = "";

// Der Rücksprung ist ein neuer GET-Aufruf, auch nach einem POST-Formular.
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

if (isset($_GET["von"]) && is_string($_GET["von"])) {
    $von = $_GET["von"];
}

if (isset($_GET["bis"]) && is_string($_GET["bis"])) {
    $bis = $_GET["bis"];
}

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 10: Druckbereich: Zwei Werte vergleichen</title>
    <style>body { font-family: Arial, sans-serif; margin: 24px; line-height: 1.5; }</style>
</head>
<body>
    <h1>Aufgabe 10: Druckbereich: Zwei Werte vergleichen</h1>
    <?php if ($fehler !== "") : ?>
        <p role="alert"><strong>Fehler:</strong> <?= html($fehler) ?></p>
    <?php endif; ?>

    <!-- novalidate: Die PHP-Prüfung soll auch bei falschen Eingaben sichtbar werden. -->
    <form action="auswertung.php" method="post" novalidate autocomplete="off">
        <p>
            <label for="von">Von Seite</label><br>
            <input type="text" id="von" name="von" inputmode="numeric"
                   value="<?= html($von) ?>">
            <small>Ganze Zahl von 1 bis 100.</small>
        </p>
        <p>
            <label for="bis">Bis Seite</label><br>
            <input type="text" id="bis" name="bis" inputmode="numeric"
                   value="<?= html($bis) ?>">
            <small>Ganze Zahl von 1 bis 100.</small>
        </p>
        <button type="submit">Prüfen</button>
    </form>
</body>
</html>
