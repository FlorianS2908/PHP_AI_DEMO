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
pflicht(['name', 'email', 'budget'], $werte, $fehler);
if ($werte['email'] !== '' && filter_var($werte['email'], FILTER_VALIDATE_EMAIL) === false) {
    $fehler['email'] = 'Bitte eine gültige E-Mail-Adresse eingeben.';
}
text_pruefen('name', $werte['name'], 120, $fehler);
text_pruefen('email', $werte['email'], 254, $fehler);
auswahl_pruefen('zweck', $werte['zweck'], $kataloge['zwecke'], $fehler, false);
auswahl_pruefen('cpu', $werte['cpu'], $kataloge['cpus'], $fehler, false);
auswahl_pruefen('ram', $werte['ram'], $kataloge['ram'], $fehler, false);
auswahl_pruefen('grafik', $werte['grafik'], $kataloge['grafik'], $fehler, false);
auswahl_pruefen('speicher', $werte['speicher'], $kataloge['speicher'], $fehler, false);
liste_pruefen('extras', $werte['extras'], $kataloge['extras'], $fehler, false);
checkbox_pruefen('montage', $werte['montage'], $fehler, false);
text_pruefen('notiz', $werte['notiz'], 800, $fehler);

$budget = budget_pruefen('budget', $werte['budget'], $fehler);
if (!isset($fehler['budget'])) {
    $werte['budget'] = str_replace(',', '.', $werte['budget']);
}
if ($werte['zweck'] === 'gaming') {
    if ($werte['grafik'] === 'integriert') {
        $fehler['grafik'] = 'Für Gaming verlangt diese Demo eine separate Grafikkarte.';
    }
    if (isset($kataloge['ram'][$werte['ram']]) && $kataloge['ram'][$werte['ram']]['gb'] < $regeln['gaming_ram']) {
        $fehler['ram'] = 'Für Gaming verlangt diese Demo mindestens 16 GB Arbeitsspeicher.';
    }
}
if ($werte['zweck'] === 'kreativ' && isset($kataloge['ram'][$werte['ram']]) && $kataloge['ram'][$werte['ram']]['gb'] < $regeln['kreativ_ram']) {
    $fehler['ram'] = 'Für Kreativarbeit verlangt diese Demo mindestens 32 GB Arbeitsspeicher.';
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

$details['Einsatzzweck'] = $kataloge['zwecke'][$werte['zweck']]['label'];
$details['Budget'] = geld($budget);
$zuordnung = ['cpu' => ['cpus', 'Prozessor'], 'ram' => ['ram', 'Arbeitsspeicher'], 'grafik' => ['grafik', 'Grafik'], 'speicher' => ['speicher', 'SSD']];
zeile($positionen, 'Grundsystem (Gehäuse, Mainboard, Netzteil)', 1, $regeln['basispreis']);
foreach ($zuordnung as $feld => $daten) {
    $option = $kataloge[$daten[0]][$werte[$feld]];
    $details[$daten[1]] = $option['label'];
    zeile($positionen, $option['label'], 1, $option['preis']);
}
$details['Extras'] = listen_text($werte['extras'], $kataloge['extras']);
$details['Zusammenbau'] = $werte['montage'] === 'ja' ? 'Ja' : 'Nein';
$details['Hinweise'] = $werte['notiz'] !== '' ? $werte['notiz'] : 'Keine';
foreach ($werte['extras'] as $key) {
    zeile($positionen, $kataloge['extras'][$key]['label'], 1, $kataloge['extras'][$key]['preis']);
}
if ($werte['montage'] === 'ja') {
    zeile($positionen, 'Zusammenbau', 1, $regeln['montagepreis']);
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
