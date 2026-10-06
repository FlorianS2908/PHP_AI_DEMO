<?php
require __DIR__ . "/function.php";

$fehler = "";
$thema = "";
$format = "";

// Der Rücksprung ist ein neuer GET-Aufruf, auch nach einem POST-Formular.
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

if (isset($_GET["thema"]) && is_string($_GET["thema"])) {
    $thema = $_GET["thema"];
}

if (isset($_GET["format"]) && is_string($_GET["format"])) {
    $format = $_GET["format"];
}

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 07: Kursfilter: Auswahl kontrollieren</title>
    <style>body { font-family: Arial, sans-serif; margin: 24px; line-height: 1.5; }</style>
</head>
<body>
    <h1>Aufgabe 07: Kursfilter: Auswahl kontrollieren</h1>
    <?php if ($fehler !== "") : ?>
        <p role="alert"><strong>Fehler:</strong> <?= html($fehler) ?></p>
    <?php endif; ?>

    <!-- novalidate: Die PHP-Prüfung soll auch bei falschen Eingaben sichtbar werden. -->
    <form action="auswertung.php" method="get" novalidate autocomplete="off">
        <p>
            <label for="thema">Thema</label><br>
            <input type="text" id="thema" name="thema"
                   value="<?= html($thema) ?>">
        </p>
        <p>
            <label for="format">Kursformat</label><br>
            <select id="format" name="format">
                <option value="">Bitte wählen</option>
                <option value="online" <?= $format === "online" ? "selected" : "" ?>>Online</option>
                <option value="praesenz" <?= $format === "praesenz" ? "selected" : "" ?>>Präsenz</option>
            </select>
        </p>
        <button type="submit">Prüfen</button>
    </form>
</body>
</html>
