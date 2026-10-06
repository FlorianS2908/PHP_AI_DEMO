<?php
declare(strict_types=1);
require_once __DIR__ . "/Person.php";
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/function.php";
starteSession();

// Vorgegeben: Fehler und gültige Werte einmalig aus der Session abholen.
$fehler = [];
$werte = ["vorname" => "", "nachname" => ""];
$erfolg = "";
if (isset($_SESSION["formular"]) && is_array($_SESSION["formular"])) {
    $fehler = $_SESSION["formular"]["fehler"];
    $werte = $_SESSION["formular"]["werte"];
    unset($_SESSION["formular"]);
}
if (isset($_SESSION["erfolg"]) && is_string($_SESSION["erfolg"])) {
    $erfolg = $_SESSION["erfolg"];
    unset($_SESSION["erfolg"]);
}
$token = formularToken();

// Bei jedem Seitenaufruf aus der Datenbank lesen, nicht aus der Session.
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
    error_log("PHP Personen lesen: " . $e->getMessage());
    $dbFehler = "Die Personen konnten nicht geladen werden. Prüfe den Datenbankdienst, den SQL-Import und config.php.";
    http_response_code(503);
}
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP – Personen speichern und lesen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body><main>
<p class="klein">PHP / PHP + MySQL + OOP</p>
<h1>Personen speichern und lesen</h1>
<p>Eine Tabelle, zwei Eingaben: Vorname und Nachname.</p>

<?php if ($erfolg !== "") { ?>
    <p class="erfolg" role="status"><?= html($erfolg) ?></p>
<?php } ?>
<?php if (!empty($fehler)) { ?>
    <div class="fehler" role="alert"><strong>Bitte prüfen:</strong>
        <?php foreach ($fehler as $meldung) { ?>
            <p><?= html($meldung) ?></p>
        <?php } ?>
    </div>
<?php } ?>
<h2>Neue Person</h2>
<form action="speichern.php" method="post" novalidate>
    <input type="hidden" name="csrf" value="<?= html($token) ?>">
    <p>
        <label for="vorname">Vorname</label>
        <input type="text" id="vorname" name="vorname" maxlength="50" required
               value="<?= html($werte["vorname"]) ?>" aria-describedby="namenshinweis">
    </p>
    <p>
        <label for="nachname">Nachname</label>
        <input type="text" id="nachname" name="nachname" maxlength="50" required
               value="<?= html($werte["nachname"]) ?>" aria-describedby="namenshinweis">
    </p>
    <p id="namenshinweis" class="klein">Beide Felder sind Pflichtfelder: je 1 bis 50 Zeichen nach trim(). Nur erfundene Daten verwenden.</p>
    <button type="submit">Person speichern</button>
</form>
<h2>Personenübersicht</h2>
<?php if ($dbFehler !== "") { ?>
    <p class="fehler" role="alert"><?= html($dbFehler) ?></p>
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
<?php } ?>
<p class="klein">Datensätze → Person-Objekte → HTML-Zeilen. Die ID vergibt die Datenbank.</p>
</main></body>
</html>
