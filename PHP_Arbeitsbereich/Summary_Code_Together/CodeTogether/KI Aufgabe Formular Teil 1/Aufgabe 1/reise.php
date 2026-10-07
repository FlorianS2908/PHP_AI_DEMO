<?php
declare(strict_types=1);
// Diese Prüfansicht akzeptiert beide Formularmethoden; es erfolgt keine Buchung.
if (!in_array($_SERVER['REQUEST_METHOD'], ['GET', 'POST'], true)) {
    http_response_code(405);
    header('Allow: GET, POST');
    exit('Nur GET und POST sind erlaubt.');
}
$eingaben = $_SERVER["REQUEST_METHOD"] === "POST" ? $_POST : $_GET;
$felder = [
    "reiseziel" => "Reiseziel",
    "anreise" => "Anreise",
    "abreise" => "Abreise",
    "reisende" => "Reisende",
    "unterkunft" => "Unterkunft"
];
$daten = [];
foreach ($felder as $feld => $bezeichnung) {
    $wert = $eingaben[$feld] ?? "";
    $daten[$feld] = is_string($wert) ? trim($wert) : "";
}

require __DIR__."/function.php";

$fehler = [];
$warnungen = [];
$dauer = null;
$heute = new DateTimeImmutable("today");
$anreise = pruefeDatum($daten["anreise"]);
$abreise = pruefeDatum($daten["abreise"]);

if ($daten["reiseziel"] === "") {
    $fehler['reiseziel'] = "Bitte gib ein Reiseziel ein.";
}
if (!in_array($daten["reisende"], ["1", "2", "3", "4", "5", "6"], true)) {
    $fehler['reisende'] =  "Bitte wähle zwischen 1 und 6 Reisenden.";
}
if (!in_array($daten["unterkunft"], ["hotel", "ferienwohnung", "camping"], true)) {
    $fehler['unterkunft'] = "Bitte wähle eine gültige Unterkunft.";
}
if ($anreise === false) {
    $fehler['anreise'] = "Bitte gib für die Anreise ein gültiges Datum ein.";
}
if ($abreise === false) {
    $fehler['abreise'] = "Bitte gib für die Abreise ein gültiges Datum ein.";
}
// Vergangene Daten lösen nur eine Warnung aus, keine Sperre.
if ($anreise !== false && $anreise < $heute) {
    $warnungen['anreise'] = "Die Anreise liegt in der Vergangenheit.";
}
if ($abreise !== false && $abreise < $heute) {
    $warnungen['abreise'] = "Die Abreise liegt in der Vergangenheit.";
}

if ($anreise !== false && $abreise !== false) {
    if ($abreise < $anreise) {
        $fehler[] = "Die Abreise darf nicht vor der Anreise liegen.";
    } else {
        // Unterschied in Kalendertagen: 10.10. bis 15.10. = 5 Tage.
        $dauer = $anreise->diff($abreise)->days;
    }
}
// Für die Tabelle Daten im deutschen Datumsformat anzeigen.
$anzeige = $daten;
if ($anreise !== false) {
    $anzeige["anreise"] = $anreise->format("d.m.Y");
}
if ($abreise !== false) {
    $anzeige["abreise"] = $abreise->format("d.m.Y");
}
// Source - https://stackoverflow.com/a/4747673
// Posted by Richard Knop, modified by community. See post 'Timeline' for change history
// Retrieved 2026-09-30, License - CC BY-SA 3.0
?>
<!doctype html><html lang="de"><head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Reisedaten prüfen</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 24px;
}

table {
    border-collapse: collapse;
}

th,
td {
    border: 1px solid #999;
    padding: 8px;
    text-align: left;
}
</style></head>

<body>
    <h1>Reisedaten prüfen</h1><p>Prüfansicht: Diese Demo speichert keine Reise und löst keine Buchung aus.</p>

    <?php
    foreach ($fehler as $meldung) {
        echo "<p role='alert'><strong>Fehler:</strong> " . ausgabe($meldung) . "</p>";
    }
    foreach ($warnungen as $meldung) {
        echo "<p><strong>Warnung:</strong> " . ausgabe($meldung) . "</p>";
    }
    ?>
    <table>
        <thead>
            <tr>
                <th scope="col">Angabe</th>
                <th scope="col">Wert</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($felder as $feld => $bezeichnung) {
                echo "<tr><th scope='row'>" . ausgabe($bezeichnung) . "</th>";
                echo "<td>" . ausgabe($anzeige[$feld]) . "</td></tr>";
            }
            ?>
            <tr>
                <th scope="row">Dauer</th>
                <td><?= $dauer === null ? "Nicht berechenbar" : $dauer . ($dauer === 1 ? " Tag" : " Tage") ?></td>
            </tr>
        </tbody>
    </table>
<p><a href="index.html">Zurück zum Formular</a></p>
</body></html>
