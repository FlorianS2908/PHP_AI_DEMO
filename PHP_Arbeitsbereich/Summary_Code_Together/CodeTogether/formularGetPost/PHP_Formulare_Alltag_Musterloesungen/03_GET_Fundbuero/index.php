<?php
require __DIR__ . "/function.php";

$fehler = "";
$gegenstand = "";
$farbe = "";

// Der Rücksprung ist ein neuer GET-Aufruf, auch nach einem POST-Formular.
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

if (isset($_GET["gegenstand"]) && is_string($_GET["gegenstand"])) {
    $gegenstand = $_GET["gegenstand"];
}

if (isset($_GET["farbe"]) && is_string($_GET["farbe"])) {
    $farbe = $_GET["farbe"];
}

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 03: Fundbüro</title>
    <style>body { font-family: Arial, sans-serif; margin: 24px; line-height: 1.5; }</style>
</head>
<body>
    <h1>Aufgabe 03: Fundbüro</h1>
    <?php if ($fehler !== "") : ?>
        <p role="alert"><strong>Fehler:</strong> <?= html($fehler) ?></p>
    <?php endif; ?>

    <!-- novalidate: Die PHP-Prüfung soll auch bei falschen Eingaben sichtbar werden. -->
    <form action="auswertung.php" method="get" novalidate autocomplete="off">
        <p>
            <label for="gegenstand">Gegenstand</label><br>
            <input type="text" id="gegenstand" name="gegenstand"
                   value="<?= html($gegenstand) ?>">
        </p>
        <p>
            <label for="farbe">Farbe</label><br>
            <input type="text" id="farbe" name="farbe"
                   value="<?= html($farbe) ?>">
        </p>
        <button type="submit">Prüfen</button>
    </form>
</body>
</html>
