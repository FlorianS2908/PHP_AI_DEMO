<?php
declare(strict_types=1);

// Statische Unterrichtsdaten werden bei JEDEM Request neu geladen.
// Kein Benutzerzustand, keine Session, keine Datenbank. Alle Preise sind fiktiv.
$ziele = [
    'berlin' => ['titel' => 'Berlin', 'land' => 'Deutschland', 'preis_cent' => 12900],
    'paris'  => ['titel' => 'Paris',  'land' => 'Frankreich',  'preis_cent' => 19900],
    'rom'    => ['titel' => 'Rom',    'land' => 'Italien',     'preis_cent' => 17900],
];

// Schlüssel gehen ins Formular, Titel sind die sichtbaren Beschriftungen.
$extras = [
    'museum'   => ['titel' => 'Museumspass',   'preis_cent' => 2500],
    'transfer' => ['titel' => 'Transfer',     'preis_cent' => 3500],
    'tour'     => ['titel' => 'Stadtführung', 'preis_cent' => 1800],
];

$verpflegungen = [
    'ohne'         => ['titel' => 'Ohne Verpflegung', 'preis_cent' => 0],
    'fruehstueck'  => ['titel' => 'Frühstück',         'preis_cent' => 1200],
    'halbpension'  => ['titel' => 'Halbpension',       'preis_cent' => 3000],
];
