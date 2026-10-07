<?php
declare(strict_types=1);
require_once __DIR__ . '/../function.php';
$fehler = is_string($_GET['error'] ?? null) ? $_GET['error'] : '';
?>
<!doctype html><html lang="de"><head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aufgabe 1: Büchersuche</title></head><body>
<h1>Aufgabe 1: Büchersuche</h1>
<p>Gemeinsam erarbeitet: Fehler sammeln, nummerieren und nach der Weiterleitung sicher anzeigen.
Eine echte Suche wird hier nicht ausgeführt.</p>
<?php if ($fehler !== ''): ?>
<p role="alert" style="white-space:pre-line"><?= html($fehler) ?></p>
<?php endif; ?>
<form action="auswertung.php" method="get">
<label for="suchbegriff">Suchbegriff</label>
<input type="text" id="suchbegriff" name="suchbegriff">
<button type="submit">Suche starten</button>
</form></body></html>
