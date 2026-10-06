<?php
declare(strict_types=1);
require_once __DIR__ . "/Person.php";
require_once __DIR__ . "/function.php";
$person = new Person(7, "Mia", "Müller");
?>
<!doctype html><html lang="de"><head><meta charset="UTF-8"><title>Person testen</title></head><body>
<h1>Objekt ohne Datenbank testen</h1>
<p>Soll: 7 / Mia / Müller</p>
<p>Ist: <?= $person->getId() ?> / <?= html($person->getVorname()) ?> / <?= html($person->getNachname()) ?></p>
<p><a href="index.php">Zur Anwendung</a></p></body></html>
