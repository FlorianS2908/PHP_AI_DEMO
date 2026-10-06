<?php
declare(strict_types=1);
require __DIR__ . '/katalog.php';
require __DIR__ . '/funktionen.php';
header('Cache-Control: no-store');
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    echo kopf('Für diese Seite fehlen die Formulardaten', 2);
    echo '<p class="note">Ein direkter Link ist eine GET-Anfrage. Bitte zuerst das Formular absenden.</p>';
    echo '<a class="button" href="auswahl.php">Zu Seite 1</a>' . fuss();
    exit;
}
$pruefung = pruefe_reise($_POST['reise'] ?? null, $ziele, $extras, $verpflegungen);
$reise = $pruefung['werte'];
if (!$pruefung['ok']) {
    http_response_code(422);
    echo kopf('Eingaben noch nicht gültig', 2);
    echo fehlerseite($pruefung['fehler'], $reise) . fuss();
    exit;
}
$rechnung = berechne_reise($reise, $ziele, $extras, $verpflegungen);
$zusammenfassung = reise_text($reise, $rechnung, $ziele, $extras, $verpflegungen);
echo kopf('Auswahl prüfen und weiterreichen', 2);
?>
<p class="lead">POST empfangen, Struktur geprüft und Preise aus dem Katalog neu berechnet.</p>
<div class="layout"><section class="card">
    <span class="pill">Gültige Auswahl</span>
    <h2><?= e($ziele[$reise['ziel']]['titel']) ?> für <?= $reise['personen'] ?> Personen</h2>
    <label for="vorschau">Dynamisch gefülltes Ausgabefeld · reiner Text</label>
    <textarea id="vorschau" readonly rows="10"><?= e($zusammenfassung) ?></textarea>
    <p class="help">Eine Textarea zeigt Text und Zeilenumbrüche, aber keine formatierten HTML-Elemente.</p>
    <details><summary>Unterrichtsansicht: empfangenes und geprüftes Array</summary>
        <h3>$_POST · vom Browser</h3><pre><?= e(print_r($_POST, true)) ?></pre>
        <h3>$reise · nach der Prüfung</h3><pre><?= e(var_export($reise, true)) ?></pre>
        <p>Die Personenanzahl ist jetzt ein Integer. Unbekannte Felder werden nicht übernommen.</p>
    </details>
</section>
<section class="card lesson"><h2>2 · Weiterbearbeiten</h2>
    <p>Ändere die Verpflegung. Die übrigen Angaben werden als versteckte Felder erneut übertragen.</p>
    <form action="ergebnis.php" method="post" id="weiter">
        <?= hidden_reise($reise, true) ?>
        <label for="verpflegung">Verpflegung jetzt ändern</label>
        <select id="verpflegung" name="reise[verpflegung]">
            <?php foreach ($verpflegungen as $id => $option): ?>
                <option value="<?= e($id) ?>"<?= $reise['verpflegung'] === $id ? ' selected' : '' ?>><?= e($option['titel']) ?> · <?= e(euro($option['preis_cent'])) ?> / Person</option>
            <?php endforeach; ?>
        </select>
        <p class="note warning">Hidden-Felder sind ein Transportweg, kein Schutz. Seite 3 prüft alles erneut.</p>
        <button type="submit">Neu berechnen und auswerten →</button>
    </form>
    <form action="auswahl.php" method="post" class="back-form" id="bearbeiten">
        <?= hidden_reise($reise) ?>
        <button type="submit" class="secondary">← Ursprüngliche Auswahl bearbeiten</button>
    </form>
    <p class="help">Dieser Rückweg verwendet die auf Seite 2 empfangene Auswahl. Die noch nicht abgesendete Änderung oben wird dabei nicht übernommen.</p>
</section></div>
<?= fuss() ?>
