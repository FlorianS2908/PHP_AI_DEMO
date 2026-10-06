<?php
declare(strict_types=1);
require __DIR__ . '/../01-mehrseitig/katalog.php';
require __DIR__ . '/../01-mehrseitig/funktionen.php'; // e() maskiert HTML-Text.
header('Cache-Control: no-store');
$fehler = [];
$auswahl = $_POST['auswahl'] ?? null;
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST' || !is_array($auswahl)) {
    $fehler[] = 'Bitte zuerst das Formular absenden.';
    $auswahl = [];
}
$zielId = $auswahl['ziel'] ?? '';
var_dump($auswahl);
$extraIds = $auswahl['extras'] ?? []; // leere Checkbox-Gruppe: kein Schlüssel.
$nachricht = $auswahl['nachricht'] ?? '';
if (!is_string($zielId) || !array_key_exists($zielId, $ziele)) {
    $fehler[] = 'Unbekanntes Reiseziel.';
}
if (!is_string($nachricht) || !text_passt($nachricht, 500)) {
    $fehler[] = 'Die Nachricht muss Text mit höchstens 500 Zeichen sein.';
    $nachricht = '';
}
$namen = [];
if (!is_array($extraIds) || count($extraIds) > 2) {
    $fehler[] = 'Extras müssen eine Liste mit höchstens zwei Einträgen sein.';
} else {
    foreach ($extraIds as $id) {
        if (!is_string($id) || !in_array($id, ['museum', 'tour'], true)) {
            $fehler[] = 'Unbekanntes Extra.';
        } else {
            $namen[] = $extras[$id]['titel'];
        }
    }
}
if (count($namen) !== count(array_unique($namen))) {
    $fehler[] = 'Ein Extra wurde doppelt gesendet.';
}
$text = '';
if ($fehler === []) {
    $text = 'Reiseziel: ' . $ziele[$zielId]['titel'] . "\n"
        . 'Extras: ' . ($namen === [] ? 'Keine' : implode(', ', $namen)) . "\n"
        . 'Nachricht: ' . $nachricht;
} else {
    http_response_code(422);
}
?>
<!doctype html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Mini-Demo · Ausgabe</title>
    <link rel="stylesheet" href="../../assets/demo.css">
</head>

<body>
    <main class="wrap mini">
        <p class="eyebrow">PHP · Schritt 2: Daten empfangen</p>
        <h1>Deine Auswahl als Ausgabe</h1>
        <?php if ($fehler !== []): ?>
        <section class="card error">
            <h2>Eingabe prüfen</h2>
            <ul>
                <?php foreach ($fehler as $meldung): ?><li><?= e($meldung) ?></li><?php endforeach; ?>
            </ul>
        </section>
        <?php else: ?>
        <section class="card">
            <h2><?= e($ziele[$zielId]['titel']) ?></h2>
            <label for="ausgabe">Mit PHP eingesetzter Text</label>
            <textarea id="ausgabe" rows="7" readonly><?= e($text) ?></textarea>
            <h3>Dieselbe Nachricht im gestalteten HTML-Bereich</h3>
            <div class="message"><?= e($nachricht) ?></div>
        </section>
        <?php endif; ?>
        <details>
            <summary>Empfangenes Array ansehen</summary>
            <pre><?= e(print_r($_POST, true)) ?></pre>
        </details>
        <p class="help">PHP erzeugt die neue Antwortseite. Keine JavaScript-Simulation, keine Session.</p>
        <a class="button secondary" href="formular.html">Neues Formular öffnen (ohne Übernahme)</a>
    </main>
</body>

</html>