<?php
require __DIR__ . "/function.php";

$fehler = "";
$name = "";
$bestaetigt = "";

// Der Rücksprung ist ein neuer GET-Aufruf, auch nach einem POST-Formular.
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

if (isset($_GET["name"]) && is_string($_GET["name"])) {
    $name = $_GET["name"];
}

if (isset($_GET["bestaetigt"]) && is_string($_GET["bestaetigt"])) {
    $bestaetigt = $_GET["bestaetigt"];
}

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 08: Leihgerät: Empfang bestätigen</title>
    <style>body { font-family: Arial, sans-serif; margin: 24px; line-height: 1.5; }</style>
</head>
<body>
    <h1>Aufgabe 08: Leihgerät: Empfang bestätigen</h1>
    <?php if ($fehler !== "") : ?>
        <p role="alert"><strong>Fehler:</strong> <?= html($fehler) ?></p>
    <?php endif; ?>

    <!-- novalidate: Die PHP-Prüfung soll auch bei falschen Eingaben sichtbar werden. -->
    <form action="auswertung.php" method="post" novalidate autocomplete="off">
        <p>
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name"
                   value="<?= html($name) ?>">
        </p>
        <p>
            <label>
                <input type="checkbox" name="bestaetigt" value="ja" <?= $bestaetigt === "ja" ? "checked" : "" ?>>
                Ich habe das Gerät erhalten.
            </label>
        </p>
        <button type="submit">Prüfen</button>
    </form>
</body>
</html>
