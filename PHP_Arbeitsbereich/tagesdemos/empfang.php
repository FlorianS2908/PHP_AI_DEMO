<?php
declare(strict_types=1);
// Fertige Beobachtungsdemo für Tag 2. Keine Speicherung, keine Bestellung.
$methode = $_SERVER['REQUEST_METHOD'] ?? 'GET';
if ($methode !== 'GET' && $methode !== 'POST') {
    http_response_code(405);
    header('Allow: GET, POST');
    exit('Diese Demo erwartet GET oder POST.');
}
$daten = $methode === 'POST' ? $_POST : $_GET;
function h(string $text): string { return htmlspecialchars($text, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html><html lang="de"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>HTTP-Empfang</title><style>body{font:18px/1.6 system-ui;max-width:850px;margin:30px auto;padding:0 20px}td,th{padding:10px;border:1px solid #ccc;text-align:left}table{border-collapse:collapse;max-width:100%;overflow-wrap:anywhere}</style></head><body>
<h1>HTTP-Empfang: <?= h($methode) ?></h1>
<p>Request-Ziel: <code><?= h($_SERVER['REQUEST_URI'] ?? '') ?></code></p>
<p>Content-Type: <code><?= h($_SERVER['CONTENT_TYPE'] ?? 'Kein Content-Type für einen Form-Body gesendet') ?></code></p>
<p><?= $methode === 'GET' ? 'Die Formularwerte stehen im Query-Teil der URL.' : 'Die Formularwerte dieses Aufrufs stehen im Request-Body.' ?></p>
<table><thead><tr><th>name / Schlüssel</th><th>Empfangener Wert</th></tr></thead><tbody>
<?php foreach ($daten as $name => $wert): ?>
<tr><td><?= h((string)$name) ?></td><td><?= is_string($wert) ? h($wert) : 'Array empfangen – für dieses Textfeld nicht erlaubt' ?></td></tr>
<?php endforeach; ?>
</tbody></table>
<?php if ($daten === []): ?><p>Es wurden keine Formularwerte empfangen.</p><?php endif; ?>
<p>Dies ist eine Lupe, keine fachliche Auswertung. Fremde HTML-Zeichen werden als Text angezeigt. Vergleiche zusätzlich die Anfrage in F12.</p><a href="http-formular.html">Zurück zum Formular</a>
</body></html>
