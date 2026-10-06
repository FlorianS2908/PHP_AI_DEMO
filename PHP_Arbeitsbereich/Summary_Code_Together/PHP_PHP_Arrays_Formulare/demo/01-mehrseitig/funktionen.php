<?php
declare(strict_types=1);

// Zusatzhilfen: Die Fachlogik ist prozedural und verwendet keine eigenen Klassen.
// Werte erst validieren und bei der HTML-Ausgabe kontextgerecht maskieren.
function e(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function euro(int $cent): string
{
    return number_format($cent / 100, 2, ',', '.') . ' €';
}

function startwerte(): array
{
    return [
        'name' => '', 'ziel' => '', 'personen' => 1,
        'extras' => [], 'verpflegung' => 'ohne', 'nachricht' => '',
    ];
}

// unicode-fähige Längenprüfung ohne zusätzliche PHP-Erweiterung.
function text_passt(string $text, int $maxZeichen): bool
{
    return preg_match('/\A.{0,' . $maxZeichen . '}\z/us', $text) === 1;
}

/**
 * Erwartet genau eine Reise-Struktur aus $_POST['reise'].
 * Strings bleiben zunächst Strings; Arrays vor Schleifen auf Form prüfen.
 * Rückgabe: ['ok' => bool, 'werte' => array, 'fehler' => array].
 * Unbekannte Felder (z. B. ein eingeschleuster Preis) werden NICHT übernommen.
 */
function pruefe_reise($eingabe, array $ziele, array $extras, array $verpflegungen): array
{
    $werte = startwerte();
    $fehler = [];
    if (!is_array($eingabe)) {
        return ['ok' => false, 'werte' => $werte,
            'fehler' => ['Es wurde kein gültiges Reise-Array übermittelt. Bitte bei Seite 1 beginnen.']];
    }

    // Kein (string)-Cast auf ungeprüfte Eingaben: ein manipuliertes Feld kann ein Array sein.
    foreach (['name', 'ziel', 'personen', 'verpflegung', 'nachricht'] as $feld) {
        $roh = $eingabe[$feld] ?? null;
        if (!is_string($roh)) {
            $fehler[] = 'Das Feld „' . $feld . '“ fehlt oder ist kein einzelner Textwert.';
            continue;
        }
        $werte[$feld] = trim($roh);
    }

    if ($werte['name'] === '' || !text_passt($werte['name'], 60)) {
        $fehler[] = 'Bitte einen fiktiven Anzeigenamen mit 1 bis 60 Zeichen eingeben.';
    }
    if (!array_key_exists($werte['ziel'], $ziele)) {
        $fehler[] = 'Bitte ein Reiseziel aus dem Katalog wählen.';
    }
    if (!array_key_exists($werte['verpflegung'], $verpflegungen)) {
        $fehler[] = 'Bitte eine angebotene Verpflegung wählen.';
    }
    if (!text_passt($werte['nachricht'], 500)) {
        $fehler[] = 'Die Nachricht darf höchstens 500 Zeichen enthalten und muss gültiger UTF-8-Text sein.';
    }

    // POST liefert bei diesem Formular einen Textwert, keinen fertigen Integer.
    $personen = filter_var($werte['personen'], FILTER_VALIDATE_INT, [
        'options' => ['min_range' => 1, 'max_range' => 6],
    ]);
    if ($personen === false) {
        $fehler[] = 'Die Personenanzahl muss eine ganze Zahl von 1 bis 6 sein.';
        $werte['personen'] = 1; // sicherer Darstellungswert; ok bleibt false!
    } else {
        $werte['personen'] = $personen;
    }

    // Kein ausgewähltes Extra bedeutet: Schlüssel fehlt. Das ist erlaubt.
    $rohExtras = $eingabe['extras'] ?? [];
    if (!is_array($rohExtras)) {
        $fehler[] = 'Extras müssen als Liste übertragen werden (reise[extras][]).';
    } elseif (count($rohExtras) > count($extras)) {
        $fehler[] = 'Es wurden zu viele Extras übermittelt.';
    } else {
        foreach ($rohExtras as $extraId) {
            if (!is_string($extraId) || !array_key_exists($extraId, $extras)) {
                $fehler[] = 'Ein Extra ist unbekannt oder besitzt einen ungültigen Datentyp.';
                continue;
            }
            if (in_array($extraId, $werte['extras'], true)) {
                $fehler[] = 'Dasselbe Extra wurde mehrfach übermittelt.';
                continue;
            }
            $werte['extras'][] = $extraId;
        }
    }
    return ['ok' => count($fehler) === 0, 'werte' => $werte, 'fehler' => $fehler];
}

// Nur NACH erfolgreicher Validierung aufrufen. Keine Preise aus $_POST lesen!
function berechne_reise(array $reise, array $ziele, array $extras, array $verpflegungen): array
{
    $personen = $reise['personen'];
    $positionen = [];
    $proPerson = $ziele[$reise['ziel']]['preis_cent'];
    $positionen[] = [
        'titel' => 'Reise: ' . $ziele[$reise['ziel']]['titel'],
        'einzel_cent' => $proPerson, 'anzahl' => $personen,
        'summe_cent' => $proPerson * $personen,
    ];
    foreach ($reise['extras'] as $extraId) {
        $extra = $extras[$extraId];
        $proPerson += $extra['preis_cent'];
        $positionen[] = [
            'titel' => $extra['titel'], 'einzel_cent' => $extra['preis_cent'],
            'anzahl' => $personen, 'summe_cent' => $extra['preis_cent'] * $personen,
        ];
    }
    $verpflegung = $verpflegungen[$reise['verpflegung']];
    $proPerson += $verpflegung['preis_cent'];
    $positionen[] = [
        'titel' => $verpflegung['titel'], 'einzel_cent' => $verpflegung['preis_cent'],
        'anzahl' => $personen, 'summe_cent' => $verpflegung['preis_cent'] * $personen,
    ];
    return ['positionen' => $positionen, 'pro_person_cent' => $proPerson,
        'gesamt_cent' => $proPerson * $personen];
}

function reise_text(array $reise, array $rechnung, array $ziele, array $extras, array $verpflegungen): string
{
    $extraNamen = [];
    foreach ($reise['extras'] as $id) {
        $extraNamen[] = $extras[$id]['titel'];
    }
    return 'Für: ' . $reise['name'] . "\n"
        . 'Ziel: ' . $ziele[$reise['ziel']]['titel'] . "\n"
        . 'Personen: ' . $reise['personen'] . "\n"
        . 'Extras: ' . ($extraNamen === [] ? 'Keine' : implode(', ', $extraNamen)) . "\n"
        . 'Verpflegung: ' . $verpflegungen[$reise['verpflegung']]['titel'] . "\n"
        . 'Gesamt: ' . euro($rechnung['gesamt_cent']) . "\n\n"
        . 'Nachricht: ' . ($reise['nachricht'] === '' ? 'Keine Nachricht' : $reise['nachricht']);
}

// Reines Rendering; nur die bekannten Felder werden ausgegeben.
// $ohneVerpflegung = true, wenn Seite 2 dieses Feld sichtbar neu anbietet.
function hidden_reise(array $reise, bool $ohneVerpflegung = false): string
{
    $html = '';
    foreach (['name', 'ziel', 'personen', 'verpflegung', 'nachricht'] as $feld) {
        if ($ohneVerpflegung && $feld === 'verpflegung') {
            continue;
        }
        $html .= '<input type="hidden" name="reise[' . $feld . ']" value="'
            . e((string)$reise[$feld]) . '">' . "\n";
    }
    foreach ($reise['extras'] as $id) {
        $html .= '<input type="hidden" name="reise[extras][]" value="' . e($id) . '">' . "\n";
    }
    return $html;
}

function kopf(string $titel, int $schritt): string
{
    $schritte = '';
    foreach ([1 => 'Auswählen', 2 => 'Prüfen & ändern', 3 => 'Auswerten'] as $nummer => $text) {
        $schritte .= '<li' . ($schritt === $nummer ? ' aria-current="step"' : '') . '>'
            . '<span>' . $nummer . '</span>' . e($text) . '</li>';
    }
    return '<!doctype html><html lang="de"><head><meta charset="utf-8">'
        . '<meta name="viewport" content="width=device-width,initial-scale=1">'
        . '<title>' . e($titel) . ' · PHP</title><link rel="stylesheet" href="../../assets/demo.css">'
        . '</head><body><a class="skip" href="#inhalt">Zum Inhalt</a><div class="wrap">'
        . '<header class="app-head"><a class="brand" href="../../index.html"><span class="mark">10a</span>'
        . '<span><small>PHP-LERNWERKSTATT</small><strong>EuroCityTravel</strong></span></a>'
        . '<span class="pill">Demo · ohne Speicher</span></header>'
        . '<ol class="stepper" aria-label="Formularschritte">' . $schritte . '</ol>'
        . '<main id="inhalt"><div class="page-head"><p class="eyebrow">ARRAYS · POST · HTML</p><h1>'
        . e($titel) . '</h1></div>';
}

function fuss(): string
{
    return '</main><footer><strong>Nur Unterrichtsdaten.</strong> Keine Buchung, keine Datenbank, '
        . 'keine Sessions oder Cookies. Alle Preise sind fiktiv. Eine neue Anfrage braucht die Werte erneut.'
        . '</footer></div></body></html>';
}

function fehlerseite(array $fehler, array $reise): string
{
    $html = '<section class="card error" role="alert"><h2>Bitte Eingaben prüfen</h2><ul>';
    foreach ($fehler as $text) {
        $html .= '<li>' . e($text) . '</li>';
    }
    return $html . '</ul></section><form action="auswahl.php" method="post">'
        . hidden_reise($reise) . '<button type="submit">Zurück zum Formular</button></form>';
}
