<?php
require __DIR__ . "/function.php";

// TODO: Die konfigurierte Session vor jeder Ausgabe starten; einen Startfehler kontrolliert beenden.

$fehler = [];
$alteDaten = [];
// TODO: Fehler und gültige Formwerte aus der Session auslesen und danach als Einmal-Daten entfernen.
$artikel = "";
$anzahl = "";
// TODO: Eine gespeicherte Vormerkung als Array lesen; Artikel als Text und Anzahl als int von 0 bis 9 prüfen.
$form_artikel = $artikel;
$form_anzahl = $anzahl;

// Fehlerformular: Nur gültige Werte des letzten Versuchs einsetzen.
if (!empty($fehler)) {
    $form_artikel = "";
    if (isset($alteDaten["artikel"]) && is_string($alteDaten["artikel"])) {
        $form_artikel = $alteDaten["artikel"];
    }
    $form_anzahl = "";
    if (isset($alteDaten["anzahl"]) && is_string($alteDaten["anzahl"])) {
        $form_anzahl = $alteDaten["anzahl"];
    }
}
?>
<!doctype html>
<html lang="de">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>08 Fehler und gültige Eingaben zurückgeben</title><style>body { font-family: Arial, sans-serif; max-width: 880px; margin: 28px auto; padding: 0 18px; line-height: 1.55; }
input, select, button { font: inherit; padding: 6px 9px; } button { cursor: pointer; margin: 4px 6px 4px 0; }
label { font-weight: bold; } code { overflow-wrap: anywhere; } pre { padding: 14px; background: #f2f5f7; overflow: auto; }
a { text-underline-offset: 3px; } a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible { outline: 3px solid #b46c00; outline-offset: 3px; }
.fehler { border-left: 4px solid #9b2626; padding-left: 12px; } .info { background: #f2f5f7; padding: 12px; }
table { border-collapse: collapse; margin: 14px 0; } th, td { border: 1px solid #ccd5dd; padding: 8px 12px; text-align: left; }
small { color: #45576b; } .panels { display: grid; grid-template-columns: repeat(2,minmax(0,1fr)); gap: 14px; }
@media(max-width:650px) { .panels { display: block; } h1 { font-size: 26px; } }
</style></head>
<body>
<h1>08 Fehler und gültige Eingaben zurückgeben</h1>
<p></p>
<p class="info"><strong>Startdatei:</strong> Bearbeite die TODO-Stellen. Die Session-Verarbeitung ist noch nicht fertig.</p>
<?php foreach ($fehler as $meldung) : ?>
    <p class="fehler" role="alert"><strong>Fehler:</strong> <?= html($meldung) ?></p>
<?php endforeach; ?>
<p>Gespeicherter Artikel: <strong data-state="Gespeicherter Artikel"><?= html($artikel === "" ? "Keine Vormerkung" : $artikel) ?></strong></p>
<p>Gespeicherte Anzahl: <strong data-state="Gespeicherte Anzahl"><?= html($anzahl) ?></strong></p>
<form action="auswertung.php" method="post" novalidate autocomplete="off">
<p><label for="artikel">Artikel</label><br>
<input type="text" id="artikel" name="artikel" value="<?= html($form_artikel) ?>"></p><p><label for="anzahl">Anzahl (0 bis 9)</label><br>
<input type="text" id="anzahl" name="anzahl" value="<?= html($form_anzahl) ?>"></p>
<button type="submit">Speichern</button>
</form>
<p><a href="index.php">Formular neu aufrufen</a></p>
<p><small>Lokale Session-Übung: nur erfundene Daten, keine Datenbank und keine echte Anmeldung.</small></p>
</body></html>
