<?php
require __DIR__ . "/function.php";

$fehler = "";
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

$hinweise = [];
$cookieAngekommen = false;

$anzahl = "10";
// TODO: Cookie PHP_c05_anzahl auf Vorhandensein, Texttyp und erlaubten Inhalt prüfen.
// TODO: Gültigen Wert in $anzahl übernehmen; sonst den Standard behalten.
// TODO: $cookieAngekommen bei gültigem Cookie auf true setzen.
// TODO: Bei vorhandenem, aber ungültigem Cookie einen Hinweis sammeln.

$form_anzahl = $anzahl;

// Fehlerformular: KEINE älteren Cookie-Werte in ungültige Felder einsetzen.
// Nur ausdrücklich zurückgegebene, erneut geprüfte Werte bleiben stehen.
if ($fehler !== "") {
    $form_anzahl = "";
    if (isset($_GET["anzahl"]) && is_string($_GET["anzahl"])) {
        $kandidat = $_GET["anzahl"];
        if (in_array($kandidat, ["5", "10", "20"], true)) {
            $form_anzahl = $kandidat;
        }
    }
}
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 05: Cookie-Werten nicht blind vertrauen</title>
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
    <h1>Aufgabe 05: Cookie-Werten nicht blind vertrauen</h1>
    <p>Auch gespeicherte Werte auf dem Server validieren</p>
    <p class="info"><strong>Startdateien:</strong> Bearbeite die TODO-Stellen. Das Merken ist noch nicht umgesetzt.</p>
    <?php if ($fehler !== "") : ?>
        <p class="fehler" role="alert"><strong>Fehler:</strong> <?= html($fehler) ?></p>
    <?php endif; ?>
    <?php foreach ($hinweise as $hinweis) : ?>
        <p role="status"><?= html($hinweis) ?></p>
    <?php endforeach; ?>
    <p class="info">Gültiges Cookie im aktuellen Request:
        <strong><?= $cookieAngekommen ? "Ja" : "Nein – Standard wird verwendet" ?></strong>
    </p>
    <p>Einträge pro Seite aus Cookie oder Standard: <strong><?= html($anzahl) ?></strong></p>
    <form action="auswertung.php" method="post" novalidate autocomplete="off">
        <p>
            <label for="anzahl">Einträge pro Seite</label><br>
            <select id="anzahl" name="anzahl">
                <option value="">Bitte wählen</option>
                <option value="5" <?= $form_anzahl === "5" ? "selected" : "" ?>>5</option>
                <option value="10" <?= $form_anzahl === "10" ? "selected" : "" ?>>10</option>
                <option value="20" <?= $form_anzahl === "20" ? "selected" : "" ?>>20</option>
            </select>
        </p>
        <button type="submit">Speichern</button>
    </form>
    <p><a href="index.php">Frisch öffnen – ohne URL-Parameter</a></p>
    <p><small>Lokale Übung ohne Login, Sessions oder Datenbank. Cookies enthalten nur Einstellungen.</small></p>
</body>
</html>
