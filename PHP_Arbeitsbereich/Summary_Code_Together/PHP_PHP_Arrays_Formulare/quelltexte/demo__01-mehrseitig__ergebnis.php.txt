<?php
declare(strict_types=1);
require __DIR__ . '/katalog.php';
require __DIR__ . '/funktionen.php';
header('Cache-Control: no-store');
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    echo kopf('Keine aktuelle Auswahl übermittelt', 3);
    echo '<p class="note">Ohne neue POST-Daten gibt es hier keine vorherige Reise. Noch keine Session!</p>';
    echo '<a class="button" href="auswahl.php">Bei Seite 1 beginnen</a>' . fuss();
    exit;
}
// Wieder prüfen: Browserdaten sind auch auf Seite 3 weiterhin nicht vertrauenswürdig.
$pruefung = pruefe_reise($_POST['reise'] ?? null, $ziele, $extras, $verpflegungen);
$reise = $pruefung['werte'];
if (!$pruefung['ok']) {
    http_response_code(422);
    echo kopf('Die übermittelten Daten sind nicht gültig', 3);
    echo fehlerseite($pruefung['fehler'], $reise) . fuss();
    exit;
}
$rechnung = berechne_reise($reise, $ziele, $extras, $verpflegungen);
$zusammenfassung = reise_text($reise, $rechnung, $ziele, $extras, $verpflegungen);

// if / elseif / else: eine zur Personenanzahl passende Textausgabe.
if ($reise['personen'] === 1) {
    $gruppenText = 'Eine Person';
} elseif ($reise['personen'] <= 3) {
    $gruppenText = 'Kleine Reisegruppe';
} else {
    $gruppenText = 'Große Reisegruppe';
}

// switch: Fallunterscheidung nach dem bereits geprüften Schlüssel.
switch ($reise['verpflegung']) {
    case 'fruehstueck':
        $serviceText = 'Der Frühstücksbaustein ist berücksichtigt.';
        break;
    case 'halbpension':
        $serviceText = 'Der Halbpensionsbaustein ist berücksichtigt.';
        break;
    default:
        $serviceText = 'Es ist keine Verpflegung ausgewählt.';
}
echo kopf('Deine formatierte Zusammenfassung', 3);
?>
<p class="lead">Alle Angaben wurden erneut gelesen und berechnet. Nichts wurde gespeichert oder gebucht.</p>
<div class="layout"><section class="card">
    <span class="pill"><?= e($gruppenText) ?></span>
    <h2><?= e($reise['name']) ?> · <?= e($ziele[$reise['ziel']]['titel']) ?></h2>
    <div class="table-wrap"><table>
        <caption>Fiktive Unterrichtskalkulation · jede Position pro Person, einmalig</caption>
        <thead><tr><th scope="col">Position</th><th scope="col">Einzeln</th><th scope="col">Anzahl</th><th scope="col">Summe</th></tr></thead>
        <tbody><?php foreach ($rechnung['positionen'] as $position): ?>
        <tr><td><?= e($position['titel']) ?></td><td><?= e(euro($position['einzel_cent'])) ?></td><td><?= $position['anzahl'] ?></td><td><?= e(euro($position['summe_cent'])) ?></td></tr>
        <?php endforeach; ?></tbody>
    </table></div>
    <div class="total"><span>Gesamt</span><output id="gesamt"><?= e(euro($rechnung['gesamt_cent'])) ?></output></div>
    <p><?= e($serviceText) ?></p>
    <h3>Deine Nachricht</h3>
    <div class="message"><?= e($reise['nachricht'] === '' ? 'Keine Nachricht angegeben.' : $reise['nachricht']) ?></div>
    <p class="help">PHP setzt maskierten Text ins HTML ein. CSS erhält Zeilenumbrüche und gestaltet den Ausgabebereich.</p>
</section>
<aside class="card lesson"><h2>Textausgabe zum Kopieren</h2>
    <label for="ausgabe">Zusammenfassung</label>
    <textarea id="ausgabe" rows="11" readonly><?= e($zusammenfassung) ?></textarea>
    <form action="auswahl.php" method="post" class="back-form" id="zurueck">
        <?= hidden_reise($reise) ?>
        <button type="submit" class="secondary">← Mit diesen Werten weiterarbeiten</button>
    </form>
    <a class="button secondary" href="auswahl.php">Neue, leere Auswahl</a>
    <details><summary>Warum brauchen wir später Sessions?</summary>
    <p>Hier reist jede Auswahl wieder als Formularwert mit. Bei mehr Schritten wird das aufwendig. Eine Session kann geprüfte Werte serverseitig einem Browser zuordnen. Das ist der nächste Lernschritt.</p>
    </details>
</aside></div>
<?= fuss() ?>
