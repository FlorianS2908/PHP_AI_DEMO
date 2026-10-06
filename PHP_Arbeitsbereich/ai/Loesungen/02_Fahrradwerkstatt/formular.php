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
<section class="card section-1" aria-labelledby="abschnitt-1"><h2 id="abschnitt-1"><?= icon('user') ?> Kontakt und Rückmeldung</h2>
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
<div class="feld feld-kontaktweg wide">
<fieldset class="auswahl" id="kontaktweg" tabindex="-1"<?= feld_attribute('kontaktweg', $fehler, false) ?>>
<legend>Gewünschter Kontaktweg <span class="pflicht">(Pflicht)</span></legend>
<div class="optionen">
<?php foreach ($kataloge['kontaktwege'] as $key => $option): ?>
<label class="option" for="kontaktweg-<?= e($key) ?>"><input id="kontaktweg-<?= e($key) ?>" type="radio" name="kontaktweg" value="<?= e($key) ?>" <?= $werte['kontaktweg'] === $key ? 'checked' : '' ?> required><span><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></span></label>
<?php endforeach; ?>
</div></fieldset>
<?= feldfehler('kontaktweg', $fehler) ?>
</div>
<div class="feld feld-telefon">
<label for="telefon">Telefonnummer <span class="pflicht">(bedingt Pflicht)</span></label>
<input id="telefon" name="telefon" type="tel" value="<?= e($werte['telefon']) ?>" autocomplete="tel"<?= feld_attribute('telefon', $fehler, true) ?>>
<p class="hinweis" id="telefon-hinweis">Pflicht, wenn du telefonisch kontaktiert werden möchtest.</p>
<?= feldfehler('telefon', $fehler) ?>
</div>
</div></section>
<section class="card section-2" aria-labelledby="abschnitt-2"><h2 id="abschnitt-2"><?= icon('bike') ?> Fahrrad und Auftrag</h2>
<div class="fields">
<div class="feld feld-radtyp">
<label for="radtyp">Fahrradtyp <span class="pflicht">(Pflicht)</span></label>
<select id="radtyp" name="radtyp" required<?= feld_attribute('radtyp', $fehler, false) ?>>
<option value="">Bitte auswählen</option>
<?php foreach ($kataloge['typen'] as $key => $option): ?>
<option value="<?= e($key) ?>" <?= $werte['radtyp'] === $key ? 'selected' : '' ?>><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></option>
<?php endforeach; ?>
</select>
<?= feldfehler('radtyp', $fehler) ?>
</div>
<div class="feld feld-abgabe">
<label for="abgabe">Gewünschter Abgabetag <span class="pflicht">(Pflicht)</span></label>
<input id="abgabe" name="abgabe" type="date" value="<?= e($werte['abgabe']) ?>" required min="<?= date('Y-m-d') ?>"<?= feld_attribute('abgabe', $fehler, false) ?>>
<?= feldfehler('abgabe', $fehler) ?>
</div>
<div class="feld feld-leistungen wide">
<fieldset class="auswahl" id="leistungen" tabindex="-1"<?= feld_attribute('leistungen', $fehler, true) ?>>
<legend>Gewünschte Arbeiten <span class="pflicht">(optional)</span></legend>
<div class="optionen">
<?php foreach ($kataloge['leistungen'] as $key => $option): ?>
<label class="option" for="leistungen-<?= e($key) ?>"><input id="leistungen-<?= e($key) ?>" type="checkbox" name="leistungen[]" value="<?= e($key) ?>" <?= in_array($key, $werte['leistungen'], true) ? 'checked' : '' ?>><span><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></span></label>
<?php endforeach; ?>
</div></fieldset>
<p class="hinweis" id="leistungen-hinweis">Wähle mindestens eine Leistung.</p>
<?= feldfehler('leistungen', $fehler) ?>
</div>
<div class="feld feld-prioritaet wide">
<fieldset class="auswahl" id="prioritaet" tabindex="-1"<?= feld_attribute('prioritaet', $fehler, false) ?>>
<legend>Bearbeitung <span class="pflicht">(Pflicht)</span></legend>
<div class="optionen">
<?php foreach ($kataloge['prioritaeten'] as $key => $option): ?>
<label class="option" for="prioritaet-<?= e($key) ?>"><input id="prioritaet-<?= e($key) ?>" type="radio" name="prioritaet" value="<?= e($key) ?>" <?= $werte['prioritaet'] === $key ? 'checked' : '' ?> required><span><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></span></label>
<?php endforeach; ?>
</div></fieldset>
<?= feldfehler('prioritaet', $fehler) ?>
</div>
</div></section>
<section class="card section-3" aria-labelledby="abschnitt-3"><h2 id="abschnitt-3"><?= icon('message') ?> Beschreibung und Budget</h2>
<div class="fields">
<div class="feld feld-budget">
<label for="budget">Persönliche Budgetgrenze in Euro <span class="pflicht">(Pflicht)</span></label>
<input id="budget" name="budget" type="number" value="<?= e($werte['budget']) ?>" required min="0.01" max="999999.99" step="0.01"<?= feld_attribute('budget', $fehler, false) ?>>
<?= feldfehler('budget', $fehler) ?>
</div>
<div class="feld feld-beschreibung wide">
<label for="beschreibung">Was soll geprüft oder repariert werden? <span class="pflicht">(Pflicht)</span></label>
<textarea id="beschreibung" name="beschreibung" rows="4" required maxlength="1200"<?= feld_attribute('beschreibung', $fehler, false) ?>><?= e($werte['beschreibung']) ?></textarea>
<?= feldfehler('beschreibung', $fehler) ?>
</div>
</div></section>
<div class="actions"><button class="button" type="submit"><?= e($app['cta']) ?> <?= icon('arrow') ?></button><a href="index.php">Eingaben verwerfen und neu beginnen</a></div>
</form>
<aside class="card aside"><h2><?= icon('message') ?> <?= e($app['hinttitle']) ?></h2><p><?= e($app['hint']) ?></p><p class="hinweis">Pflichtfelder sind gekennzeichnet. Es werden keine E-Mails versendet und keine Daten gespeichert.</p></aside>
</div>
<footer>Unterrichtsdemo · HTML, CSS Grid und PHP · Fiktive Preise und Regeln · Kein JavaScript erforderlich</footer>
</main>
</body></html>
