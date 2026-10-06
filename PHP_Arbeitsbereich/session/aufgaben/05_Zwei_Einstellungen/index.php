<?php
require __DIR__ . "/function.php";

// TODO: Die konfigurierte Session vor jeder Ausgabe starten; einen Startfehler kontrolliert beenden.

// Bekannter Rückweg: In Aufgaben 1-7 kommen Formfehler noch über GET.
$fehler = [];
if (isset($_GET["fehler"]) && is_string($_GET["fehler"]) && $_GET["fehler"] !== "") {
    $fehler[] = $_GET["fehler"];
}
$sprache = "de";
$schrift = "normal";
// TODO: Das Session-Array einstellungen und seine beiden Werte getrennt prüfen und einlesen.
$form_sprache = $sprache;
$form_schrift = $schrift;

// Bei Formfehlern nur GÜLTIGE NEUE Eingaben verwenden, nicht ältere Session-Werte.
if (!empty($fehler)) {
    $form_sprache = "";
    if (isset($_GET["sprache"]) && is_string($_GET["sprache"])) {
        $form_sprache = $_GET["sprache"]; // Nur maskierte Anzeige, keine neue Speicherung.
    }
    $form_schrift = "";
    if (isset($_GET["schrift"]) && is_string($_GET["schrift"])) {
        $form_schrift = $_GET["schrift"]; // Nur maskierte Anzeige, keine neue Speicherung.
    }
}
?>
<!doctype html>
<html lang="de">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>05 Zwei Einstellungen gemeinsam merken</title><style>body { font-family: Arial, sans-serif; max-width: 880px; margin: 28px auto; padding: 0 18px; line-height: 1.55; }
input, select, button { font: inherit; padding: 6px 9px; } button { cursor: pointer; margin: 4px 6px 4px 0; }
label { font-weight: bold; } code { overflow-wrap: anywhere; } pre { padding: 14px; background: #f2f5f7; overflow: auto; }
a { text-underline-offset: 3px; } a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible { outline: 3px solid #b46c00; outline-offset: 3px; }
.fehler { border-left: 4px solid #9b2626; padding-left: 12px; } .info { background: #f2f5f7; padding: 12px; }
table { border-collapse: collapse; margin: 14px 0; } th, td { border: 1px solid #ccd5dd; padding: 8px 12px; text-align: left; }
small { color: #45576b; } .panels { display: grid; grid-template-columns: repeat(2,minmax(0,1fr)); gap: 14px; }
@media(max-width:650px) { .panels { display: block; } h1 { font-size: 26px; } }
</style></head>
<body>
<h1>05 Zwei Einstellungen gemeinsam merken</h1>
<p></p>
<p class="info"><strong>Startdatei:</strong> Bearbeite die TODO-Stellen. Die Session-Verarbeitung ist noch nicht fertig.</p>
<?php foreach ($fehler as $meldung) : ?>
    <p class="fehler" role="alert"><strong>Fehler:</strong> <?= html($meldung) ?></p>
<?php endforeach; ?>
<p>Gespeicherte Sprache: <strong data-state="Gespeicherte Sprache"><?= html($sprache) ?></strong></p>
<p>Gespeicherte Schrift: <strong data-state="Gespeicherte Schrift"><?= html($schrift) ?></strong></p>
<form action="auswertung.php" method="post" novalidate autocomplete="off">
<p><label for="sprache">Sprache</label><br>
<select id="sprache" name="sprache">
<option value="">Bitte wählen</option>
<option value="de" <?= $form_sprache === "de" ? "selected" : "" ?>>Deutsch</option>
<option value="en" <?= $form_sprache === "en" ? "selected" : "" ?>>Englisch</option>
 </select></p><p><label for="schrift">Schrift</label><br>
<select id="schrift" name="schrift">
<option value="">Bitte wählen</option>
<option value="normal" <?= $form_schrift === "normal" ? "selected" : "" ?>>Normal</option>
<option value="gross" <?= $form_schrift === "gross" ? "selected" : "" ?>>Groß</option>
 </select></p>
<button type="submit">Speichern</button>
</form>
<p><a href="index.php">Formular neu aufrufen</a></p>
<p><small>Lokale Session-Übung: nur erfundene Daten, keine Datenbank und keine echte Anmeldung.</small></p>
</body></html>
