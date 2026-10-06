<?php
declare(strict_types=1);
function h(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }
$ziel = isset($_GET['ziel']) && is_string($_GET['ziel']) ? $_GET['ziel'] : '';
$fehler = isset($_GET['fehler']) && is_string($_GET['fehler']) ? $_GET['fehler'] : '';
$ok = isset($_GET['ok']) && $_GET['ok'] === '1';
?>
<!doctype html><html lang="de"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Kleine Reiseanfrage · Lösung</title><style>body{font:18px/1.6 system-ui;max-width:720px;margin:30px auto;padding:20px}input,button{font:inherit}</style></head><body>
<h1>Reiseziel prüfen</h1>
<?php if ($fehler !== ''): ?><p role="alert"><?= h($fehler) ?></p><?php endif; ?>
<?php if ($ok): ?><p>Geprüfter Zieltext: <?= h($ziel) ?>. Es wurde keine Reise gebucht.</p><?php endif; ?>
<form action="auswertung.php" method="post" novalidate><label for="ziel">Zielort</label><input name="ziel" id="ziel" value="<?= h($ziel) ?>"><button type="submit">Prüfen</button></form>
<p>Die Rückmeldung verwendet hier Query-Parameter und ist kein dauerhafter oder vertrauenswürdiger Beleg. Nur fiktive Daten verwenden.</p><a href="../../tag-04.html">Tag 4</a></body></html>
