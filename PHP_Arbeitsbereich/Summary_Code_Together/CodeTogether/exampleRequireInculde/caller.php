<?php
declare(strict_types=1);
header('Content-Type: text/plain; charset=UTF-8');

// __DIR__ enthält den Ordnerpfad dieser Datei – unabhängig vom Aufrufort.
// require bricht bei einer fehlenden Datei mit einem Fehler ab;
// include erzeugt eine Warnung und führt das Skript grundsätzlich weiter aus.
// _once verhindert ein erneutes Einbinden derselben Datei innerhalb des Requests.
require_once __DIR__ . '/funktionen.php';
require_once __DIR__ . '/funktionen.php'; // Keine doppelte Funktionsdeklaration.

// Eingebundene Funktionen dürfen trotzdem mehrfach aufgerufen werden.
echo 'addiere(1, 3): ' . addiere(1, 3) . "\n";
echo 'addiere(5, 2): ' . addiere(5, 2) . "\n";
