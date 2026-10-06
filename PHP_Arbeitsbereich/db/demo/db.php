<?php
declare(strict_types=1);

function verbindeDatenbank(): PDO
{
    // config.php liegt eine Ordnerebene über demo/ bzw. aufgaben/.
    require __DIR__ . "/../config.php";

    $dsn = "mysql:host=" . $host . ";port=" . $port
         . ";dbname=" . $datenbank . ";charset=utf8mb4";

    // Verbindungs- und SQL-Fehler werden als PDOException gemeldet.
    return new PDO($dsn, $benutzer, $passwort, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
    ]);
}
