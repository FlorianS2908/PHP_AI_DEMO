<?php
declare(strict_types=1);
require __DIR__ . '/katalog.php';
require __DIR__ . '/funktionen.php';
header('Cache-Control: no-store');
$reise = startwerte();
$hinweis = '';

// Der Rückweg verwendet POST. Ein normaler Link würde die Auswahl NICHT mitnehmen.
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    $pruefung = pruefe_reise($_POST['reise'] ?? null, $ziele, $extras, $verpflegungen);
    $reise = $pruefung['werte'];
    $hinweis = 'Die erneut übermittelten Angaben wurden ins Formular eingesetzt. Prüfe deine Auswahl.';
} elseif (isset($_GET['ziel'])) {
    // Kleiner GET-Vergleich: auswahl.php?ziel=paris. Nur harmlose Vorbelegung.
    $ziel = $_GET['ziel'];
    if (is_string($ziel) && array_key_exists($ziel, $ziele)) {
        $reise['ziel'] = $ziel;
        $hinweis = 'Das Ziel wurde aus dem GET-Parameter vorbelegt. Gesendet wird anschließend per POST.';
    } else {
        $hinweis = 'Der GET-Parameter enthält kein bekanntes Ziel. Bitte selbst auswählen.';
    }
}
echo kopf('Deine Reise zusammenstellen', 1);
?>
<p class="lead">Wähle aus dem serverseitigen Katalog. Die Schlüssel werden gesendet – nicht die Preise.</p>
<?php if ($hinweis !== ''): ?><p class="note"><?= e($hinweis) ?></p><?php endif; ?>
<div class="layout">
<form class="card" action="pruefen.php" method="post">
    <h2>1 · Deine Auswahl</h2>
    <label for="name">Fiktiver Anzeigename</label>
    <input id="name" name="reise[name]" maxlength="60" required value="<?= e($reise['name']) ?>" placeholder="z. B. Alex Beispiel">
    <div class="fields">
        <div><label for="ziel">Reiseziel · Dropdown</label>
        <select id="ziel" name="reise[ziel]" required>
            <option value="">Bitte auswählen</option>
            <?php foreach ($ziele as $id => $ziel): ?>
                <option value="<?= e($id) ?>"<?= $reise['ziel'] === $id ? ' selected' : '' ?>><?= e($ziel['titel']) ?> · <?= e(euro($ziel['preis_cent'])) ?> / Person</option>
            <?php endforeach; ?>
        </select></div>
        <div><label for="personen">Personen</label>
        <select id="personen" name="reise[personen]">
            <?php for ($anzahl = 1; $anzahl <= 6; $anzahl++): ?>
                <option value="<?= $anzahl ?>"<?= $reise['personen'] === $anzahl ? ' selected' : '' ?>><?= $anzahl ?></option>
            <?php endfor; ?>
        </select></div>
    </div>
    <label for="extras">Extras · Mehrfachauswahl (optional)</label>
    <select id="extras" name="reise[extras][]" multiple size="3" aria-describedby="extras-hilfe">
        <?php foreach ($extras as $id => $extra): ?>
            <option value="<?= e($id) ?>"<?= in_array($id, $reise['extras'], true) ? ' selected' : '' ?>><?= e($extra['titel']) ?> · <?= e(euro($extra['preis_cent'])) ?> / Person</option>
        <?php endforeach; ?>
    </select>
    <p class="help" id="extras-hilfe">Unter Windows: Strg + Klick für mehrere Einträge oder zum Abwählen. Mit Tastatur ist die Bedienung browserabhängig. Ohne Auswahl werden keine Extras gesendet.</p>
    <fieldset><legend>Verpflegung · genau eine Option</legend>
        <?php foreach ($verpflegungen as $id => $verpflegung): ?>
        <label class="choice"><input type="radio" name="reise[verpflegung]" value="<?= e($id) ?>"<?= $reise['verpflegung'] === $id ? ' checked' : '' ?>>
            <span><?= e($verpflegung['titel']) ?><small><?= e(euro($verpflegung['preis_cent'])) ?> / Person</small></span></label>
        <?php endforeach; ?>
    </fieldset>
    <label for="nachricht">Nachricht (optional)</label>
    <textarea id="nachricht" name="reise[nachricht]" rows="3" maxlength="500" placeholder="Mehrzeiliger Text wird später formatiert ausgegeben."><?= e($reise['nachricht']) ?></textarea>
    <div class="actions"><button type="submit">Auswahl prüfen →</button><a class="button secondary" href="auswahl.php">Neu beginnen</a></div>
</form>
<aside class="card lesson"><span class="pill">Was passiert hier?</span><h2>Vom Schlüssel zur Auswahl</h2>
<p><code>paris</code> ist der technische Schlüssel. <strong>Paris</strong> ist die sichtbare Beschriftung.</p>
<pre><code>reise[ziel]       → "paris"
reise[personen]   → "2"
reise[extras][]   → "museum"
reise[extras][]   → "tour"</code></pre>
<p>PHP setzt aus den Feldnamen ein verschachteltes Array in <code>$_POST</code> zusammen.</p>
<p class="note">Noch kein dauerhaftes Merken: Die Weitergabe erfolgt in jeder Anfrage ausdrücklich neu.</p>
<a href="auswahl.php?ziel=paris">GET-Vorbelegung ausprobieren: Paris</a>
</aside></div>
<?= fuss() ?>
