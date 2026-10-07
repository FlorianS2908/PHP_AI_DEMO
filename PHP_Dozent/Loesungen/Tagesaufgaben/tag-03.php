<?php
declare(strict_types=1);
// Eingabe: ganze Zahl. Ausgabe: verdoppelter Wert; die Funktion gibt kein HTML aus.
function doppelt(int $zahl): int
{
    return $zahl * 2;
}
$anzahl = 3;
$themen = ['HTML', 'CSS', 'PHP'];
// Die Aufgabe setzt positive ganze Teilnehmerzahlen voraus.
// Bis einschließlich 4 Personen gilt die erste Gruppe; ab 5 die zweite.
if ($anzahl <= 4) {
    $einordnung = 'Kleine Gruppe';
} else {
    $einordnung = 'Große Gruppe';
}
// Dynamische Typisierung bleibt erhalten, obwohl strict_types aktiv ist.
$beispiel = 3;
$typVorher = gettype($beispiel);
$beispiel = 'drei';
?>
<!doctype html><html lang="de"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>PHP-Einstieg</title><style>body{font:18px/1.6 system-ui;max-width:800px;margin:30px auto;padding:20px}</style></head><body>
<h1>PHP in kleinen Schritten</h1><p><?= $einordnung ?>: <?= $anzahl ?> Personen.</p>
<p>Doppelte Anzahl: <?= doppelt($anzahl) ?></p><ul>
<?php foreach ($themen as $thema): ?><li><?= htmlspecialchars($thema, ENT_QUOTES, 'UTF-8') ?></li><?php endforeach; ?>
</ul><p>Typ vorher: <?= $typVorher ?>; Typ danach: <?= gettype($beispiel) ?>.</p>
<p><code>"3" === 3</code> ergibt <?= '3' === 3 ? 'true' : 'false' ?>.</p>
<p>Versuche in einer lokalen Kopie, <code>doppelt($anzahl)</code> durch <code>doppelt("3")</code> zu ersetzen. Bei diesem eigenen Funktionsaufruf in der strengen Datei entsteht ein TypeError. Danach die gültige Eingabe wiederherstellen.</p>
<a href="../../Unterricht/tag-03.html">Zurück zu Tag 3</a></body></html>
