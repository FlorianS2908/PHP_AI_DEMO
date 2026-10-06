<?php
require __DIR__ . "/function.php";

$fehler = "";
$artikel = "";
$bestand = "";

// Der Rücksprung ist ein neuer GET-Aufruf, auch nach einem POST-Formular.
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

if (isset($_GET["artikel"]) && is_string($_GET["artikel"])) {
    $artikel = $_GET["artikel"];
}

if (isset($_GET["bestand"]) && is_string($_GET["bestand"])) {
    $bestand = $_GET["bestand"];
}

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 06: Lagerbestand: Null ist erlaubt</title>
    <style>body { font-family: Arial, sans-serif; margin: 24px; line-height: 1.5; }</style>
</head>
<body>
    <h1>Aufgabe 06: Lagerbestand: Null ist erlaubt</h1>
    <?php if ($fehler !== "") : ?>
        <p role="alert"><strong>Fehler:</strong> <?= html($fehler) ?></p>
    <?php endif; ?>

    <!-- novalidate: Die PHP-Prüfung soll auch bei falschen Eingaben sichtbar werden. -->
    <form action="auswertung.php" method="post" novalidate autocomplete="off">
        <p>
            <label for="artikel">Artikel</label><br>
            <input type="text" id="artikel" name="artikel"
                   value="<?= html($artikel) ?>">
        </p>
        <p>
            <label for="bestand">Bestand</label><br>
            <input type="text" id="bestand" name="bestand" inputmode="numeric"
                   value="<?= html($bestand) ?>">
            <small>Ganze Zahl von 0 bis 50.</small>
        </p>
        <button type="submit">Prüfen</button>
    </form>
</body>
</html>
