<?php
// Direktaufruf dieser Teilansicht vermeiden.
if (!isset($werte, $fehler, $app)) {
    header('Location: index.php', true, 303);
    exit;
}
$seitentitel = $fehler === [] ? $app['title'] : 'Eingaben korrigieren';
require __DIR__ . '/kopf.php';
?>
<?php if ($fehler !== []): ?>
<section class="notice error" role="alert" tabindex="-1" aria-labelledby="fehler-titel" id="fehleruebersicht">
<h2 id="fehler-titel"><?= icon('warning') ?> Bitte korrigiere deine Eingaben</h2>
<p>Alle gefundenen Fehler stehen hier und direkt am Feld. Gültige Angaben wurden übernommen; fehlerhafte Felder bitte neu ausfüllen.</p>
<ul><?php foreach ($fehler as $feld => $meldung): ?>
<li><a href="#<?= e($feld) ?>"><?= e($labels[$feld] ?? $feld) ?>: <?= e($meldung) ?></a></li>
<?php endforeach; ?></ul>
</section>
<?php endif; ?>
<div class="layout">
<form action="auswertung.php" method="post" class="form-sections">
<section class="card section-1" aria-labelledby="abschnitt-1"><h2 id="abschnitt-1"><?= icon('user') ?> Kontakt und Einsatzzweck</h2>
<div class="fields">
<div class="feld feld-name">
<label for="name">Kontaktperson <span class="pflicht">(Pflicht)</span></label>
<input id="name" name="name" type="text" value="<?= e($werte['name']) ?>" required autocomplete="name"<?= feld_attribute('name', $fehler, false) ?>>
<?= feldfehler('name', $fehler) ?>
</div>
<div class="feld feld-email">
<label for="email">E-Mail-Adresse <span class="pflicht">(Pflicht)</span></label>
<input id="email" name="email" type="email" value="<?= e($werte['email']) ?>" required autocomplete="email"<?= feld_attribute('email', $fehler, false) ?>>
<?= feldfehler('email', $fehler) ?>
</div>
<div class="feld feld-budget">
<label for="budget">Persönliches Budget in Euro <span class="pflicht">(Pflicht)</span></label>
<input id="budget" name="budget" type="number" value="<?= e($werte['budget']) ?>" required min="0.01" max="999999.99" step="0.01"<?= feld_attribute('budget', $fehler, false) ?>>
<?= feldfehler('budget', $fehler) ?>
</div>
<div class="feld feld-zweck wide">
<fieldset class="auswahl" id="zweck" tabindex="-1"<?= feld_attribute('zweck', $fehler, false) ?>>
<legend>Einsatzzweck <span class="pflicht">(Pflicht)</span></legend>
<div class="optionen">
<?php foreach ($kataloge['zwecke'] as $key => $option): ?>
<label class="option" for="zweck-<?= e($key) ?>"><input id="zweck-<?= e($key) ?>" type="radio" name="zweck" value="<?= e($key) ?>" <?= $werte['zweck'] === $key ? 'checked' : '' ?> required><span><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></span></label>
<?php endforeach; ?>
</div></fieldset>
<?= feldfehler('zweck', $fehler) ?>
</div>
</div></section>
<section class="card section-2" aria-labelledby="abschnitt-2"><h2 id="abschnitt-2"><?= icon('monitor') ?> Komponenten</h2>
<div class="fields">
<div class="feld feld-cpu">
<label for="cpu">Prozessor <span class="pflicht">(Pflicht)</span></label>
<select id="cpu" name="cpu" required<?= feld_attribute('cpu', $fehler, false) ?>>
<option value="">Bitte auswählen</option>
<?php foreach ($kataloge['cpus'] as $key => $option): ?>
<option value="<?= e($key) ?>" <?= $werte['cpu'] === $key ? 'selected' : '' ?>><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></option>
<?php endforeach; ?>
</select>
<?= feldfehler('cpu', $fehler) ?>
</div>
<div class="feld feld-ram">
<label for="ram">Arbeitsspeicher <span class="pflicht">(Pflicht)</span></label>
<select id="ram" name="ram" required<?= feld_attribute('ram', $fehler, false) ?>>
<option value="">Bitte auswählen</option>
<?php foreach ($kataloge['ram'] as $key => $option): ?>
<option value="<?= e($key) ?>" <?= $werte['ram'] === $key ? 'selected' : '' ?>><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></option>
<?php endforeach; ?>
</select>
<?= feldfehler('ram', $fehler) ?>
</div>
<div class="feld feld-grafik">
<label for="grafik">Grafiklösung <span class="pflicht">(Pflicht)</span></label>
<select id="grafik" name="grafik" required<?= feld_attribute('grafik', $fehler, false) ?>>
<option value="">Bitte auswählen</option>
<?php foreach ($kataloge['grafik'] as $key => $option): ?>
<option value="<?= e($key) ?>" <?= $werte['grafik'] === $key ? 'selected' : '' ?>><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></option>
<?php endforeach; ?>
</select>
<?= feldfehler('grafik', $fehler) ?>
</div>
<div class="feld feld-speicher">
<label for="speicher">SSD <span class="pflicht">(Pflicht)</span></label>
<select id="speicher" name="speicher" required<?= feld_attribute('speicher', $fehler, false) ?>>
<option value="">Bitte auswählen</option>
<?php foreach ($kataloge['speicher'] as $key => $option): ?>
<option value="<?= e($key) ?>" <?= $werte['speicher'] === $key ? 'selected' : '' ?>><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></option>
<?php endforeach; ?>
</select>
<?= feldfehler('speicher', $fehler) ?>
</div>
</div></section>
<section class="card section-3" aria-labelledby="abschnitt-3"><h2 id="abschnitt-3"><?= icon('settings') ?> Extras und Zusammenbau</h2>
<div class="fields">
<div class="feld feld-extras wide">
<fieldset class="auswahl" id="extras" tabindex="-1"<?= feld_attribute('extras', $fehler, false) ?>>
<legend>Zusätzliche Ausstattung <span class="pflicht">(optional)</span></legend>
<div class="optionen">
<?php foreach ($kataloge['extras'] as $key => $option): ?>
<label class="option" for="extras-<?= e($key) ?>"><input id="extras-<?= e($key) ?>" type="checkbox" name="extras[]" value="<?= e($key) ?>" <?= in_array($key, $werte['extras'], true) ? 'checked' : '' ?>><span><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></span></label>
<?php endforeach; ?>
</div></fieldset>
<?= feldfehler('extras', $fehler) ?>
</div>
<div class="feld feld-montage wide">
<label class="option" for="montage"><input id="montage" type="checkbox" name="montage" value="ja" <?= $werte['montage'] === 'ja' ? 'checked' : '' ?><?= feld_attribute('montage', $fehler, false) ?>><span>PC zusammenbauen lassen <span class="pflicht">(optional)</span></span></label>
<?= feldfehler('montage', $fehler) ?>
</div>
<div class="feld feld-notiz wide">
<label for="notiz">Weitere Wünsche <span class="pflicht">(optional)</span></label>
<textarea id="notiz" name="notiz" rows="4" maxlength="800"<?= feld_attribute('notiz', $fehler, false) ?>><?= e($werte['notiz']) ?></textarea>
<?= feldfehler('notiz', $fehler) ?>
</div>
</div></section>
<div class="actions"><button class="button" type="submit"><?= e($app['cta']) ?> <?= icon('arrow') ?></button><a href="index.php">Eingaben verwerfen und neu beginnen</a></div>
</form>
<aside class="card aside"><h2><?= icon('message') ?> <?= e($app['hinttitle']) ?></h2><p><?= e($app['hint']) ?></p><p class="hinweis">Pflichtfelder sind gekennzeichnet. Es werden keine E-Mails versendet und keine Daten gespeichert.</p></aside>
</div>
<footer>Unterrichtsdemo · HTML, CSS Grid und PHP · Fiktive Preise und Regeln · Kein JavaScript erforderlich</footer>
</main>
</body></html>
