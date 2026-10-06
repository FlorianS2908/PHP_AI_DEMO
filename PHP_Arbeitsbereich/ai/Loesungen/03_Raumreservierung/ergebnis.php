<?php
if (!isset($details, $positionen, $gesamt, $app)) {
    header('Location: index.php', true, 303);
    exit;
}
$detailIcons = ['Prozessor' => 'chip', 'Arbeitsspeicher' => 'memory', 'Grafik' => 'monitor', 'SSD' => 'storage'];
$seitentitel = 'Auswertung: ' . $app['title'];
require __DIR__ . '/kopf.php';
?>
<section class="notice success" aria-labelledby="erfolg-titel"><h2 id="erfolg-titel"><?= icon('check') ?> Eingaben erfolgreich geprüft</h2><p>Die Angaben sind gültig. Das folgende Ergebnis ist eine unverbindliche Berechnung, keine Bestellung oder Buchung.</p></section>
<?php foreach ($warnungen as $warnung): ?>
<section class="notice warning" aria-label="Hinweis zur Auswertung"><h2><?= icon('warning') ?> Bitte beachten</h2><p><?= e($warnung) ?></p></section>
<?php endforeach; ?>
<div class="result-grid">
<section class="card"><h2><?= icon($app['icon']) ?> Deine Angaben</h2>
<dl class="details"><?php foreach ($details as $label => $wert): ?><dt><?php if (isset($detailIcons[$label])): ?><?= icon($detailIcons[$label]) ?> <?php endif; ?><?= e($label) ?></dt><dd><?= e($wert) ?></dd><?php endforeach; ?></dl>
<?php if (isset($farbwert)): ?><p><span class="swatch" style="background-color: <?= e($farbwert) ?>" aria-hidden="true"></span>Farbwunsch: <?= e($farbwert) ?></p><?php endif; ?>
</section>
<section class="card"><h2><?= icon('settings') ?> Berechnung</h2>
<div class="table-scroll"><table><caption>Preise aus dem serverseitigen Demo-Katalog</caption><thead><tr><th scope="col">Position</th><th scope="col">Menge</th><th scope="col">Einzel</th><th scope="col">Summe</th></tr></thead><tbody>
<?php foreach ($positionen as $p): ?><tr><th scope="row"><?= e($p['text']) ?></th><td><?= e((string) $p['anzahl']) ?></td><td><?= e(geld($p['einzel'])) ?></td><td><?= e(geld($p['summe'])) ?></td></tr><?php endforeach; ?>
</tbody></table></div>
<p class="total"><span>Gesamt</span><span id="gesamtpreis"><?= e(geld($gesamt)) ?></span></p>
</section></div>
<div class="actions"><a class="button" href="index.php">Neue Eingabe <?= icon('arrow') ?></a></div>
<footer>Keine Speicherung, kein Versand, kein Kauf. Alle Beträge sind frei gewählte Endpreise für diese Übung.</footer>
</main></body></html>
