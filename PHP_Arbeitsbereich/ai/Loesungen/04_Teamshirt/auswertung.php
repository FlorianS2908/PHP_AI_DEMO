<?php
declare(strict_types=1);
require __DIR__ . '/daten.php';
require __DIR__ . '/funktionen.php';
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store');

// Ein direkter Aufruf ohne Formular führt zur Eingabe zurück.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php', true, 303);
    exit;
}

// 1. Alle Felder einlesen. Unerwartete Datentypen erzeugen Feldfehler.
$werte = [];
$fehler = [];
foreach ($standard as $feld => $startwert) {
    $werte[$feld] = is_array($startwert) ? post_liste($feld, $fehler) : post_text($feld, $fehler);
}

// 2. Alle Prüfungen sammeln; nicht schon beim ersten Fehler abbrechen.
pflicht(['name', 'email', 'menge', 'farbe', 'wunschtermin'], $werte, $fehler);
if ($werte['email'] !== '' && filter_var($werte['email'], FILTER_VALIDATE_EMAIL) === false) {
    $fehler['email'] = 'Bitte eine gültige E-Mail-Adresse eingeben.';
}
text_pruefen('name', $werte['name'], 120, $fehler);
text_pruefen('email', $werte['email'], 254, $fehler);
auswahl_pruefen('modell', $werte['modell'], $kataloge['modelle'], $fehler, false);
auswahl_pruefen('groesse', $werte['groesse'], $kataloge['groessen'], $fehler, false);
checkbox_pruefen('druck', $werte['druck'], $fehler, false);
text_pruefen('drucktext', $werte['drucktext'], 30, $fehler);
auswahl_pruefen('druckposition', $werte['druckposition'], $kataloge['druckpositionen'], $fehler, true);
liste_pruefen('extras', $werte['extras'], $kataloge['extras'], $fehler, false);
text_pruefen('notiz', $werte['notiz'], 800, $fehler);

$menge = ganzzahl_pruefen('menge', $werte['menge'], 1, $regeln['max_menge'], $fehler);
if (!preg_match('/\A#[0-9a-fA-F]{6}\z/', $werte['farbe'])) {
    $fehler['farbe'] = 'Bitte einen gültigen Farbwert auswählen.';
}
$termin = datum_pruefen('wunschtermin', $werte['wunschtermin'], 'Y-m-d', $fehler);
$fruehestens = (new DateTimeImmutable('today'))->modify('+' . $regeln['vorlauf_tage'] . ' days');
if ($termin !== null && $termin < $fruehestens) {
    $fehler['wunschtermin'] = 'Der früheste Liefertermin ist der ' . $fruehestens->format('d.m.Y') . '.';
}
if ($werte['druck'] === 'ja') {
    pflicht(['drucktext', 'druckposition'], $werte, $fehler);
    auswahl_pruefen('druckposition', $werte['druckposition'], $kataloge['druckpositionen'], $fehler);
}

// 3. Erst nach sämtlichen Prüfungen entscheiden.
if ($fehler !== []) {
    fehler_zurueck($werte, $fehler);
    http_response_code(422);
    // Dieselbe Formularansicht erneut rendern, ohne Session und ohne Daten in der URL.
    require __DIR__ . '/formular.php';
    exit;
}

// 4. Ausschließlich geprüfte Daten auswerten. Preise stammen nie aus $_POST.
$details = ['Kontaktperson' => $werte['name'], 'E-Mail' => $werte['email']];
$positionen = [];
$warnungen = [];

$details['Modell'] = $kataloge['modelle'][$werte['modell']]['label'];
$details['Stückzahl'] = (string) $menge;
$details['Größe'] = $kataloge['groessen'][$werte['groesse']]['label'];
$details['Farbcode'] = $werte['farbe'];
$details['Lieferwunsch'] = $termin->format('d.m.Y');
$details['Druck'] = $werte['druck'] === 'ja' ? 'Ja' : 'Nein';
$details['Drucktext'] = $werte['druck'] === 'ja' ? $werte['drucktext'] : 'Entfällt';
$details['Druckposition'] = $werte['druck'] === 'ja' ? $kataloge['druckpositionen'][$werte['druckposition']]['label'] : 'Entfällt';
$details['Extras'] = listen_text($werte['extras'], $kataloge['extras']);
$details['Hinweise'] = $werte['notiz'] !== '' ? $werte['notiz'] : 'Keine';
$farbwert = $werte['farbe']; // Nur zuvor per Whitelist-Format validierter CSS-Farbwert.
$grundpreis = $kataloge['modelle'][$werte['modell']]['preis'];
zeile($positionen, $details['Modell'], $menge, $grundpreis);
if ($menge >= $regeln['rabatt_ab']) {
    $rabatt = (int) round($menge * $grundpreis * $regeln['rabatt_prozent'] / 100);
    zeile($positionen, 'Mengenrabatt (' . $regeln['rabatt_prozent'] . ' % auf Shirt-Grundpreise)', 1, -$rabatt);
}
if ($werte['druck'] === 'ja') {
    zeile($positionen, 'Textdruck', $menge, $regeln['druckpreis']);
} elseif ($werte['drucktext'] !== '' || $werte['druckposition'] !== '') {
    $warnungen[] = 'Drucktext und Druckposition wurden nicht übernommen, weil kein Druck gewählt wurde.';
}
foreach ($werte['extras'] as $key) {
    zeile($positionen, $kataloge['extras'][$key]['label'], $menge, $kataloge['extras'][$key]['preis']);
}

$gesamt = 0;
foreach ($positionen as $position) {
    $gesamt += $position['summe'];
}

// 5. Ergebnisse als HTML ausgeben; alle dynamischen Texte werden maskiert.
require __DIR__ . '/ergebnis.php';
