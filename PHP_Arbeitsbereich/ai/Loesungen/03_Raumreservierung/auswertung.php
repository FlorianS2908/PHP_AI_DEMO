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
pflicht(['name', 'email', 'personen', 'beginn', 'ende'], $werte, $fehler);
if ($werte['email'] !== '' && filter_var($werte['email'], FILTER_VALIDATE_EMAIL) === false) {
    $fehler['email'] = 'Bitte eine gültige E-Mail-Adresse eingeben.';
}
text_pruefen('name', $werte['name'], 120, $fehler);
text_pruefen('email', $werte['email'], 254, $fehler);
auswahl_pruefen('raum', $werte['raum'], $kataloge['raeume'], $fehler, false);
auswahl_pruefen('bestuhlung', $werte['bestuhlung'], $kataloge['bestuhlungen'], $fehler, false);
liste_pruefen('ausstattung', $werte['ausstattung'], $kataloge['ausstattung'], $fehler, false);
text_pruefen('notiz', $werte['notiz'], 800, $fehler);
checkbox_pruefen('bestaetigung', $werte['bestaetigung'], $fehler, true);

$personen = ganzzahl_pruefen('personen', $werte['personen'], 1, $regeln['max_personen'], $fehler);
$beginn = datum_pruefen('beginn', $werte['beginn'], 'Y-m-d\TH:i', $fehler);
$ende = datum_pruefen('ende', $werte['ende'], 'Y-m-d\TH:i', $fehler);
if ($beginn !== null && $beginn < new DateTimeImmutable('now')) {
    $fehler['beginn'] = 'Der Beginn darf nicht in der Vergangenheit liegen.';
}
if ($beginn !== null && $ende !== null) {
    $sekunden = $ende->getTimestamp() - $beginn->getTimestamp();
    if ($sekunden <= 0) {
        $fehler['ende'] = 'Das Ende muss nach dem Beginn liegen.';
    } elseif ($sekunden > $regeln['max_stunden'] * 3600) {
        $fehler['ende'] = 'Die Reservierung darf höchstens 8 tatsächliche Stunden dauern.';
    }
}
if (!isset($fehler['raum']) && !isset($fehler['personen']) && isset($kataloge['raeume'][$werte['raum']]) && $personen > $kataloge['raeume'][$werte['raum']]['kapazitaet']) {
    $fehler['personen'] = 'Der gewählte Raum bietet höchstens ' . $kataloge['raeume'][$werte['raum']]['kapazitaet'] . ' Plätze.';
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

$minuten = (int) (($ende->getTimestamp() - $beginn->getTimestamp()) / 60);
$stunden = (int) ceil($minuten / 60);
$details['Raum'] = $kataloge['raeume'][$werte['raum']]['label'];
$details['Personen'] = (string) $personen;
$details['Beginn'] = $beginn->format('d.m.Y H:i');
$details['Ende'] = $ende->format('d.m.Y H:i');
$details['Dauer'] = intdiv($minuten, 60) . ' Std. ' . ($minuten % 60) . ' Min.';
$details['Abgerechnete Stunden'] = (string) $stunden;
$details['Bestuhlung'] = $kataloge['bestuhlungen'][$werte['bestuhlung']]['label'];
$details['Ausstattung'] = listen_text($werte['ausstattung'], $kataloge['ausstattung']);
$details['Hinweise'] = $werte['notiz'] !== '' ? $werte['notiz'] : 'Keine';
$details['Angaben bestätigt'] = 'Ja';
zeile($positionen, $details['Raum'] . ' / angefangene Stunde', $stunden, $kataloge['raeume'][$werte['raum']]['preis']);
foreach ($werte['ausstattung'] as $key) {
    zeile($positionen, $kataloge['ausstattung'][$key]['label'], 1, $kataloge['ausstattung'][$key]['preis']);
}

$gesamt = 0;
foreach ($positionen as $position) {
    $gesamt += $position['summe'];
}

// 5. Ergebnisse als HTML ausgeben; alle dynamischen Texte werden maskiert.
require __DIR__ . '/ergebnis.php';
