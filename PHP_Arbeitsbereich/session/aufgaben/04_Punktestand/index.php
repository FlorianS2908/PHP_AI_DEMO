<?php
require __DIR__ . "/function.php";

// TODO: Die konfigurierte Session vor jeder Ausgabe starten; einen Startfehler kontrolliert beenden.

// Bekannter Rückweg: In Aufgaben 1-7 kommen Formfehler noch über GET.
$fehler = [];
if (isset($_GET["fehler"]) && is_string($_GET["fehler"]) && $_GET["fehler"] !== "") {
    $fehler[] = $_GET["fehler"];
}
$punktestand = 0;
// TODO: Einen vorhandenen ganzzahligen, nicht negativen Punktestand geprüft aus der Session lesen.
$form_punkte = "";

// Bei Formfehlern nur GÜLTIGE NEUE Eingaben verwenden, nicht ältere Session-Werte.
if (!empty($fehler)) {
    $form_punkte = "";
    if (isset($_GET["punkte"]) && is_string($_GET["punkte"])) {
        $form_punkte = $_GET["punkte"]; // Nur maskierte Anzeige, keine neue Speicherung.
    }
}
?>
<!doctype html>
<html lang="de">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>04 Punkte sammeln – auch null</title><style>body { font-family: Arial, sans-serif; max-width: 880px; margin: 28px auto; padding: 0 18px; line-height: 1.55; }
input, select, button { font: inherit; padding: 6px 9px; } button { cursor: pointer; margin: 4px 6px 4px 0; }
label { font-weight: bold; } code { overflow-wrap: anywhere; } pre { padding: 14px; background: #f2f5f7; overflow: auto; }
a { text-underline-offset: 3px; } a:focus-visible, button:focus-visible, input:focus-visible, select:focus-visible { outline: 3px solid #b46c00; outline-offset: 3px; }
.fehler { border-left: 4px solid #9b2626; padding-left: 12px; } .info { background: #f2f5f7; padding: 12px; }
table { border-collapse: collapse; margin: 14px 0; } th, td { border: 1px solid #ccd5dd; padding: 8px 12px; text-align: left; }
small { color: #45576b; } .panels { display: grid; grid-template-columns: repeat(2,minmax(0,1fr)); gap: 14px; }
@media(max-width:650px) { .panels { display: block; } h1 { font-size: 26px; } }
</style></head>
<body>
<h1>04 Punkte sammeln – auch null</h1>
<p></p>
<p class="info"><strong>Startdatei:</strong> Bearbeite die TODO-Stellen. Die Session-Verarbeitung ist noch nicht fertig.</p>
<?php foreach ($fehler as $meldung) : ?>
    <p class="fehler" role="alert"><strong>Fehler:</strong> <?= html($meldung) ?></p>
<?php endforeach; ?>
<p>Punktestand: <strong data-state="Punktestand"><?= html((string) $punktestand) ?></strong></p>
<form action="auswertung.php" method="post" novalidate autocomplete="off">
<p><label for="punkte">Punkte (0 bis 5)</label><br>
<input type="text" id="punkte" name="punkte" value="<?= html($form_punkte) ?>"></p>
<button type="submit">Punkte hinzufügen</button>
</form>
<p><a href="index.php">Formular neu aufrufen</a></p>
<p><small>Lokale Session-Übung: nur erfundene Daten, keine Datenbank und keine echte Anmeldung.</small></p>
</body></html>
