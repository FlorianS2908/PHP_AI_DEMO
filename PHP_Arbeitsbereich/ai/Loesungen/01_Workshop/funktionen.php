<?php
declare(strict_types=1);

// Kleine, bewusst getrennte Helfer. Die Fachregeln stehen in auswertung.php.
function e(string $text): string
{
    return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
function geld(int $cent): string
{
    return number_format($cent / 100, 2, ',', '.') . ' €';
}
function textlaenge(string $text): int
{
    // Funktioniert auch ohne die optionale mbstring-Erweiterung.
    $anzahl = preg_match_all('/./us', $text);
    return $anzahl === false ? strlen($text) : $anzahl;
}
function post_text(string $feld, array &$fehler): string
{
    if (!isset($_POST[$feld])) {
        return '';
    }
    if (!is_string($_POST[$feld])) {
        $fehler[$feld] = 'Bitte einen einzelnen Wert übermitteln, keine Liste.';
        return '';
    }
    if (!preg_match('//u', $_POST[$feld])) {
        $fehler[$feld] = 'Bitte gültigen UTF-8-Text eingeben.';
        return '';
    }
    return trim($_POST[$feld]);
}
function post_liste(string $feld, array &$fehler): array
{
    if (!isset($_POST[$feld])) {
        return []; // Nicht ausgewählte Checkbox-Gruppen werden nicht gesendet.
    }
    if (!is_array($_POST[$feld])) {
        $fehler[$feld] = 'Bitte die vorgesehenen Auswahlkästchen verwenden.';
        return [];
    }
    $auswahl = [];
    foreach ($_POST[$feld] as $wert) {
        if (!is_string($wert) || !preg_match('//u', $wert)) {
            $fehler[$feld] = 'Die Auswahl enthält einen ungültigen Wert.';
            continue;
        }
        $auswahl[] = trim($wert);
    }
    return array_values(array_unique($auswahl)); // Doppelte Optionen nicht doppelt berechnen.
}
function pflicht(array $felder, array $werte, array &$fehler): void
{
    foreach ($felder as $feld) {
        // Anders als empty() verwechselt dies die Zeichenfolge "0" nicht mit leer.
        if ($werte[$feld] === '' && !isset($fehler[$feld])) {
            $fehler[$feld] = 'Bitte dieses Pflichtfeld ausfüllen.';
        }
    }
}
function text_pruefen(string $feld, string $wert, int $max, array &$fehler): void
{
    if (textlaenge($wert) > $max) {
        $fehler[$feld] = 'Bitte höchstens ' . $max . ' Zeichen eingeben.';
    }
}
function auswahl_pruefen(string $feld, string $wert, array $katalog, array &$fehler, bool $optional = false): void
{
    if ($optional && $wert === '') {
        return;
    }
    if (!array_key_exists($wert, $katalog)) {
        $fehler[$feld] = 'Bitte einen angebotenen Eintrag auswählen.';
    }
}
function liste_pruefen(string $feld, array $werte, array $katalog, array &$fehler, bool $pflicht = false): void
{
    if ($pflicht && $werte === []) {
        $fehler[$feld] = 'Bitte mindestens eine Option auswählen.';
    }
    foreach ($werte as $wert) {
        if (!array_key_exists($wert, $katalog)) {
            $fehler[$feld] = 'Bitte ausschließlich angebotene Optionen auswählen.';
        }
    }
}
function checkbox_pruefen(string $feld, string $wert, array &$fehler, bool $pflicht = false): void
{
    if ($wert !== '' && $wert !== 'ja') {
        $fehler[$feld] = 'Das Auswahlkästchen enthält einen ungültigen Wert.';
    } elseif ($pflicht && $wert !== 'ja') {
        $fehler[$feld] = 'Bitte diese Angabe bestätigen.';
    }
}
function ganzzahl_pruefen(string $feld, string $wert, int $min, int $max, array &$fehler): int
{
    $zahl = filter_var($wert, FILTER_VALIDATE_INT, ['options' => ['min_range' => $min, 'max_range' => $max]]);
    if ($zahl === false) {
        $fehler[$feld] = 'Bitte eine ganze Zahl von ' . $min . ' bis ' . $max . ' eingeben.';
        return 0;
    }
    return $zahl;
}
function budget_pruefen(string $feld, string $wert, array &$fehler): int
{
    // Euro werden nur an der Eingabegrenze in Cent umgewandelt.
    if (!preg_match('/\A\d{1,6}(?:[.,]\d{1,2})?\z/', $wert)) {
        $fehler[$feld] = 'Bitte einen positiven Eurobetrag mit höchstens zwei Nachkommastellen eingeben.';
        return 0;
    }
    $teile = explode('.', str_replace(',', '.', $wert));
    $cent = ((int) $teile[0]) * 100 + (int) str_pad($teile[1] ?? '', 2, '0');
    if ($cent <= 0) {
        $fehler[$feld] = 'Bitte ein Budget größer als null eingeben.';
    }
    return $cent;
}
function datum_pruefen(string $feld, string $wert, string $format, array &$fehler): ?DateTimeImmutable
{
    // Nullbytes aus manipulierten Requests vor dem Parser abweisen.
    // So entsteht eine Feldmeldung statt eines ValueError.
    if (strpos($wert, "\0") !== false) {
        $fehler[$feld] = 'Bitte ein gültiges Datum bzw. eine gültige Uhrzeit eingeben.';
        return null;
    }
    $datum = DateTimeImmutable::createFromFormat('!' . $format, $wert);
    // Der Rückvergleich erkennt auch scheinbare Daten wie den 31. Februar.
    if (!$datum || $datum->format($format) !== $wert) {
        $fehler[$feld] = 'Bitte ein gültiges Datum bzw. eine gültige Uhrzeit eingeben.';
        return null;
    }
    return $datum;
}
function feld_attribute(string $feld, array $fehler, bool $hinweis = false): string
{
    $ids = $hinweis ? [$feld . '-hinweis'] : [];
    $attribute = '';
    if (isset($fehler[$feld])) {
        $attribute .= ' aria-invalid="true"';
        $ids[] = $feld . '-fehler';
    }
    if ($ids !== []) {
        $attribute .= ' aria-describedby="' . e(implode(' ', $ids)) . '"';
    }
    return $attribute;
}
function feldfehler(string $feld, array $fehler): string
{
    if (!isset($fehler[$feld])) {
        return '';
    }
    return '<p class="feldfehler" id="' . e($feld) . '-fehler">' . icon('warning') . '<span>' . e($fehler[$feld]) . '</span></p>';
}
function fehler_zurueck(array &$werte, array $fehler): void
{
    // Gültige Werte bleiben erhalten; fehlerhafte Eingaben werden geleert.
    foreach ($fehler as $feld => $meldung) {
        if (array_key_exists($feld, $werte)) {
            $werte[$feld] = is_array($werte[$feld]) ? [] : '';
        }
    }
}
function listen_text(array $auswahl, array $katalog): string
{
    $texte = [];
    foreach ($auswahl as $key) {
        $texte[] = $katalog[$key]['label'];
    }
    return $texte === [] ? 'Keine' : implode(', ', $texte);
}
function zeile(array &$positionen, string $text, int $anzahl, int $einzel): void
{
    $positionen[] = ['text' => $text, 'anzahl' => $anzahl, 'einzel' => $einzel, 'summe' => $anzahl * $einzel];
}
function icon(string $name): string
{
    // Eigene lokale SVG-Symbole: keine Bibliothek, kein CDN, kein Download.
    $pfade = [
        'book' => '<path d="M3 4h7l2 2 2-2h7v15h-7l-2 2-2-2H3z"/><path d="M12 6v15"/>',
        'user' => '<circle cx="12" cy="7" r="4"/><path d="M4 21v-3a8 8 0 0 1 16 0v3"/>',
        'message' => '<path d="M3 4h18v13H8l-5 4z"/><path d="M7 8h10M7 12h7"/>',
        'bike' => '<circle cx="5" cy="17" r="4"/><circle cx="19" cy="17" r="4"/><path d="m5 17 5-9 5 9H5m5-9h7l2 9M8 5h4M16 4h3v4"/>',
        'room' => '<path d="M3 21h18M6 21V3h12v18M10 7h4M10 11h4M10 21v-6h4v6"/>',
        'shirt' => '<path d="m8 3-6 4 3 5 3-2v11h8V10l3 2 3-5-6-4c-1 4-7 4-8 0z"/>',
        'settings' => '<path d="M4 6h16M4 12h16M4 18h16"/><circle cx="8" cy="6" r="2"/><circle cx="16" cy="12" r="2"/><circle cx="10" cy="18" r="2"/>',
        'chip' => '<rect x="6" y="6" width="12" height="12" rx="1"/><path d="M9 2v4M15 2v4M9 18v4M15 18v4M2 9h4M2 15h4M18 9h4M18 15h4"/><rect x="9" y="9" width="6" height="6"/>',
        'memory' => '<rect x="2" y="6" width="20" height="11" rx="1"/><path d="M5 17v3M9 17v3M15 17v3M19 17v3M5 9h4v5H5zM15 9h4v5h-4z"/>',
        'storage' => '<rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="12" cy="11" r="5"/><path d="m12 11 5 6M6 18h2"/>',
        'monitor' => '<rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/>',
        'warning' => '<path d="m12 3 10 18H2zM12 9v5M12 17v1"/>',
        'check' => '<circle cx="12" cy="12" r="10"/><path d="m7 12 3 3 7-7"/>',
        'arrow' => '<path d="M3 12h18m-6-6 6 6-6 6"/>',
    ];
    return '<svg class="icon" viewBox="0 0 24 24" aria-hidden="true" focusable="false" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">' . ($pfade[$name] ?? $pfade['check']) . '</svg>';
}
