<?php
require __DIR__ . "/../function.php";

$hinweise = [];
$cookieAngekommen = false;
$sortierung = "titel";
// TODO: Cookie PHP_c08_sortierung auf Vorhandensein, Texttyp und erlaubten Inhalt prüfen.
// TODO: Gültigen Wert in $sortierung übernehmen; sonst den Standard behalten.
// TODO: $cookieAngekommen bei gültigem Cookie auf true setzen.
// TODO: Bei vorhandenem, aber ungültigem Cookie einen Hinweis sammeln.
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sortierung im Bereich</title>
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
    <h1>Sortierung im Bereich</h1>
    <p>Cookie im aktuellen Request: <strong><?= $cookieAngekommen ? "Ja" : "Nein – Standard" ?></strong></p>
    <?php foreach ($hinweise as $hinweis) : ?>
        <p><?= html($hinweis) ?></p>
    <?php endforeach; ?>
    <p>Sortierung: <strong><?= html($sortierung) ?></strong></p>
    <form action="../auswertung.php" method="post">
        <button type="submit" name="aktion" value="loeschen">Bereichs-Cookie löschen</button>
    </form>
    <p><a href="../index.php">Zum Formular</a></p>
</body>
</html>
