<?php
declare(strict_types=1);
date_default_timezone_set('Europe/Berlin');

// Sämtliche Preise sind frei gewählte Unterrichtswerte in ganzen Cent.
$app = [
    'title' => 'PC-Konfigurator',
    'short' => 'Ein Rechner für deinen Bedarf',
    'icon' => 'monitor',
    'theme' => 'pc',
    'intro' => 'Stelle einen fiktiven Unterrichts-PC zusammen. Die Kompatibilitätsregeln sind bewusst vereinfacht und keine reale Kaufberatung.',
    'hinttitle' => 'Transparente Demo-Regeln',
    'hint' => 'Gaming benötigt eine separate Grafikkarte und mindestens 16 GB RAM. Kreativarbeit benötigt 32 GB RAM. Der Grundpreis enthält Gehäuse, Mainboard und Netzteil. Ein überschrittenes Budget führt zu einer Warnung, nicht zum Abbruch.',
    'cta' => 'Konfiguration prüfen',
    'nummer' => '05',
];

$kataloge = [
    'zwecke' => [
        'office' => [
            'label' => 'Office',
            'preis' => 0,
        ],
        'kreativ' => [
            'label' => 'Kreativarbeit',
            'preis' => 0,
        ],
        'gaming' => [
            'label' => 'Gaming',
            'preis' => 0,
        ],
    ],
    'cpus' => [
        'basis' => [
            'label' => 'Basis-CPU',
            'preis' => 18000,
        ],
        'leistung' => [
            'label' => 'Leistungs-CPU',
            'preis' => 29000,
        ],
    ],
    'ram' => [
        'r8' => [
            'label' => '8 GB',
            'preis' => 3000,
            'gb' => 8,
        ],
        'r16' => [
            'label' => '16 GB',
            'preis' => 5500,
            'gb' => 16,
        ],
        'r32' => [
            'label' => '32 GB',
            'preis' => 9500,
            'gb' => 32,
        ],
    ],
    'grafik' => [
        'integriert' => [
            'label' => 'Integrierte Grafik',
            'preis' => 0,
        ],
        'dediziert' => [
            'label' => 'Separate Grafikkarte',
            'preis' => 28000,
        ],
    ],
    'speicher' => [
        's512' => [
            'label' => 'SSD 512 GB',
            'preis' => 5000,
        ],
        's1000' => [
            'label' => 'SSD 1 TB',
            'preis' => 8500,
        ],
    ],
    'extras' => [
        'wlan' => [
            'label' => 'WLAN-Modul',
            'preis' => 2500,
        ],
        'tastatur' => [
            'label' => 'Tastatur',
            'preis' => 3500,
        ],
        'monitor' => [
            'label' => 'Monitor',
            'preis' => 16000,
        ],
    ],
];

$regeln = [
    'basispreis' => 22000,
    'montagepreis' => 6900,
    'gaming_ram' => 16,
    'kreativ_ram' => 32,
];

$standard = [
    'name' => '',
    'email' => '',
    'budget' => '',
    'zweck' => '',
    'cpu' => '',
    'ram' => '',
    'grafik' => '',
    'speicher' => '',
    'extras' => [],
    'montage' => '',
    'notiz' => '',
];

$labels = [
    'name' => 'Kontaktperson',
    'email' => 'E-Mail-Adresse',
    'budget' => 'Persönliches Budget in Euro',
    'zweck' => 'Einsatzzweck',
    'cpu' => 'Prozessor',
    'ram' => 'Arbeitsspeicher',
    'grafik' => 'Grafiklösung',
    'speicher' => 'SSD',
    'extras' => 'Zusätzliche Ausstattung',
    'montage' => 'PC zusammenbauen lassen',
    'notiz' => 'Weitere Wünsche',
];
