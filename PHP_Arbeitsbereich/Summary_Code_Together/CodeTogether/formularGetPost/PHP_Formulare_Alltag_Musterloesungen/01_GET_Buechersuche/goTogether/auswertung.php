<?php
declare(strict_types=1);
require_once __DIR__ . '/../function.php';

// Aus mehreren Meldungen entsteht ein Text. HTML wird erst bei der Anzeige maskiert.
function formatiereFehler(array $fehler): string
{
    $nummer = 0;
    $text = '';
    foreach ($fehler as $feld => $meldung) {
        $nummer++;
        $text .= $nummer . '. ' . $feld . ': ' . $meldung . "\n";
    }
    return $text;
}

$fehler = [];
$suchbegriff = '';
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    $fehler['Methode'] = 'Bitte den Suchbegriff mit GET senden.';
}
if (isset($_GET['suchbegriff']) && is_string($_GET['suchbegriff'])) {
    $suchbegriff = trim($_GET['suchbegriff']);
}
if ($suchbegriff === '') {
    $fehler['Suchbegriff'] = 'Bitte einen Suchbegriff als Text eingeben.';
}
if ($fehler !== []) {
    $query = http_build_query(['error' => formatiereFehler($fehler)]);
    header('Location: index.php?' . $query, true, 303);
    exit;
}
?>
<!doctype html><html lang="de"><head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Suchbegriff prüfen</title></head><body>
<h1>Suchbegriff prüfen</h1><p>Gesucht würde nach: <?= html($suchbegriff) ?></p>
<p><a href="index.php">Zurück zur Büchersuche</a></p></body></html>
