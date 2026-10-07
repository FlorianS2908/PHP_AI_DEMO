-- PHP: neues, vereinfachtes Unterrichtsschema, nicht die Originaldatenbank.
-- Nur in einer lokalen Übungsumgebung ausführen. Keine echten Angebote.
CREATE DATABASE IF NOT EXISTS PHP_demo CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE PHP_demo;
CREATE TABLE IF NOT EXISTS angebote (
 id INT PRIMARY KEY,
 abreiseort VARCHAR(80) NOT NULL,
 ziel VARCHAR(80) NOT NULL,
 abflug DATE NOT NULL,
 preis_cent INT NOT NULL
);
INSERT IGNORE INTO angebote (id, abreiseort, ziel, abflug, preis_cent) VALUES
 (1,'Berlin','Paris','2030-05-10',12500),
 (2,'Frankfurt','Paris','2030-05-12',14900),
 (3,'Berlin','Rom','2030-06-03',17900),
 (4,'Hamburg','Berlin','2030-06-07',8900);
-- Wien ist ein zulässiger Suchwert ohne hinterlegte Angebote.
