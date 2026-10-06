<?php
declare(strict_types=1);
require __DIR__ . '/../01-mehrseitig/funktionen.php';

// Jedes Beispiel lässt sich einzeln im Unterricht verändern.
// Die Ausgabe wird wirklich von PHP berechnet, nicht durch JavaScript simuliert.
$liste = ['Berlin', 'Paris', 'Rom'];
$liste[] = 'Wien';
$reise = ['ziel' => 'Paris', 'personen' => 2, 'extras' => ['museum', 'tour']];
$preise = ['berlin' => 12900, 'paris' => 19900, 'rom' => 17900];
$zeilen = [];
foreach ($preise as $id => $cent) {
    $zeilen[] = $id . ' => ' . euro($cent);
}
$gesamt = 0;
foreach ([2500, 3500, 1800] as $cent) {
    $gesamt += $cent;
}
$nummern = [];
for ($i = 0; $i < count($liste); $i++) {
    $nummern[] = $i . ': ' . $liste[$i];
}
$whileWerte = [];
$i = 0;
while ($i < 3) {
    $whileWerte[] = $i;
    $i++;
}
$doWerte = [];
$i = 5;
do {
    $doWerte[] = $i;
    $i++;
} while ($i < 3); // erster Durchlauf findet trotzdem statt.

$filter = [];
foreach ([0, 2500, 3500, 1800] as $cent) {
    if ($cent === 0) {
        continue; // nur diesen Durchlauf überspringen.
    }
    if ($cent > 3000) {
        break; // gesamte Schleife beenden.
    }
    $filter[] = $cent;
}
$kopie = $preise;
asort($kopie); // Schlüssel erhalten, Werte sortieren.
$ohne = ['Berlin', 'Paris', 'Rom'];
unset($ohne[1]); // Schlüssel 1 fehlt; count ist nicht der größte Index.
$neuIndiziert = array_values($ohne);
$leerWert = ['notiz' => null];
$beispiele = [
    ['Liste anlegen und erweitern', '$liste = ["Berlin", "Paris", "Rom"];' . "\n" . '$liste[] = "Wien";', var_export($liste, true)],
    ['Assoziativ und verschachtelt', '$reise = ["ziel" => "Paris", "personen" => 2, "extras" => ["museum", "tour"]];' . "\n" . '$reise["extras"][0];', var_export($reise, true) . "\nErstes Extra: " . $reise['extras'][0]],
    ['Schlüssel und Werte durchlaufen', 'foreach ($preise as $id => $cent) { /* $id und $cent verwenden */ }', implode("\n", $zeilen)],
    ['Werte aufsummieren', '$gesamt = 0;' . "\n" . 'foreach ([2500, 3500, 1800] as $cent) { $gesamt += $cent; }', 'Summe: ' . $gesamt . ' Cent = ' . euro($gesamt)],
    ['for auf einer lückenlosen Liste', 'for ($i = 0; $i < count($liste); $i++) { /* $liste[$i] lesen */ }', implode("\n", $nummern)],
    ['while ist kopfgesteuert', '$i = 0;' . "\n" . 'while ($i < 3) { /* ausgeben */ $i++; }', implode(', ', $whileWerte)],
    ['do-while läuft mindestens einmal', '$i = 5;' . "\n" . 'do { /* ausgeben */ $i++; } while ($i < 3);', implode(', ', $doWerte)],
    ['continue und break', 'foreach ([0, 2500, 3500, 1800] as $cent) {' . "\n" . '  if ($cent === 0) { continue; }' . "\n" . '  if ($cent > 3000) { break; }' . "\n" . '  $filter[] = $cent;' . "\n" . '}', var_export($filter, true)],
    ['asort erhält die Schlüssel', '$kopie = $preise; asort($kopie);', var_export($kopie, true)],
    ['Löschen und neu indizieren', 'unset($ohne[1]);' . "\n" . '$neuIndiziert = array_values($ohne);', var_export($ohne, true) . "\n\nNeu indiziert:\n" . var_export($neuIndiziert, true)],
    ['isset oder array_key_exists?', '$leerWert = ["notiz" => null];', 'isset: ' . var_export(isset($leerWert['notiz']), true) . "\narray_key_exists: " . var_export(array_key_exists('notiz', $leerWert), true)],
];
?>
<!doctype html><html lang="de"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Arrays und Kontrollstrukturen · PHP-Demo</title><link rel="stylesheet" href="../../assets/demo.css"></head>
<body><main class="wrap mini"><p class="eyebrow">PHP · Code lesen, vorhersagen, ausführen</p>
<h1>Arrays im kleinen Labor</h1><p>Die Ausgaben entstehen direkt durch PHP. Lies zuerst den jeweiligen Code.</p>
<?php foreach ($beispiele as $beispiel): ?>
<section class="card"><h2><?= e($beispiel[0]) ?></h2><pre><code><?= e($beispiel[1]) ?></code></pre>
<details><summary>Berechnete Ausgabe einblenden</summary><pre><?= e($beispiel[2]) ?></pre></details></section>
<?php endforeach; ?>
<a href="../../index.html">Zur Materialübersicht</a></main></body></html>
