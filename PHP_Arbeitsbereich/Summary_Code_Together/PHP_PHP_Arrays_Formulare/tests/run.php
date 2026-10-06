<?php
declare(strict_types=1);
// Nur per CLI: php tests/run.php. Keine Datenbank, kein Browser erforderlich.
if (PHP_SAPI !== 'cli') {
    http_response_code(403);
    exit('Diese Prüfdatei ist ausschließlich für die lokale Kommandozeile.');
}
require __DIR__ . '/../demo/01-mehrseitig/katalog.php';
require __DIR__ . '/../demo/01-mehrseitig/funktionen.php';
error_reporting(E_ALL);
set_error_handler(function (int $severity, string $message, string $file, int $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});
$tests = [];
function test(string $name, bool $ok): void
{
    global $tests;
    $tests[] = ['test' => $name, 'ok' => $ok];
}
$basis = [
    'name' => 'Alex Beispiel', 'ziel' => 'paris', 'personen' => '2',
    'extras' => ['museum', 'tour'], 'verpflegung' => 'fruehstueck',
    'nachricht' => "Erste Zeile\nZweite Zeile",
];
function pruefung($eingabe): array
{
    global $ziele, $extras, $verpflegungen;
    return pruefe_reise($eingabe, $ziele, $extras, $verpflegungen);
}
$p = pruefung($basis);
test('Normale Auswahl gültig', $p['ok']);
test('Personenzahl wird Integer', $p['werte']['personen'] === 2);
$r = berechne_reise($p['werte'], $ziele, $extras, $verpflegungen);
test('Rechnung Paris, 2, Museum + Tour + Frühstück', $r['gesamt_cent'] === 50800);
test('Vier korrekte Rechnungspositionen', count($r['positionen']) === 4);
test('Positionssumme entspricht Gesamt', array_sum(array_column($r['positionen'], 'summe_cent')) === $r['gesamt_cent']);
test('Formatierte Summe', euro(50800) === '508,00 €');
$neu = $basis; $neu['verpflegung'] = 'halbpension';
$p = pruefung($neu); $r = berechne_reise($p['werte'], $ziele, $extras, $verpflegungen);
test('Änderung Halbpension ergibt 54400 Cent', $r['gesamt_cent'] === 54400);
$neu = $basis; unset($neu['extras']); $p = pruefung($neu);
test('Fehlende Extras sind eine gültige leere Liste', $p['ok'] && $p['werte']['extras'] === []);
$neu['extras'] = []; test('Explizit leere Extras gültig', pruefung($neu)['ok']);
$neu = $basis; $neu['name'] = '  Änne Beispiel  '; $p = pruefung($neu);
test('Trim und UTF-8-Name', $p['ok'] && $p['werte']['name'] === 'Änne Beispiel');
$neu = $basis; $neu['nachricht'] = str_repeat('ü', 500);
test('500 Unicode-Zeichen gültig', pruefung($neu)['ok']);
$neu['nachricht'] .= 'a'; test('501 Zeichen ungültig', !pruefung($neu)['ok']);
$neu = $basis; $neu['nachricht'] = "\xff";
test('Ungültiges UTF-8 verwerfen', !pruefung($neu)['ok']);
foreach ([null, 'reise', 42, true, []] as $i => $wert) {
    test('Ungültige Reise-Struktur ' . $i, !pruefung($wert)['ok']);
}
foreach (['name', 'ziel', 'personen', 'verpflegung', 'nachricht'] as $feld) {
    $neu = $basis; unset($neu[$feld]);
    test('Fehlendes skalares Feld ' . $feld, !pruefung($neu)['ok']);
    $neu = $basis; $neu[$feld] = ['manipuliert'];
    test('Array statt Text bei ' . $feld, !pruefung($neu)['ok']);
}
foreach (['0', '7', '-1', '2.5', 'abc', '1e2', '999999999999999999999'] as $wert) {
    $neu = $basis; $neu['personen'] = $wert;
    test('Ungültige Personen ' . $wert, !pruefung($neu)['ok']);
}
foreach (['1', '6'] as $wert) {
    $neu = $basis; $neu['personen'] = $wert;
    test('Gültiger Personen-Grenzwert ' . $wert, pruefung($neu)['ok']);
}
foreach (['unbekannt', '', '../datei'] as $wert) {
    $neu = $basis; $neu['ziel'] = $wert;
    test('Ungültige Ziel-ID ' . $wert, !pruefung($neu)['ok']);
}
$neu = $basis; $neu['verpflegung'] = 'alles';
test('Unbekannte Verpflegung', !pruefung($neu)['ok']);
$neu = $basis; $neu['name'] = '  ';
test('Leerer Name ungültig', !pruefung($neu)['ok']);
$neu['name'] = str_repeat('a', 61);
test('Zu langer Name ungültig', !pruefung($neu)['ok']);
foreach (['museum', [['museum']], ['unbekannt'], ['museum', 'museum'], ['museum', 'tour', 'transfer', 'x']] as $i => $wert) {
    $neu = $basis; $neu['extras'] = $wert;
    test('Ungültige Extras-Struktur/-Werte ' . $i, !pruefung($neu)['ok']);
}
$neu = $basis; $neu['preis'] = '1'; $neu['rolle'] = 'admin'; $p = pruefung($neu);
test('Unbekannte Preis- und Rollenfelder werden nicht übernommen', $p['ok'] && !isset($p['werte']['preis']) && !isset($p['werte']['rolle']));
$r = berechne_reise($p['werte'], $ziele, $extras, $verpflegungen);
test('Manipulierter Preis verändert Summe nicht', $r['gesamt_cent'] === 50800);
$payload = '</textarea><script>alert(1)</script>"&';
$neu = $basis; $neu['nachricht'] = $payload; $p = pruefung($neu);
test('HTML-Zeichen bleiben erlaubter Text', $p['ok']);
test('HTML-Text korrekt maskiert', strpos(e($payload), '<script>') === false && strpos(e($payload), '&lt;script&gt;') !== false);
$hidden = hidden_reise($p['werte']);
test('Kein unverarbeitetes Script im Hidden-HTML', strpos($hidden, '<script>') === false);
test('Zwei Extras als einzelne Hidden-Felder', substr_count($hidden, 'name="reise[extras][]"') === 2);
test('Weitergabe ohne doppeltes Verpflegungsfeld', strpos(hidden_reise($p['werte'], true), 'name="reise[verpflegung]"') === false);
test('Hidden enthält keinen Preis', strpos($hidden, 'name="reise[preis]"') === false);
$neu = $basis; $neu['ziel'] = 'rom'; $neu['personen'] = '6';
$neu['extras'] = ['museum', 'transfer', 'tour']; $neu['verpflegung'] = 'halbpension';
$p = pruefung($neu); $r = berechne_reise($p['werte'], $ziele, $extras, $verpflegungen);
test('Alle Extras und sechs Personen', $r['gesamt_cent'] === 172200);
$report = [
    'php' => PHP_VERSION, 'ausgefuehrt' => date(DATE_ATOM),
    'tests' => $tests, 'anzahl' => count($tests),
    'erfolgreich' => count(array_filter($tests, fn(array $t): bool => $t['ok'])),
];
echo json_encode($report, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;
exit($report['erfolgreich'] === $report['anzahl'] ? 0 : 1);
