<?php
# index => daten nach auswertung => daten zurück zu index
$fehler = "";
$gegenstand = "";
$farbe = "";
var_dump($_GET);
if(isset($_GET["error"])){
    $fehler = $_GET["error"];
}
if(isset($_GET["gegenstand"])){
    $gegenstand = $_GET["gegenstand"];
}
if(isset($_GET["farbe"])){
    $farbe = $_GET["farbe"];
}
?>
<!doctype html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, inital-scale=1">
    <titel>Aufgabe 3 Fundbüro</titel>
</head>

<body>
    <form action="auswertung.php" method="get">

        <h1>Aufgabe 3: Fundbüro</h1>
        <?php if($fehler !== "") : ?>
        <p role="alert"><strong>Fehler:<br></strong><?= $fehler ?> </p>
        <?php endif ?>
        <?php if($gegenstand !== "" && $farbe !== "") :?>
        <p role="alert"><strong>Gefunden:<br></strong><?= $gegenstand.  " in der Farbe " . $farbe ?></p>
        <?php endif ?>
        <label for="gegenstand">Gegenstand</label>
        <input type="text" id="gegenstand" name="gegenstand" value="<?= $gegenstand ?>" style="border: 2px solid <?= 
        (isset($_GET['gegenstand'])) ?
        ($gegenstand !== "")
        ? 'green' : 'red':'black'?>; padding: 8px;" required>
        <label for=" farbe">Farbe</label>
        <input type="text" id="farbe" name="farbe" value="<?= $farbe ?>" style="border: 2px solid <?= 
        (isset($_GET['farbe'])) ?
        ($farbe !== "")
        ? 'green' : 'red':'black'?>; padding: 8px;" required>
        <button type="submit">
            suche starten
        </button>

    </form>
</body>

</html>