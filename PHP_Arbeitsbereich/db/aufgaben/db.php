<?php
declare(strict_types=1);

function verbindeDatenbank(): PDO
{
    // config.php liegt eine Ordnerebene über demo/ bzw. aufgaben/.
    require __DIR__ . "/../config.php";

    $dsn = "mysql:host=" . $host . ";port=" . $port
         . ";dbname=" . $datenbank . ";charset=utf8mb4";

    // Verbindungs- und SQL-Fehler werden als PDOException gemeldet.
    // TODO 02: Ein PDO-Objekt mit DSN, Benutzer, Passwort und Optionen zurückgeben.
    // Optionen: Exceptions bei Fehlern, emulierte Prepared Statements ausschalten.
    // Diese vorläufige Ausnahme danach entfernen:
    throw new PDOException("TODO 02: Datenbankverbindung ergänzen.");
}
