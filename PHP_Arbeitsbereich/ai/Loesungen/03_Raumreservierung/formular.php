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
<section class="card section-1" aria-labelledby="abschnitt-1"><h2 id="abschnitt-1"><?= icon('user') ?> Verantwortliche Person</h2>
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
<section class="card section-2" aria-labelledby="abschnitt-2"><h2 id="abschnitt-2"><?= icon('room') ?> Raum und Zeitraum</h2>
<div class="fields">
<div class="feld feld-raum">
<label for="raum">Raum <span class="pflicht">(Pflicht)</span></label>
<select id="raum" name="raum" required<?= feld_attribute('raum', $fehler, true) ?>>
<option value="">Bitte auswählen</option>
<?php foreach ($kataloge['raeume'] as $key => $option): ?>
<option value="<?= e($key) ?>" <?= $werte['raum'] === $key ? 'selected' : '' ?>><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></option>
<?php endforeach; ?>
</select>
<p class="hinweis" id="raum-hinweis">Studio: 6 Plätze · Teamraum: 12 Plätze · Forum: 24 Plätze.</p>
<?= feldfehler('raum', $fehler) ?>
</div>
<div class="feld feld-personen">
<label for="personen">Anzahl der Personen <span class="pflicht">(Pflicht)</span></label>
<input id="personen" name="personen" type="number" value="<?= e($werte['personen']) ?>" required min="1" max="24" step="1"<?= feld_attribute('personen', $fehler, false) ?>>
<?= feldfehler('personen', $fehler) ?>
</div>
<div class="feld feld-beginn">
<label for="beginn">Beginn <span class="pflicht">(Pflicht)</span></label>
<input id="beginn" name="beginn" type="datetime-local" value="<?= e($werte['beginn']) ?>" required<?= feld_attribute('beginn', $fehler, false) ?>>
<?= feldfehler('beginn', $fehler) ?>
</div>
<div class="feld feld-ende">
<label for="ende">Ende <span class="pflicht">(Pflicht)</span></label>
<input id="ende" name="ende" type="datetime-local" value="<?= e($werte['ende']) ?>" required<?= feld_attribute('ende', $fehler, false) ?>>
<?= feldfehler('ende', $fehler) ?>
</div>
<div class="feld feld-bestuhlung wide">
<fieldset class="auswahl" id="bestuhlung" tabindex="-1"<?= feld_attribute('bestuhlung', $fehler, false) ?>>
<legend>Bestuhlung <span class="pflicht">(Pflicht)</span></legend>
<div class="optionen">
<?php foreach ($kataloge['bestuhlungen'] as $key => $option): ?>
<label class="option" for="bestuhlung-<?= e($key) ?>"><input id="bestuhlung-<?= e($key) ?>" type="radio" name="bestuhlung" value="<?= e($key) ?>" <?= $werte['bestuhlung'] === $key ? 'checked' : '' ?> required><span><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></span></label>
<?php endforeach; ?>
</div></fieldset>
<?= feldfehler('bestuhlung', $fehler) ?>
</div>
</div></section>
<section class="card section-3" aria-labelledby="abschnitt-3"><h2 id="abschnitt-3"><?= icon('settings') ?> Ausstattung und Hinweise</h2>
<div class="fields">
<div class="feld feld-ausstattung wide">
<fieldset class="auswahl" id="ausstattung" tabindex="-1"<?= feld_attribute('ausstattung', $fehler, true) ?>>
<legend>Zusätzliche Ausstattung <span class="pflicht">(optional)</span></legend>
<div class="optionen">
<?php foreach ($kataloge['ausstattung'] as $key => $option): ?>
<label class="option" for="ausstattung-<?= e($key) ?>"><input id="ausstattung-<?= e($key) ?>" type="checkbox" name="ausstattung[]" value="<?= e($key) ?>" <?= in_array($key, $werte['ausstattung'], true) ? 'checked' : '' ?>><span><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></span></label>
<?php endforeach; ?>
</div></fieldset>
<p class="hinweis" id="ausstattung-hinweis">Optional. Die Ausstattung wird einmal pro Reservierung berechnet.</p>
<?= feldfehler('ausstattung', $fehler) ?>
</div>
<div class="feld feld-notiz wide">
<label for="notiz">Organisatorische Hinweise <span class="pflicht">(optional)</span></label>
<textarea id="notiz" name="notiz" rows="4" maxlength="800"<?= feld_attribute('notiz', $fehler, false) ?>><?= e($werte['notiz']) ?></textarea>
<?= feldfehler('notiz', $fehler) ?>
</div>
<div class="feld feld-bestaetigung wide">
<label class="option" for="bestaetigung"><input id="bestaetigung" type="checkbox" name="bestaetigung" value="ja" <?= $werte['bestaetigung'] === 'ja' ? 'checked' : '' ?> required<?= feld_attribute('bestaetigung', $fehler, false) ?>><span>Ich habe Zeitraum und Angaben geprüft. <span class="pflicht">(Pflicht)</span></span></label>
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
