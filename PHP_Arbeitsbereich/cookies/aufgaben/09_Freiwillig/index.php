<?php
require __DIR__ . "/function.php";

$fehler = "";
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

$hinweise = [];
$cookieAngekommen = false;

$startbereich = "kurse";
// TODO: Cookie PHP_c09_startbereich auf Vorhandensein, Texttyp und erlaubten Inhalt prüfen.
// TODO: Gültigen Wert in $startbereich übernehmen; sonst den Standard behalten.
// TODO: $cookieAngekommen bei gültigem Cookie auf true setzen.
// TODO: Bei vorhandenem, aber ungültigem Cookie einen Hinweis sammeln.

$vorschau = $startbereich;
// Nur für die flüchtige Vorschau nach einem gültigen POST ohne Merken.
if (isset($_GET["vorschau"]) && is_string($_GET["vorschau"])) {
    if (in_array($_GET["vorschau"], ["kurse", "termine"], true)) {
        $vorschau = $_GET["vorschau"];
    }
}
$merken = $cookieAngekommen;
if (isset($_GET["vorschau"])) {
    $merken = false;
}
$form_startbereich = $vorschau;

// Fehlerformular: KEINE älteren Cookie-Werte in ungültige Felder einsetzen.
// Nur ausdrücklich zurückgegebene, erneut geprüfte Werte bleiben stehen.
if ($fehler !== "") {
    $form_startbereich = "";
    if (isset($_GET["startbereich"]) && is_string($_GET["startbereich"])) {
        $kandidat = $_GET["startbereich"];
        if (in_array($kandidat, ["kurse", "termine"], true)) {
            $form_startbereich = $kandidat;
        }
    }
    $merken = isset($_GET["merken"]) && is_string($_GET["merken"]) && $_GET["merken"] === "ja";
}
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 09: Nur auf Wunsch merken</title>
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
    <h1>Aufgabe 09: Nur auf Wunsch merken</h1>
    <p>Checkbox, Vorschau und dauerhafte Auswahl trennen</p>
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
    <p>Startbereich aus Cookie oder Standard: <strong><?= html($startbereich) ?></strong></p>
    <p>Aktuelle Vorschau: <strong><?= html($vorschau) ?></strong></p>
    <form action="auswertung.php" method="post" novalidate autocomplete="off">
        <p>
            <label for="startbereich">Startbereich</label><br>
            <select id="startbereich" name="startbereich">
                <option value="">Bitte wählen</option>
                <option value="kurse" <?= $form_startbereich === "kurse" ? "selected" : "" ?>>Kurse</option>
                <option value="termine" <?= $form_startbereich === "termine" ? "selected" : "" ?>>Termine</option>
            </select>
        </p>
        <p><label><input type="checkbox" name="merken" value="ja" <?= $merken ? "checked" : "" ?>> Auswahl für einen Tag merken</label></p>
        <button type="submit">Speichern</button>
    </form>
    <p><a href="index.php">Frisch öffnen – ohne URL-Parameter</a></p>
    <p><small>Lokale Übung ohne Login, Sessions oder Datenbank. Cookies enthalten nur Einstellungen.</small></p>
</body>
</html>
