<?php
require __DIR__ . "/function.php";

if (!session_start()) {
    http_response_code(500);
    exit("Die Session konnte nicht gestartet werden. Prüfe die PHP-Konfiguration.");
}

$fehler = [];
$alteDaten = [];
if (isset($_SESSION["fehler"]) && is_array($_SESSION["fehler"])) {
    foreach ($_SESSION["fehler"] as $meldung) {
        if (is_string($meldung)) {
            $fehler[] = $meldung;
        }
    }
}
if (isset($_SESSION["alte_daten"]) && is_array($_SESSION["alte_daten"])) {
    $alteDaten = $_SESSION["alte_daten"];
}
unset($_SESSION["fehler"], $_SESSION["alte_daten"]);
$alias = "";
$sprache = "de";
if (isset($_SESSION["profil"]) && is_array($_SESSION["profil"])) {
    $profil = $_SESSION["profil"];
    if (isset($profil["alias"]) && is_string($profil["alias"])) { $alias = $profil["alias"]; }
    if (isset($profil["sprache"]) && is_string($profil["sprache"]) && in_array($profil["sprache"], ["de", "en"], true)) {
        $sprache = $profil["sprache"];
    }
}
$erfolg = "";
if (isset($_SESSION["meldung"]) && is_string($_SESSION["meldung"])) {
    $erfolg = $_SESSION["meldung"];
}
unset($_SESSION["meldung"]);
$form_alias = $alias;
$form_sprache = $sprache;

// Fehlerformular: Nur gültige Werte des letzten Versuchs einsetzen.
if (!empty($fehler)) {
    $form_alias = "";
    if (isset($alteDaten["alias"]) && is_string($alteDaten["alias"])) {
        $form_alias = $alteDaten["alias"];
    }
    $form_sprache = "";
    if (isset($alteDaten["sprache"]) && is_string($alteDaten["sprache"])) {
        $form_sprache = $alteDaten["sprache"];
    }
}
?>
<!doctype html>
<html lang="de">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Session-Formular: kleines Profil</title><style>body { font-family: Arial, sans-serif; max-width: 880px; margin: 28px auto; padding: 0 18px; line-height: 1.55; }
input, select, button { font: inherit; padding: 6px 9px; } button { cursor: pointer; margin: 4px 6px 4px 0; }
label { font-weight: bold; } code { overflow-wrap: anywhere; } pre { padding: 14px; background: #f2f5f7; overflow: auto; }
a { text-underline-offset: 3px; } a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible { outline: 3px solid #b46c00; outline-offset: 3px; }
.fehler { border-left: 4px solid #9b2626; padding-left: 12px; } .info { background: #f2f5f7; padding: 12px; }
table { border-collapse: collapse; margin: 14px 0; } th, td { border: 1px solid #ccd5dd; padding: 8px 12px; text-align: left; }
small { color: #45576b; } .panels { display: grid; grid-template-columns: repeat(2,minmax(0,1fr)); gap: 14px; }
@media(max-width:650px) { .panels { display: block; } h1 { font-size: 26px; } }
</style></head>
<body>
<h1>Session-Formular: kleines Profil</h1>
<p></p>

<?php foreach ($fehler as $meldung) : ?>
    <p class="fehler" role="alert"><strong>Fehler:</strong> <?= html($meldung) ?></p>
<?php endforeach; ?>
<p class="info">Daten prüfen → Session aktualisieren → 303 → neuer GET. Fehler und gültige Formwerte kommen ebenfalls über die Session zurück.</p>
<?php if ($erfolg !== "") : ?><p role="status"><?= html($erfolg) ?></p><?php endif; ?>
<p>Gespeicherter Alias: <strong data-state="Gespeicherter Alias"><?= html($alias === "" ? "Noch keiner" : $alias) ?></strong></p>
<p>Gespeicherte Sprache: <strong data-state="Gespeicherte Sprache"><?= html($sprache) ?></strong></p>
<form action="auswertung.php" method="post" novalidate autocomplete="off">
<p><label for="alias">Erfundener Alias</label><br>
<input type="text" id="alias" name="alias" value="<?= html($form_alias) ?>"></p><p><label for="sprache">Sprache</label><br>
<select id="sprache" name="sprache">
<option value="">Bitte wählen</option>
<option value="de" <?= $form_sprache === "de" ? "selected" : "" ?>>Deutsch</option>
<option value="en" <?= $form_sprache === "en" ? "selected" : "" ?>>Englisch</option>
 </select></p>
<button name="aktion" value="speichern">Profil merken</button><button name="aktion" value="entfernen">Profil entfernen</button>
</form>
<p><a href="index.php">Formular neu aufrufen</a></p><p><a href="anzeige.php">Zweite Seite: aus der Session lesen</a></p>
<p><small>Lokale Session-Übung: nur erfundene Daten, keine Datenbank und keine echte Anmeldung.</small></p>
</body></html>
