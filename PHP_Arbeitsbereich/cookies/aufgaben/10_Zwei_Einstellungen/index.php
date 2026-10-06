<?php
require __DIR__ . "/function.php";

$fehler = "";
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

$hinweise = [];
$cookieAngekommen = false;

$sprache = "de";
// TODO: Cookie PHP_c10_sprache auf Vorhandensein, Texttyp und erlaubten Inhalt prüfen.
// TODO: Gültigen Wert in $sprache übernehmen; sonst den Standard behalten.
// TODO: $cookieAngekommen bei gültigem Cookie auf true setzen.
// TODO: Bei vorhandenem, aber ungültigem Cookie einen Hinweis sammeln.

$darstellung = "kompakt";
// TODO: Cookie PHP_c10_darstellung auf Vorhandensein, Texttyp und erlaubten Inhalt prüfen.
// TODO: Gültigen Wert in $darstellung übernehmen; sonst den Standard behalten.
// TODO: $cookieAngekommen bei gültigem Cookie auf true setzen.
// TODO: Bei vorhandenem, aber ungültigem Cookie einen Hinweis sammeln.

$form_sprache = $sprache;
$form_darstellung = $darstellung;

// Fehlerformular: KEINE älteren Cookie-Werte in ungültige Felder einsetzen.
// Nur ausdrücklich zurückgegebene, erneut geprüfte Werte bleiben stehen.
if ($fehler !== "") {
    $form_sprache = "";
    if (isset($_GET["sprache"]) && is_string($_GET["sprache"])) {
        $kandidat = $_GET["sprache"];
        if (in_array($kandidat, ["de", "en"], true)) {
            $form_sprache = $kandidat;
        }
    }
    $form_darstellung = "";
    if (isset($_GET["darstellung"]) && is_string($_GET["darstellung"])) {
        $kandidat = $_GET["darstellung"];
        if (in_array($kandidat, ["kompakt", "ausfuehrlich"], true)) {
            $form_darstellung = $kandidat;
        }
    }
}
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 10: Zwei Einstellungen gemeinsam speichern</title>
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
    <h1>Aufgabe 10: Zwei Einstellungen gemeinsam speichern</h1>
    <p>Alles prüfen, dann Cookies setzen</p>
    <p class="info"><strong>Startdateien:</strong> Bearbeite die TODO-Stellen. Das Merken ist noch nicht umgesetzt.</p>
    <?php if ($fehler !== "") : ?>
        <p class="fehler" role="alert"><strong>Fehler:</strong> <?= html($fehler) ?></p>
    <?php endif; ?>
    <?php foreach ($hinweise as $hinweis) : ?>
        <p role="status"><?= html($hinweis) ?></p>
    <?php endforeach; ?>
    <p class="info">Mindestens ein gültiges Cookie im aktuellen Request:
        <strong><?= $cookieAngekommen ? "Ja" : "Nein – Standard wird verwendet" ?></strong>
    </p>
    <p>Sprache aus Cookie oder Standard: <strong><?= html($sprache) ?></strong></p>
    <p>Darstellung aus Cookie oder Standard: <strong><?= html($darstellung) ?></strong></p>
    <form action="auswertung.php" method="post" novalidate autocomplete="off">
        <p>
            <label for="sprache">Sprache</label><br>
            <select id="sprache" name="sprache">
                <option value="">Bitte wählen</option>
                <option value="de" <?= $form_sprache === "de" ? "selected" : "" ?>>Deutsch</option>
                <option value="en" <?= $form_sprache === "en" ? "selected" : "" ?>>Englisch</option>
            </select>
        </p>
        <p>
            <label for="darstellung">Darstellung</label><br>
            <select id="darstellung" name="darstellung">
                <option value="">Bitte wählen</option>
                <option value="kompakt" <?= $form_darstellung === "kompakt" ? "selected" : "" ?>>Kompakt</option>
                <option value="ausfuehrlich" <?= $form_darstellung === "ausfuehrlich" ? "selected" : "" ?>>Ausführlich</option>
            </select>
        </p>
        <button type="submit">Speichern</button>
    </form>
    <p><a href="index.php">Frisch öffnen – ohne URL-Parameter</a></p>
    <p><small>Lokale Übung ohne Login, Sessions oder Datenbank. Cookies enthalten nur Einstellungen.</small></p>
</body>
</html>
