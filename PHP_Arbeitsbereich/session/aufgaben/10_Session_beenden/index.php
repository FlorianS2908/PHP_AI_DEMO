<?php
require __DIR__ . "/function.php";

// TODO: Die konfigurierte Session vor jeder Ausgabe starten; einen Startfehler kontrolliert beenden.

$fehler = [];
$alteDaten = [];
// TODO: Fehler und gültige Formwerte aus der Session auslesen und danach als Einmal-Daten entfernen.
$alias = "";
// TODO: Den Session-Eintrag alias vor dem Lesen prüfen; bei gültigem Inhalt in $alias übernehmen.
$format = "kompakt";
// TODO: Den Session-Eintrag format vor dem Lesen prüfen; bei gültigem Inhalt in $format übernehmen.
$form_alias = $alias;
$form_format = $format;

// Fehlerformular: Nur gültige Werte des letzten Versuchs einsetzen.
if (!empty($fehler)) {
    $form_alias = "";
    if (isset($alteDaten["alias"]) && is_string($alteDaten["alias"])) {
        $form_alias = $alteDaten["alias"];
    }
    $form_format = "";
    if (isset($alteDaten["format"]) && is_string($alteDaten["format"])) {
        $form_format = $alteDaten["format"];
    }
}
?>
<!doctype html>
<html lang="de">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>10 Die gesamte Übungs-Session beenden</title><style>body { font-family: Arial, sans-serif; max-width: 880px; margin: 28px auto; padding: 0 18px; line-height: 1.55; }
input, select, button { font: inherit; padding: 6px 9px; } button { cursor: pointer; margin: 4px 6px 4px 0; }
label { font-weight: bold; } code { overflow-wrap: anywhere; } pre { padding: 14px; background: #f2f5f7; overflow: auto; }
a { text-underline-offset: 3px; } a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible { outline: 3px solid #b46c00; outline-offset: 3px; }
.fehler { border-left: 4px solid #9b2626; padding-left: 12px; } .info { background: #f2f5f7; padding: 12px; }
table { border-collapse: collapse; margin: 14px 0; } th, td { border: 1px solid #ccd5dd; padding: 8px 12px; text-align: left; }
small { color: #45576b; } .panels { display: grid; grid-template-columns: repeat(2,minmax(0,1fr)); gap: 14px; }
@media(max-width:650px) { .panels { display: block; } h1 { font-size: 26px; } }
</style></head>
<body>
<h1>10 Die gesamte Übungs-Session beenden</h1>
<p></p>
<p class="info"><strong>Startdatei:</strong> Bearbeite die TODO-Stellen. Die Session-Verarbeitung ist noch nicht fertig.</p>
<?php foreach ($fehler as $meldung) : ?>
    <p class="fehler" role="alert"><strong>Fehler:</strong> <?= html($meldung) ?></p>
<?php endforeach; ?>
<p>Gespeicherter Alias: <strong data-state="Gespeicherter Alias"><?= html($alias === "" ? "Keiner" : $alias) ?></strong></p>
<p>Gespeichertes Format: <strong data-state="Gespeichertes Format"><?= html($format) ?></strong></p>
<form action="auswertung.php" method="post" novalidate autocomplete="off">
<p><label for="alias">Alias</label><br>
<input type="text" id="alias" name="alias" value="<?= html($form_alias) ?>"></p><p><label for="format">Format</label><br>
<select id="format" name="format">
<option value="">Bitte wählen</option>
<option value="kompakt" <?= $form_format === "kompakt" ? "selected" : "" ?>>Kompakt</option>
<option value="gross" <?= $form_format === "gross" ? "selected" : "" ?>>Groß</option>
 </select></p>
<button name="aktion" value="speichern">Speichern</button><button name="aktion" value="beenden">Session beenden</button>
</form>
<p><a href="index.php">Formular neu aufrufen</a></p>
<p><small>Lokale Session-Übung: nur erfundene Daten, keine Datenbank und keine echte Anmeldung.</small></p>
</body></html>
