<?php
declare(strict_types=1);
date_default_timezone_set('Europe/Berlin');

// Sämtliche Preise sind frei gewählte Unterrichtswerte in ganzen Cent.
$app = [
    'title' => 'Teamshirt-Konfigurator',
    'short' => 'Ein Shirt für dein Team',
    'icon' => 'shirt',
    'theme' => 'shirt',
    'intro' => 'Gestalte eine unverbindliche Teamshirt-Anfrage. Ein Auftrag enthält jeweils ein Modell, eine Größe und eine gemeinsame Farbe.',
    'hinttitle' => 'Individuell, aber verständlich',
    'hint' => 'Bedruckte Shirts brauchen Text und Druckposition. Ohne Druck werden diese Angaben nicht berechnet. Ab 10 Shirts gibt es 10 % Rabatt auf die Shirt-Grundpreise; Druck und Extras sind davon ausgenommen.',
    'cta' => 'Teamshirt berechnen',
    'nummer' => '04',
];

$kataloge = [
    'modelle' => [
        'basic' => [
            'label' => 'Basic-Shirt',
            'preis' => 1800,
        ],
        'sport' => [
            'label' => 'Sport-Shirt',
            'preis' => 2400,
        ],
        'premium' => [
            'label' => 'Premium-Shirt',
            'preis' => 2900,
        ],
    ],
    'groessen' => [
        's' => [
            'label' => 'S',
            'preis' => 0,
        ],
        'm' => [
            'label' => 'M',
            'preis' => 0,
        ],
        'l' => [
            'label' => 'L',
            'preis' => 0,
        ],
        'xl' => [
            'label' => 'XL',
            'preis' => 0,
        ],
    ],
    'druckpositionen' => [
        'brust' => [
            'label' => 'Brust',
            'preis' => 0,
        ],
        'ruecken' => [
            'label' => 'Rücken',
            'preis' => 0,
        ],
    ],
    'extras' => [
        'verpackung' => [
            'label' => 'Einzeln verpacken',
            'preis' => 150,
        ],
        'label' => [
            'label' => 'Teamlabel',
            'preis' => 200,
        ],
    ],
];

$regeln = [
    'max_menge' => 200,
    'druckpreis' => 500,
    'rabatt_ab' => 10,
    'rabatt_prozent' => 10,
    'vorlauf_tage' => 7,
    'max_drucktext' => 30,
];

$standard = [
    'name' => '',
    'email' => '',
    'modell' => '',
    'menge' => '',
    'groesse' => '',
    'farbe' => '#245678',
    'wunschtermin' => '',
    'druck' => '',
    'drucktext' => '',
    'druckposition' => '',
    'extras' => [],
    'notiz' => '',
];

$labels = [
    'name' => 'Kontaktperson',
    'email' => 'E-Mail-Adresse',
    'modell' => 'Shirt-Modell',
    'menge' => 'Stückzahl',
    'groesse' => 'Größe',
    'farbe' => 'Gewünschte Stofffarbe',
    'wunschtermin' => 'Gewünschter Liefertermin',
    'druck' => 'Shirts mit individuellem Text bedrucken',
    'drucktext' => 'Drucktext',
    'druckposition' => 'Druckposition',
    'extras' => 'Zusätzliche Optionen',
    'notiz' => 'Weitere Wünsche',
];
