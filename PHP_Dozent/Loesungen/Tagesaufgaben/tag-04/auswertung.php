<?php
declare(strict_types=1);
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Location: index.php?fehler=Bitte+das+POST-Formular+verwenden.', true, 303);
    exit;
}
$daten = [];
$fehler = [];
if (!isset($_POST['ziel']) || !is_string($_POST['ziel'])) {
    $fehler[] = 'Bitte einen Zielort als Text senden.';
} else {
    $ziel = trim($_POST['ziel']);
    if ($ziel === '') { $fehler[] = 'Bitte einen Zielort eintragen.'; }
    // strlen zählt Bytes. Für dieses kleine Übungsformular sind höchstens 100 erlaubt.
    elseif (strlen($ziel) > 100) { $fehler[] = 'Bitte höchstens 100 UTF-8-Bytes eingeben.'; }
    else { $daten['ziel'] = $ziel; }
}
if ($fehler !== []) { $daten['fehler'] = implode(' ', $fehler); }
else { $daten['ok'] = '1'; }
header('Location: index.php?' . http_build_query($daten), true, 303);
exit;
