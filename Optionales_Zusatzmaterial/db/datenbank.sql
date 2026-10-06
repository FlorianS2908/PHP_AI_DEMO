-- PHP: eine kleine Datenbank, eine Tabelle, drei Beispielpersonen.
-- Einmal in phpMyAdmin importieren. Vorhandene Tabellen werden NICHT gelöscht.
-- Achtung: Ein erneuter Import fügt die drei Beispielpersonen erneut hinzu.
-- Nur erfundene Übungsdaten verwenden.
CREATE DATABASE IF NOT EXISTS PHP_personen
    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE PHP_personen;

CREATE TABLE IF NOT EXISTS personen (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    vorname VARCHAR(50) NOT NULL,
    nachname VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO personen (vorname, nachname) VALUES
    ('Mia', 'Müller'),
    ('Noah', 'Schneider'),
    ('Lea', 'Özdemir');
