<?php
require __DIR__ . "/function.php";

$fehler = "";
$pizza = "";
$extra = "";

// Der Rücksprung ist ein neuer GET-Aufruf, auch nach einem POST-Formular.
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

if (isset($_GET["pizza"]) && is_string($_GET["pizza"])) {
    $pizza = $_GET["pizza"];
}

if (isset($_GET["extra"]) && is_string($_GET["extra"])) {
    $extra = $_GET["extra"];
}

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 09: Pizza: Eine Angabe ist freiwillig</title>
    <style>body { font-family: Arial, sans-serif; margin: 24px; line-height: 1.5; }</style>
</head>
<body>
    <h1>Aufgabe 09: Pizza: Eine Angabe ist freiwillig</h1>
    <?php if ($fehler !== "") : ?>
        <p role="alert"><strong>Fehler:</strong> <?= html($fehler) ?></p>
    <?php endif; ?>

    <!-- novalidate: Die PHP-Prüfung soll auch bei falschen Eingaben sichtbar werden. -->
    <form action="auswertung.php" method="get" novalidate autocomplete="off">
        <p>
            <label for="pizza">Pizza</label><br>
            <input type="text" id="pizza" name="pizza"
                   value="<?= html($pizza) ?>">
        </p>
        <p>
            <label for="extra">Extra (freiwillig)</label><br>
            <input type="text" id="extra" name="extra"
                   value="<?= html($extra) ?>">
            <small>Leer lassen oder kaese / pilze eingeben.</small>
        </p>
        <button type="submit">Prüfen</button>
    </form>
</body>
</html>
