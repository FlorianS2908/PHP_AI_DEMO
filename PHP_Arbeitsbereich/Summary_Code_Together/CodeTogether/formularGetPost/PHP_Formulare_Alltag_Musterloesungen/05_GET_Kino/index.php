<?php
require __DIR__ . "/function.php";

$fehler = "";
$film = "";
$karten = "";

// Der Rücksprung ist ein neuer GET-Aufruf, auch nach einem POST-Formular.
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

if (isset($_GET["film"]) && is_string($_GET["film"])) {
    $film = $_GET["film"];
}

if (isset($_GET["karten"]) && is_string($_GET["karten"])) {
    $karten = $_GET["karten"];
}

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 05: Kino: Kartenwunsch prüfen</title>
    <style>body { font-family: Arial, sans-serif; margin: 24px; line-height: 1.5; }</style>
</head>
<body>
    <h1>Aufgabe 05: Kino: Kartenwunsch prüfen</h1>
    <?php if ($fehler !== "") : ?>
        <p role="alert"><strong>Fehler:</strong> <?= html($fehler) ?></p>
    <?php endif; ?>

    <!-- novalidate: Die PHP-Prüfung soll auch bei falschen Eingaben sichtbar werden. -->
    <form action="auswertung.php" method="get" novalidate autocomplete="off">
        <p>
            <label for="film">Film</label><br>
            <input type="text" id="film" name="film"
                   value="<?= html($film) ?>">
        </p>
        <p>
            <label for="karten">Anzahl Karten</label><br>
            <input type="text" id="karten" name="karten" inputmode="numeric"
                   value="<?= html($karten) ?>">
            <small>Ganze Zahl von 1 bis 6.</small>
        </p>
        <button type="submit">Prüfen</button>
    </form>
</body>
</html>
