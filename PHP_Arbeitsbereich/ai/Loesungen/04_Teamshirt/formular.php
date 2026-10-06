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
<section class="card section-2" aria-labelledby="abschnitt-2"><h2 id="abschnitt-2"><?= icon('shirt') ?> Modell und Gestaltung</h2>
<div class="fields">
<div class="feld feld-modell">
<label for="modell">Shirt-Modell <span class="pflicht">(Pflicht)</span></label>
<select id="modell" name="modell" required<?= feld_attribute('modell', $fehler, false) ?>>
<option value="">Bitte auswählen</option>
<?php foreach ($kataloge['modelle'] as $key => $option): ?>
<option value="<?= e($key) ?>" <?= $werte['modell'] === $key ? 'selected' : '' ?>><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></option>
<?php endforeach; ?>
</select>
<?= feldfehler('modell', $fehler) ?>
</div>
<div class="feld feld-menge">
<label for="menge">Stückzahl <span class="pflicht">(Pflicht)</span></label>
<input id="menge" name="menge" type="number" value="<?= e($werte['menge']) ?>" required min="1" max="200" step="1"<?= feld_attribute('menge', $fehler, false) ?>>
<?= feldfehler('menge', $fehler) ?>
</div>
<div class="feld feld-groesse wide">
<fieldset class="auswahl" id="groesse" tabindex="-1"<?= feld_attribute('groesse', $fehler, false) ?>>
<legend>Größe <span class="pflicht">(Pflicht)</span></legend>
<div class="optionen">
<?php foreach ($kataloge['groessen'] as $key => $option): ?>
<label class="option" for="groesse-<?= e($key) ?>"><input id="groesse-<?= e($key) ?>" type="radio" name="groesse" value="<?= e($key) ?>" <?= $werte['groesse'] === $key ? 'checked' : '' ?> required><span><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></span></label>
<?php endforeach; ?>
</div></fieldset>
<?= feldfehler('groesse', $fehler) ?>
</div>
<div class="feld feld-farbe">
<label for="farbe">Gewünschte Stofffarbe <span class="pflicht">(Pflicht)</span></label>
<input id="farbe" name="farbe" type="color" value="<?= e($werte['farbe']) ?>" required<?= feld_attribute('farbe', $fehler, true) ?>>
<p class="hinweis" id="farbe-hinweis">Die Farbe wird auf der Ergebnisseite als Muster und Farbcode gezeigt.</p>
<?= feldfehler('farbe', $fehler) ?>
</div>
<div class="feld feld-wunschtermin">
<label for="wunschtermin">Gewünschter Liefertermin <span class="pflicht">(Pflicht)</span></label>
<input id="wunschtermin" name="wunschtermin" type="date" value="<?= e($werte['wunschtermin']) ?>" required min="<?= (new DateTimeImmutable('today +7 days'))->format('Y-m-d') ?>"<?= feld_attribute('wunschtermin', $fehler, false) ?>>
<?= feldfehler('wunschtermin', $fehler) ?>
</div>
</div></section>
<section class="card section-3" aria-labelledby="abschnitt-3"><h2 id="abschnitt-3"><?= icon('settings') ?> Druck und Extras</h2>
<div class="fields">
<div class="feld feld-druck wide">
<label class="option" for="druck"><input id="druck" type="checkbox" name="druck" value="ja" <?= $werte['druck'] === 'ja' ? 'checked' : '' ?><?= feld_attribute('druck', $fehler, false) ?>><span>Shirts mit individuellem Text bedrucken <span class="pflicht">(optional)</span></span></label>
<?= feldfehler('druck', $fehler) ?>
</div>
<div class="feld feld-drucktext">
<label for="drucktext">Drucktext <span class="pflicht">(bedingt Pflicht)</span></label>
<input id="drucktext" name="drucktext" type="text" value="<?= e($werte['drucktext']) ?>" maxlength="30"<?= feld_attribute('drucktext', $fehler, true) ?>>
<p class="hinweis" id="drucktext-hinweis">Nur bei gewähltem Druck erforderlich; höchstens 30 Zeichen.</p>
<?= feldfehler('drucktext', $fehler) ?>
</div>
<div class="feld feld-druckposition">
<label for="druckposition">Druckposition <span class="pflicht">(bedingt Pflicht)</span></label>
<select id="druckposition" name="druckposition"<?= feld_attribute('druckposition', $fehler, true) ?>>
<option value="">Bitte auswählen</option>
<?php foreach ($kataloge['druckpositionen'] as $key => $option): ?>
<option value="<?= e($key) ?>" <?= $werte['druckposition'] === $key ? 'selected' : '' ?>><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></option>
<?php endforeach; ?>
</select>
<p class="hinweis" id="druckposition-hinweis">Nur bei gewähltem Druck erforderlich.</p>
<?= feldfehler('druckposition', $fehler) ?>
</div>
<div class="feld feld-extras wide">
<fieldset class="auswahl" id="extras" tabindex="-1"<?= feld_attribute('extras', $fehler, false) ?>>
<legend>Zusätzliche Optionen <span class="pflicht">(optional)</span></legend>
<div class="optionen">
<?php foreach ($kataloge['extras'] as $key => $option): ?>
<label class="option" for="extras-<?= e($key) ?>"><input id="extras-<?= e($key) ?>" type="checkbox" name="extras[]" value="<?= e($key) ?>" <?= in_array($key, $werte['extras'], true) ? 'checked' : '' ?>><span><?= e($option['label']) ?><?php if ($option['preis'] > 0): ?> · <?= e(geld($option['preis'])) ?><?php endif; ?></span></label>
<?php endforeach; ?>
</div></fieldset>
<?= feldfehler('extras', $fehler) ?>
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
