<?php
declare(strict_types=1);
date_default_timezone_set('Europe/Berlin');

// Sämtliche Preise sind frei gewählte Unterrichtswerte in ganzen Cent.
$app = [
    'title' => 'Fahrrad-Werkstattauftrag',
    'short' => 'Eine Reparatur klar anfragen',
    'icon' => 'bike',
    'theme' => 'werkstatt',
    'intro' => 'Beschreibe dein Fahrrad und wähle die gewünschten Arbeiten. Angezeigt wird nur eine Kostenschätzung, kein echter Werkstattauftrag.',
    'hinttitle' => 'Schätzung statt Buchung',
    'hint' => 'Die Summe enthält die gewählten Arbeiten und gegebenenfalls den Expresszuschlag. Liegt sie über deiner Budgetgrenze, erhältst du eine Warnung; die Eingaben bleiben gültig.',
    'cta' => 'Auftrag prüfen',
    'nummer' => '02',
];

$kataloge = [
    'typen' => [
        'city' => [
            'label' => 'Cityrad',
            'preis' => 0,
        ],
        'trekking' => [
            'label' => 'Trekkingrad',
            'preis' => 0,
        ],
        'mountain' => [
            'label' => 'Mountainbike',
            'preis' => 0,
        ],
    ],
    'leistungen' => [
        'inspektion' => [
            'label' => 'Inspektion',
            'preis' => 4900,
        ],
        'bremse' => [
            'label' => 'Bremsen einstellen',
            'preis' => 2500,
        ],
        'schaltung' => [
            'label' => 'Schaltung einstellen',
            'preis' => 2900,
        ],
    ],
    'prioritaeten' => [
        'normal' => [
            'label' => 'Normal',
            'preis' => 0,
        ],
        'express' => [
            'label' => 'Express',
            'preis' => 3000,
        ],
    ],
    'kontaktwege' => [
        'email' => [
            'label' => 'E-Mail',
            'preis' => 0,
        ],
        'telefon' => [
            'label' => 'Telefon',
            'preis' => 0,
        ],
    ],
];

$regeln = [
    'budget_max' => 99999999,
    'telefon_min' => 6,
    'telefon_max' => 20,
];

$standard = [
    'name' => '',
    'email' => '',
    'kontaktweg' => '',
    'telefon' => '',
    'radtyp' => '',
    'abgabe' => '',
    'leistungen' => [],
    'prioritaet' => '',
    'budget' => '',
    'beschreibung' => '',
];

$labels = [
    'name' => 'Kontaktperson',
    'email' => 'E-Mail-Adresse',
    'kontaktweg' => 'Gewünschter Kontaktweg',
    'telefon' => 'Telefonnummer',
    'radtyp' => 'Fahrradtyp',
    'abgabe' => 'Gewünschter Abgabetag',
    'leistungen' => 'Gewünschte Arbeiten',
    'prioritaet' => 'Bearbeitung',
    'budget' => 'Persönliche Budgetgrenze in Euro',
    'beschreibung' => 'Was soll geprüft oder repariert werden?',
];
