<?php
declare(strict_types=1);
// Ergänzung E1: HTML-Ausgabe ist ein anderer Schutzschritt als SQL-Parameterbindung.
function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
function allowed_destinations(): array { return ['Berlin', 'Paris', 'Rom', 'Wien']; }
function db_connect() {
    if (!function_exists('mysqli_connect')) {
        throw new RuntimeException('Die PHP-Erweiterung mysqli fehlt.');
    }
    $path = __DIR__ . '/config.local.php';
    if (!is_file($path)) {
        throw new RuntimeException('Die lokale Konfiguration fehlt.');
    }
    $config = require $path;
    if (!is_array($config)) { throw new RuntimeException('Ungültige Konfiguration.'); }
    foreach (['host', 'user', 'password', 'database'] as $key) {
        if (!array_key_exists($key, $config) || !is_string($config[$key])) {
            throw new RuntimeException('Ungültiger Konfigurationswert.');
        }
    }
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $db = mysqli_connect($config['host'], $config['user'], $config['password'], $config['database']);
    mysqli_set_charset($db, 'utf8mb4');
    return $db;
}
function find_offers(string $destination): array {
    if (!in_array($destination, allowed_destinations(), true)) {
        throw new InvalidArgumentException('Unzulässiges Ziel.');
    }
    $db = db_connect();
    $stmt = null;
    try {
        // K5: Nutzereingaben sind Datenwerte, kein zusätzlich eingefügter SQL-Code.
        $stmt = mysqli_prepare($db,
            'SELECT id, abreiseort, ziel, abflug, preis_cent FROM angebote WHERE ziel = ? ORDER BY abflug, id');
        mysqli_stmt_bind_param($stmt, 's', $destination);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $id, $origin, $goal, $date, $price);
        $rows = [];
        while (mysqli_stmt_fetch($stmt)) {
            $rows[] = ['id'=>$id, 'origin'=>$origin, 'goal'=>$goal, 'date'=>$date, 'price'=>$price];
        }
        return $rows;
    } finally {
        if ($stmt !== null) { mysqli_stmt_close($stmt); }
        mysqli_close($db);
    }
}
