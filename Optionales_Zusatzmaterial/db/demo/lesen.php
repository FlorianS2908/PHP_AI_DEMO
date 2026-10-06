<?php
declare(strict_types=1);
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/Person.php";
require_once __DIR__ . "/function.php";

$personen = [];
$dbFehler = "";
try {
    $pdo = verbindeDatenbank();
    // Feste Leseabfrage ohne Benutzereingaben.
    $abfrage = $pdo->query("SELECT id, vorname, nachname FROM personen ORDER BY id");

    // Eine Zeile ist zunächst ein assoziatives Array.
    while ($zeile = $abfrage->fetch(PDO::FETCH_ASSOC)) {
        // Aus JEDER Zeile entsteht ein eigenes Person-Objekt.
        $person = new Person(
            (int) $zeile["id"],
            $zeile["vorname"],
            $zeile["nachname"]
        );
        $personen[] = $person;
    }
} catch (PDOException $e) {
    error_log("PHP Lesedemo: " . $e->getMessage());
    $dbFehler = "Keine Daten geladen. Starte den Datenbankdienst, importiere datenbank.sql und prüfe config.php.";
    http_response_code(503);
}
?>
<!doctype html><html lang="de"><head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHP – Vom Datensatz zum Objekt</title><link rel="stylesheet" href="style.css">
</head><body><main>
<p class="klein">DEMO A / NUR LESEN</p>
<h1>Vom Datensatz zur HTML-Tabelle</h1>
<p class="hinweis">SELECT → Array-Zeile → new Person(...) → Getter → HTML</p>
<p>Diese Seite liest nur. Sie legt keine Daten an und verwendet keine Session.</p>
<?php if ($dbFehler !== "") { ?>
    <p class="fehler"><?= html($dbFehler) ?></p>
<?php } else { ?>
    <div class="tabelle">
<table>
    <caption>Gespeicherte Personen</caption>
    <thead><tr><th scope="col">ID</th><th scope="col">Vorname</th><th scope="col">Nachname</th></tr></thead>
    <tbody>
    <?php if (empty($personen)) { ?>
        <tr><td colspan="3">Noch keine Personen vorhanden.</td></tr>
    <?php } else { ?>
        <?php foreach ($personen as $person) { ?>
            <tr>
                <td><?= $person->getId() ?></td>
                <td><?= html($person->getVorname()) ?></td>
                <td><?= html($person->getNachname()) ?></td>
            </tr>
        <?php } ?>
    <?php } ?>
    </tbody>
</table>
</div>
    <?php if (!empty($personen)) { ?>
        <h2>Das erste Objekt</h2>
        <p>Klasse: <code><?= html(get_class($personen[0])) ?></code></p>
        <p>Name über Getter: <strong><?= html($personen[0]->getVorname()) ?> <?= html($personen[0]->getNachname()) ?></strong></p>
    <?php } ?>
<?php } ?>
<p><a href="index.php">Zur Demo mit Eingabeformular</a></p>
<p class="klein">Die PHP-Objekte bleiben auf dem Server. An den Browser wird die erzeugte HTML-Ausgabe geschickt.</p>
</main></body></html>
