<?php
declare(strict_types=1);
require __DIR__ . '/daten.php';
require __DIR__ . '/funktionen.php';
header('Content-Type: text/html; charset=UTF-8');
header('Cache-Control: no-store');
$werte = $standard;
$fehler = [];
require __DIR__ . '/formular.php';
