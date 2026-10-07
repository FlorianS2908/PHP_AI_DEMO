<?php
declare(strict_types=1);
require_once __DIR__ . '/funktionen.php';

// 1. Nur die vereinbarten Methoden annehmen und die passende Datenquelle wählen.
$methode = $_SERVER['REQUEST_METHOD'];
if (!in_array($methode, ['GET', 'POST'], true)) {
    http_response_code(405);
    header('Allow: GET, POST');
    exit('Nur GET und POST sind erlaubt.');
}
$eingaben = $methode === 'POST' ? $_POST : $_GET;
$name = is_string($eingaben['name'] ?? null) ? trim($eingaben['name']) : '';
$alter = is_string($eingaben['alter'] ?? null) ? trim($eingaben['alter']) : '';

// 2. Beide Felder prüfen. Der Text "0" ist ein gültiges Alter, nicht leer.
$fehler = [];
if ($name === '') {
    $fehler[] = 'Bitte einen Namen als Text eingeben.';
}
if (!preg_match('/^(0|[1-9][0-9]{0,2})$/D', $alter) || (int) $alter > 120) {
    $fehler[] = 'Bitte das Alter als ganze Zahl von 0 bis 120 eingeben.';
}
if ($fehler !== []) {
    $query = http_build_query(['fehler' => implode(' ', $fehler), 'name' => $name, 'alter' => $alter]);
    // Header müssen vor jeder Ausgabe stehen; exit beendet die Verarbeitung.
    header('Location: formular.php?' . $query, true, 303);
    exit;
}

// 3. Gültige Daten anzeigen. Dies ist eine Prüfung, keine Speicherung/Buchung.
?>
<!doctype html><html lang="de"><head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Geprüfte Formulardaten</title></head><body>
<h1>Geprüfte Formulardaten</h1>
<p>Methode: <?= html($methode) ?></p>
<dl><dt>Name</dt><dd><?= html($name) ?></dd><dt>Alter</dt><dd><?= html($alter) ?></dd></dl>
<p><a href="formular.php">Zurück zum Formular</a></p>
</body></html>
