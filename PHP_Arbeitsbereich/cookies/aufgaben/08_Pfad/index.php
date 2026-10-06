<?php
require __DIR__ . "/function.php";

$fehler = "";
if (isset($_GET["fehler"]) && is_string($_GET["fehler"])) {
    $fehler = $_GET["fehler"];
}

$hinweise = [];
$cookieAngekommen = false;

$sortierung = "titel";
// TODO: Cookie PHP_c08_sortierung auf Vorhandensein, Texttyp und erlaubten Inhalt prüfen.
// TODO: Gültigen Wert in $sortierung übernehmen; sonst den Standard behalten.
// TODO: $cookieAngekommen bei gültigem Cookie auf true setzen.
// TODO: Bei vorhandenem, aber ungültigem Cookie einen Hinweis sammeln.

$form_sortierung = $sortierung;

// Fehlerformular: KEINE älteren Cookie-Werte in ungültige Felder einsetzen.
// Nur ausdrücklich zurückgegebene, erneut geprüfte Werte bleiben stehen.
if ($fehler !== "") {
    $form_sortierung = "";
    if (isset($_GET["sortierung"]) && is_string($_GET["sortierung"])) {
        $kandidat = $_GET["sortierung"];
        if (in_array($kandidat, ["titel", "datum"], true)) {
            $form_sortierung = $kandidat;
        }
    }
}
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aufgabe 08: Den Cookie-Pfad eingrenzen</title>
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
    <h1>Aufgabe 08: Den Cookie-Pfad eingrenzen</h1>
    <p>Ein URL-Pfad ist kein Dateisystempfad</p>
    <p class="info"><strong>Startdateien:</strong> Bearbeite die TODO-Stellen. Das Merken ist noch nicht umgesetzt.</p>
    <?php if ($fehler !== "") : ?>
        <p class="fehler" role="alert"><strong>Fehler:</strong> <?= html($fehler) ?></p>
    <?php endif; ?>
    <?php foreach ($hinweise as $hinweis) : ?>
        <p role="status"><?= html($hinweis) ?></p>
    <?php endforeach; ?>
    <p class="info">Im Request dieser übergeordneten Seite:
        <?= $cookieAngekommen ? "Cookie angekommen (Pfad prüfen!)." : "Kein gültiges Bereichs-Cookie – das ist hier beabsichtigt." ?>
    </p>
    <p>Der gespeicherte Wert wird nur auf <a href="bereich/anzeige.php">bereich/anzeige.php</a> ausgelesen.</p>
    <form action="auswertung.php" method="post" novalidate autocomplete="off">
        <p>
            <label for="sortierung">Sortierung</label><br>
            <select id="sortierung" name="sortierung">
                <option value="">Bitte wählen</option>
                <option value="titel" <?= $form_sortierung === "titel" ? "selected" : "" ?>>Titel</option>
                <option value="datum" <?= $form_sortierung === "datum" ? "selected" : "" ?>>Datum</option>
            </select>
        </p>
        <button type="submit" name="aktion" value="speichern">Speichern</button>
        <button type="submit" name="aktion" value="loeschen">Cookie löschen</button>
    </form>
    <p><a href="index.php">Frisch öffnen – ohne URL-Parameter</a></p>
    <p><small>Lokale Übung ohne Login, Sessions oder Datenbank. Cookies enthalten nur Einstellungen.</small></p>
</body>
</html>
