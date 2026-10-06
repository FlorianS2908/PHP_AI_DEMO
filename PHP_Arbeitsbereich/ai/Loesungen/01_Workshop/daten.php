<?php
declare(strict_types=1);
date_default_timezone_set('Europe/Berlin');

// Sämtliche Preise sind frei gewählte Unterrichtswerte in ganzen Cent.
$app = [
    'title' => 'Workshop-Anmeldung',
    'short' => 'Wissen gemeinsam erweitern',
    'icon' => 'book',
    'theme' => 'workshop',
    'intro' => 'Wähle einen Workshop und passende Extras. Die Auswertung ist eine unverbindliche Unterrichtsdemo.',
    'hinttitle' => 'Deine Anmeldung',
    'hint' => 'Kurs und Extras werden pro Person berechnet. Die Online-Teilnahme enthält in dieser Demo keinen Versand: Ein gedrucktes Skript ist deshalb nur vor Ort möglich.',
    'cta' => 'Anmeldung auswerten',
    'nummer' => '01',
];

$kataloge = [
    'kurse' => [
        'html' => [
            'label' => 'HTML & CSS',
            'preis' => 7900,
        ],
        'php' => [
            'label' => 'PHP-Formulare',
            'preis' => 9900,
        ],
        'ki' => [
            'label' => 'Gezielt mit KI arbeiten',
            'preis' => 6900,
        ],
    ],
    'formate' => [
        'praesenz' => [
            'label' => 'Vor Ort',
            'preis' => 0,
        ],
        'online' => [
            'label' => 'Online',
            'preis' => 0,
        ],
    ],
    'extras' => [
        'skript' => [
            'label' => 'Gedrucktes Skript',
            'preis' => 1200,
        ],
        'beratung' => [
            'label' => 'Zusätzliche Beratung',
            'preis' => 2500,
        ],
    ],
];

$regeln = [
    'max_personen' => 12,
];

$standard = [
    'name' => '',
    'email' => '',
    'kurs' => '',
    'personen' => '',
    'format' => '',
    'extras' => [],
    'notiz' => '',
    'bestaetigung' => '',
];

$labels = [
    'name' => 'Kontaktperson',
    'email' => 'E-Mail-Adresse',
    'kurs' => 'Workshop',
    'personen' => 'Anzahl der Teilnehmenden',
    'format' => 'Teilnahmeform',
    'extras' => 'Extras',
    'notiz' => 'Wünsche oder Hinweise',
    'bestaetigung' => 'Ich habe meine Angaben geprüft.',
];
