<?php
declare(strict_types=1);
require_once __DIR__ . '/../../backend/db.php';
$destination = ''; $message = 'Wähle ein Reiseziel aus.'; $rows = [];
if (array_key_exists('ziel', $_GET)) {
    $raw = $_GET['ziel'];
    if (!is_string($raw) || !in_array($raw, allowed_destinations(), true)) {
        $message = 'Bitte ein zulässiges Reiseziel auswählen.';
    } else {
        $destination = $raw;
        try {
            $rows = find_offers($destination);
            $message = $rows ? count($rows) . ' fiktive Angebote gefunden.' : 'Keine passenden Angebote gefunden.';
        } catch (Throwable $error) {
            error_log($error->getMessage());
            $message = 'Suche nicht verfügbar. Prüfe für diese lokale Übung Datenbankdienst, mysqli und config.local.php.';
        }
    }
}
?>
<!doctype html><html lang="de"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>PHP · PHP-Demo</title><link rel="stylesheet" href="../../../assets/demo.css"></head><body><p class="notice">Lokale Unterrichtsanwendung · ausschließlich fiktive Angaben · keine Buchung.</p>
<header><h1>EuroCityTravel</h1><p>Vom Formular zur gefilterten Datenbankabfrage.</p></header>
<main><h2>Beispielangebote suchen</h2><form method="get">
<label for="ziel">Reiseziel</label><select id="ziel" name="ziel" required>
<option value="">Bitte auswählen</option>
<?php foreach (allowed_destinations() as $value): ?>
<option value="<?= e($value) ?>"<?= $destination === $value ? ' selected' : '' ?>><?= e($value) ?></option>
<?php endforeach; ?></select><button type="submit">Angebote suchen</button></form>
<p role="status"><?= e($message) ?></p>
<?php if ($rows): ?>
<h2>Fiktive Angebote für <?= e($destination) ?></h2>
<?php foreach ($rows as $row): ?>
<article><h3><?= e((string)$row['goal']) ?></h3><p>Ab <?= e((string)$row['origin']) ?> am <?= e((string)$row['date']) ?></p><p><?= e(number_format(((int)$row['price'])/100,2,',','.')) ?> Euro</p></article>
<?php endforeach; ?>
<?php endif; ?></main><footer><p>Suchreferenz ohne Anmeldung, Buchung oder Zahlung.</p></footer></body></html>
