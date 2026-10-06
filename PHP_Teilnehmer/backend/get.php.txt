<?php
declare(strict_types=1);
function gesamtpreis(int $preisCent, int $anzahl): int { return $preisCent * $anzahl; }
$raw = $_GET['ziel'] ?? '';
$ziel = is_string($raw) ? trim($raw) : '';
$ergebnis = gesamtpreis(12500, 3);
?>
<!doctype html><html lang="de"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>PHP · PHP-Demo</title><link rel="stylesheet" href="../assets/demo.css"></head><body><p class="notice">Lokale Unterrichtsanwendung · ausschließlich fiktive Angaben · keine Buchung.</p>
<h1>GET und Preisfunktion</h1><form method="get">
<label for="ziel">Zieltext</label><input id="ziel" name="ziel" value="<?= htmlspecialchars($ziel, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">
<button type="submit">Anzeigen</button></form>
<p>Rechenwert: <?= $ergebnis ?> Cent.</p>
<p>Ziel: <?= htmlspecialchars($ziel, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?></p>
</body></html>
