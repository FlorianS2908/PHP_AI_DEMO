<?php
require __DIR__ . "/function.php";

$hinweise = [];
$cookieAngekommen = false;
$sprache = "de";
// TODO: Cookie PHP_c07_sprache auf Vorhandensein, Texttyp und erlaubten Inhalt prüfen.
// TODO: Gültigen Wert in $sprache übernehmen; sonst den Standard behalten.
// TODO: $cookieAngekommen bei gültigem Cookie auf true setzen.
// TODO: Bei vorhandenem, aber ungültigem Cookie einen Hinweis sammeln.

$begruessung = "";
// TODO: Aus der geprüften Sprache die passende Begrüßung ableiten.
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Begrüßung auf Seite 2</title>
    <style>body { font-family: Arial, sans-serif; max-width: 850px; margin: 28px auto; padding: 0 18px; line-height: 1.55; }
input, select, button { font: inherit; padding: 6px 9px; }
button { cursor: pointer; margin: 4px 4px 4px 0; }
fieldset { margin: 18px 0; }
code { overflow-wrap: anywhere; }
a { text-underline-offset: 3px; }
.fehler { border-left: 4px solid #9b2626; padding-left: 12px; }
.info { background: #f2f5f7; padding: 12px; }
body.dunkel { background: #202936; color: #f5f7fa; }
body.dunkel a { color: #b8d8ff; } body.dunkel .info { background: #344155; }
body.gross { font-size: 21px; }
</style>
</head>
<body>
    <h1>Begrüßung auf Seite 2</h1>
    <p>Cookie im aktuellen Request: <strong><?= $cookieAngekommen ? "Ja" : "Nein – Standard" ?></strong></p>
    <?php foreach ($hinweise as $hinweis) : ?>
        <p><?= html($hinweis) ?></p>
    <?php endforeach; ?>
    <p>Begrüßung: <strong><?= html($begruessung) ?></strong></p>
    <p><a href="index.php">Zum Formular</a></p>
</body>
</html>
