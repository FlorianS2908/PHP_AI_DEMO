<?php
declare(strict_types=1);
?>
<!doctype html><html lang="de"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>PHP · PHP-Demo</title><link rel="stylesheet" href="../../assets/demo.css"></head><body><p class="notice">Lokale Unterrichtsanwendung · ausschließlich fiktive Angaben · keine Buchung.</p>
<h1>Kontrollstrukturen lesen</h1>
<h2>1 · if / elseif / else</h2><pre><?php
$personen = 3;
if ($personen === 1) { echo 'Einzelreise'; }
elseif ($personen <= 4) { echo 'Kleine Gruppe'; }
else { echo 'Große Gruppe'; }
?></pre>
<h2>2 · switch</h2><pre><?php
$ziel = 'Rom';
switch ($ziel) {
 case 'Paris': echo 'Frankreich'; break;
 case 'Rom': echo 'Italien'; break;
 default: echo 'Unbekannt';
}
?></pre>
<h2>3 · for</h2><pre><?php
for ($i = 1; $i <= 3; $i++) { echo $i . ' '; }
?></pre>
<h2>4 · while</h2><pre><?php
$i = 1;
while ($i <= 3) { echo $i . ' '; $i++; }
?></pre>
<h2>5 · do-while</h2><pre><?php
$i = 3;
do { echo $i . ' '; $i++; } while ($i < 3);
?></pre>
<h2>6 · foreach</h2><pre><?php
$ziele = ['Paris', 'Rom'];
foreach ($ziele as $ziel) { echo $ziel . ' '; }
?></pre></body></html>
