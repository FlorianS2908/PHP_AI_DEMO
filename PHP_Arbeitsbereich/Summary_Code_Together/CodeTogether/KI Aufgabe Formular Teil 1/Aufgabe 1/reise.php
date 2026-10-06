<?php
// Das Reiseformular sendet GET, die Bestätigung sendet POST.
$eingaben = $_SERVER["REQUEST_METHOD"] === "POST" ? $_POST : $_GET;
$felder = [
    "reiseziel" => "Reiseziel",
    "anreise" => "Anreise",
    "abreise" => "Abreise",
    "reisende" => "Reisende",
    "unterkunft" => "Unterkunft"
];
$felder_keys = array_keys($felder);
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
    $fehler[$felder_keys[0]] = "Bitte gib ein Reiseziel ein.";
}
if (!in_array($daten["reisende"], ["1", "2", "3", "4", "5", "6"], true)) {
    $fehler[$felder_keys[3]] =  "Bitte wähle zwischen 1 und 6 Reisenden.";
}
if (!in_array($daten["unterkunft"], ["hotel", "ferienwohnung", "camping"], true)) {
    $fehler[$felder_keys[4]] = "Bitte wähle eine gültige Unterkunft.";
}
if ($anreise === false || $abreise === false) {
    $fehler[$felder_keys[1]] = "Bitte gib für Anreise ein gültiges Datum ein.";
    $fehler[$felder_keys[2]] = "Bitte gib für Abreise ein gültiges Datum ein.";
}
// Vergangene Daten lösen nur eine Warnung aus, keine Sperre.
if ($anreise !== false && $anreise < $heute) {
    $warnungen[$felder_keys[1]] = "Die Anreise liegt in der Vergangenheit.";
}
if ($abreise !== false && $abreise < $heute) {
    $warnungen[$felder_keys[2]] = "Die Abreise liegt in der Vergangenheit.";
}

if ($anreise !== false && $abreise !== false) {
    if ($abreise < $anreise) {
        $fehler[] = "Die Abreise darf nicht vor der Anreise liegen.";
    } else {
        // Unterschied in Kalendertagen: 10.10. bis 15.10. = 5 Tage.
        $dauer = $anreise->diff($abreise)->days;
    }
}
if(!empty($fehler) || !empty($warnungen)){
    var_dump($fehler);
    var_dump($warnungen);
    $arrayMergeError = array_merge($fehler, $warnungen);
    redirctAndDatenInjecten($arrayMergeError, $daten);
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
</style>

<body>
    <h1>Reisedaten prüfen</h1>

    <?php
    foreach ($fehler as $meldung) {
        echo "<p><strong>Fehler:</strong> " . ausgabe($meldung) . "</p>";
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