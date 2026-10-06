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
<section class="card section-1" aria-labelledby="abschnitt-1"><h2 id="abschnitt-1"><?= icon('user') ?> Kontakt</h2>
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
</div></section>
<section class="card section-2" aria-labelledby="abschnitt-2"><h2 id="abschnitt-2"><?= icon('book') ?> Workshop wählen</h2>
<div class="fields">
<div class="feld feld-kurs">
<label for="kurs">Workshop <span class="pflicht">(Pflicht)</span></label>
<select id="kurs" name="kurs" required<?= feld_attribute('kurs', $fehler, false) ?>>
<option value="">Bitte auswählen</option>
<?php foreach ($kataloge['kurse'] as $key => $option): ?>
<option value="<?= e($key) ?>" <?= $werte['kurs'] === $key ? 'selected' : '' ?>><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></option>
<?php endforeach; ?>
</select>
<?= feldfehler('kurs', $fehler) ?>
</div>
<div class="feld feld-personen">
<label for="personen">Anzahl der Teilnehmenden <span class="pflicht">(Pflicht)</span></label>
<input id="personen" name="personen" type="number" value="<?= e($werte['personen']) ?>" required min="1" max="12" step="1"<?= feld_attribute('personen', $fehler, true) ?>>
<p class="hinweis" id="personen-hinweis">Pro Anmeldung sind 1 bis 12 Personen möglich.</p>
<?= feldfehler('personen', $fehler) ?>
</div>
<div class="feld feld-format wide">
<fieldset class="auswahl" id="format" tabindex="-1"<?= feld_attribute('format', $fehler, false) ?>>
<legend>Teilnahmeform <span class="pflicht">(Pflicht)</span></legend>
<div class="optionen">
<?php foreach ($kataloge['formate'] as $key => $option): ?>
<label class="option" for="format-<?= e($key) ?>"><input id="format-<?= e($key) ?>" type="radio" name="format" value="<?= e($key) ?>" <?= $werte['format'] === $key ? 'checked' : '' ?> required><span><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></span></label>
<?php endforeach; ?>
</div></fieldset>
<?= feldfehler('format', $fehler) ?>
</div>
<div class="feld feld-extras wide">
<fieldset class="auswahl" id="extras" tabindex="-1"<?= feld_attribute('extras', $fehler, true) ?>>
<legend>Extras <span class="pflicht">(optional)</span></legend>
<div class="optionen">
<?php foreach ($kataloge['extras'] as $key => $option): ?>
<label class="option" for="extras-<?= e($key) ?>"><input id="extras-<?= e($key) ?>" type="checkbox" name="extras[]" value="<?= e($key) ?>" <?= in_array($key, $werte['extras'], true) ? 'checked' : '' ?>><span><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></span></label>
<?php endforeach; ?>
</div></fieldset>
<p class="hinweis" id="extras-hinweis">Optional. Preise gelten jeweils pro Person.</p>
<?= feldfehler('extras', $fehler) ?>
</div>
</div></section>
<section class="card section-3" aria-labelledby="abschnitt-3"><h2 id="abschnitt-3"><?= icon('message') ?> Weitere Angaben</h2>
<div class="fields">
<div class="feld feld-notiz wide">
<label for="notiz">Wünsche oder Hinweise <span class="pflicht">(optional)</span></label>
<textarea id="notiz" name="notiz" rows="4" maxlength="800"<?= feld_attribute('notiz', $fehler, false) ?>><?= e($werte['notiz']) ?></textarea>
<?= feldfehler('notiz', $fehler) ?>
</div>
<div class="feld feld-bestaetigung wide">
<label class="option" for="bestaetigung"><input id="bestaetigung" type="checkbox" name="bestaetigung" value="ja" <?= $werte['bestaetigung'] === 'ja' ? 'checked' : '' ?> required<?= feld_attribute('bestaetigung', $fehler, false) ?>><span>Ich habe meine Angaben geprüft. <span class="pflicht">(Pflicht)</span></span></label>
<?= feldfehler('bestaetigung', $fehler) ?>
</div>
</div></section>
<div class="actions"><button class="button" type="submit"><?= e($app['cta']) ?> <?= icon('arrow') ?></button><a href="index.php">Eingaben verwerfen und neu beginnen</a></div>
</form>
<aside class="card aside"><h2><?= icon('message') ?> <?= e($app['hinttitle']) ?></h2><p><?= e($app['hint']) ?></p><p class="hinweis">Pflichtfelder sind gekennzeichnet. Es werden keine E-Mails versendet und keine Daten gespeichert.</p></aside>
</div>
<footer>Unterrichtsdemo · HTML, CSS Grid und PHP · Fiktive Preise und Regeln · Kein JavaScript erforderlich</footer>
</main>
</body></html>
