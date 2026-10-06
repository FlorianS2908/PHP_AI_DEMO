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
pflicht(['name', 'email', 'personen'], $werte, $fehler);
if ($werte['email'] !== '' && filter_var($werte['email'], FILTER_VALIDATE_EMAIL) === false) {
    $fehler['email'] = 'Bitte eine gültige E-Mail-Adresse eingeben.';
}
text_pruefen('name', $werte['name'], 120, $fehler);
text_pruefen('email', $werte['email'], 254, $fehler);
auswahl_pruefen('kurs', $werte['kurs'], $kataloge['kurse'], $fehler, false);
auswahl_pruefen('format', $werte['format'], $kataloge['formate'], $fehler, false);
liste_pruefen('extras', $werte['extras'], $kataloge['extras'], $fehler, false);
text_pruefen('notiz', $werte['notiz'], 800, $fehler);
checkbox_pruefen('bestaetigung', $werte['bestaetigung'], $fehler, true);

$personen = ganzzahl_pruefen('personen', $werte['personen'], 1, $regeln['max_personen'], $fehler);
if ($werte['format'] === 'online' && in_array('skript', $werte['extras'], true)) {
    $fehler['extras'] = 'Ein gedrucktes Skript ist in dieser Demo nur bei Teilnahme vor Ort möglich.';
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

$details['Workshop'] = $kataloge['kurse'][$werte['kurs']]['label'];
$details['Teilnahmeform'] = $kataloge['formate'][$werte['format']]['label'];
$details['Personen'] = (string) $personen;
$details['Extras'] = listen_text($werte['extras'], $kataloge['extras']);
$details['Hinweise'] = $werte['notiz'] !== '' ? $werte['notiz'] : 'Keine';
$details['Angaben bestätigt'] = 'Ja';
zeile($positionen, $details['Workshop'], $personen, $kataloge['kurse'][$werte['kurs']]['preis']);
foreach ($werte['extras'] as $key) {
    zeile($positionen, $kataloge['extras'][$key]['label'], $personen, $kataloge['extras'][$key]['preis']);
}

$gesamt = 0;
foreach ($positionen as $position) {
    $gesamt += $position['summe'];
}

// 5. Ergebnisse als HTML ausgeben; alle dynamischen Texte werden maskiert.
require __DIR__ . '/ergebnis.php';
