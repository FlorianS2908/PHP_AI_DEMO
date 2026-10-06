<?php
declare(strict_types=1);
date_default_timezone_set('Europe/Berlin');

// Sämtliche Preise sind frei gewählte Unterrichtswerte in ganzen Cent.
$app = [
    'title' => 'Raumreservierung',
    'short' => 'Den passenden Raum planen',
    'icon' => 'room',
    'theme' => 'raum',
    'intro' => 'Plane ein Teamtreffen mit passender Kapazität und Ausstattung. Diese Demo prüft Regeln, aber keine echte Raumverfügbarkeit.',
    'hinttitle' => 'So wird gerechnet',
    'hint' => 'Jede angefangene Stunde wird berechnet. Die Nutzung ist auf maximal 8 tatsächliche Stunden begrenzt. Zeiten gelten in Europe/Berlin. Es erfolgt keine verbindliche Buchung.',
    'cta' => 'Reservierung auswerten',
    'nummer' => '03',
];

$kataloge = [
    'raeume' => [
        'studio' => [
            'label' => 'Studio',
            'preis' => 2500,
            'kapazitaet' => 6,
        ],
        'team' => [
            'label' => 'Teamraum',
            'preis' => 4000,
            'kapazitaet' => 12,
        ],
        'forum' => [
            'label' => 'Forum',
            'preis' => 6500,
            'kapazitaet' => 24,
        ],
    ],
    'bestuhlungen' => [
        'kreis' => [
            'label' => 'Stuhlkreis',
            'preis' => 0,
        ],
        'tische' => [
            'label' => 'Tischgruppen',
            'preis' => 0,
        ],
        'reihen' => [
            'label' => 'Reihen',
            'preis' => 0,
        ],
    ],
    'ausstattung' => [
        'beamer' => [
            'label' => 'Beamer',
            'preis' => 1500,
        ],
        'flipchart' => [
            'label' => 'Flipchart',
            'preis' => 800,
        ],
        'konferenz' => [
            'label' => 'Konferenztechnik',
            'preis' => 2500,
        ],
    ],
];

$regeln = [
    'max_stunden' => 8,
    'max_personen' => 24,
];

$standard = [
    'name' => '',
    'email' => '',
    'raum' => '',
    'personen' => '',
    'beginn' => '',
    'ende' => '',
    'bestuhlung' => '',
    'ausstattung' => [],
    'notiz' => '',
    'bestaetigung' => '',
];

$labels = [
    'name' => 'Kontaktperson',
    'email' => 'E-Mail-Adresse',
    'raum' => 'Raum',
    'personen' => 'Anzahl der Personen',
    'beginn' => 'Beginn',
    'ende' => 'Ende',
    'bestuhlung' => 'Bestuhlung',
    'ausstattung' => 'Zusätzliche Ausstattung',
    'notiz' => 'Organisatorische Hinweise',
    'bestaetigung' => 'Ich habe Zeitraum und Angaben geprüft.',
];
