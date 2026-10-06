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
pflicht(['name', 'email', 'abgabe', 'budget', 'beschreibung'], $werte, $fehler);
if ($werte['email'] !== '' && filter_var($werte['email'], FILTER_VALIDATE_EMAIL) === false) {
    $fehler['email'] = 'Bitte eine gültige E-Mail-Adresse eingeben.';
}
text_pruefen('name', $werte['name'], 120, $fehler);
text_pruefen('email', $werte['email'], 254, $fehler);
auswahl_pruefen('kontaktweg', $werte['kontaktweg'], $kataloge['kontaktwege'], $fehler, false);
text_pruefen('telefon', $werte['telefon'], 40, $fehler);
auswahl_pruefen('radtyp', $werte['radtyp'], $kataloge['typen'], $fehler, false);
liste_pruefen('leistungen', $werte['leistungen'], $kataloge['leistungen'], $fehler, true);
auswahl_pruefen('prioritaet', $werte['prioritaet'], $kataloge['prioritaeten'], $fehler, false);
text_pruefen('beschreibung', $werte['beschreibung'], 1200, $fehler);

$budget = budget_pruefen('budget', $werte['budget'], $fehler);
if (!isset($fehler['budget'])) {
    $werte['budget'] = str_replace(',', '.', $werte['budget']);
}
$abgabe = datum_pruefen('abgabe', $werte['abgabe'], 'Y-m-d', $fehler);
if ($abgabe !== null && $abgabe < new DateTimeImmutable('today')) {
    $fehler['abgabe'] = 'Der Abgabetag darf nicht in der Vergangenheit liegen.';
}
if ($werte['kontaktweg'] === 'telefon' && $werte['telefon'] === '') {
    $fehler['telefon'] = 'Bitte für einen telefonischen Rückruf eine Telefonnummer angeben.';
}
if ($werte['telefon'] !== '') {
    $ziffern = preg_replace('/\D/', '', $werte['telefon']);
    if (!preg_match('/\A\+?[0-9 ()\/-]+\z/', $werte['telefon']) || strlen($ziffern) < $regeln['telefon_min'] || strlen($ziffern) > $regeln['telefon_max']) {
        $fehler['telefon'] = 'Bitte eine Telefonnummer mit 6 bis 20 Ziffern und üblichen Trennzeichen eingeben.';
    }
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

$details['Kontaktweg'] = $kataloge['kontaktwege'][$werte['kontaktweg']]['label'];
$details['Telefon'] = $werte['telefon'] !== '' ? $werte['telefon'] : 'Nicht angegeben';
$details['Fahrradtyp'] = $kataloge['typen'][$werte['radtyp']]['label'];
$details['Abgabe'] = $abgabe->format('d.m.Y');
$details['Arbeiten'] = listen_text($werte['leistungen'], $kataloge['leistungen']);
$details['Bearbeitung'] = $kataloge['prioritaeten'][$werte['prioritaet']]['label'];
$details['Beschreibung'] = $werte['beschreibung'];
$details['Budget'] = geld($budget);
foreach ($werte['leistungen'] as $key) {
    zeile($positionen, $kataloge['leistungen'][$key]['label'], 1, $kataloge['leistungen'][$key]['preis']);
}
if ($werte['prioritaet'] === 'express') {
    zeile($positionen, 'Expresszuschlag', 1, $kataloge['prioritaeten']['express']['preis']);
}

$gesamt = 0;
foreach ($positionen as $position) {
    $gesamt += $position['summe'];
}
if ($gesamt > $budget) {
    $warnungen[] = 'Die Summe liegt ' . geld($gesamt - $budget) . ' über deinem Budget.';
} else {
    $details['Verbleibendes Budget'] = geld($budget - $gesamt);
}

// 5. Ergebnisse als HTML ausgeben; alle dynamischen Texte werden maskiert.
require __DIR__ . '/ergebnis.php';
