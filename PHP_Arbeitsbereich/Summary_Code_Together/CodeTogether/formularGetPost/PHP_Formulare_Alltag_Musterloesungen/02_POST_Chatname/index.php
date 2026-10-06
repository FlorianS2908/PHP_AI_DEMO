<?php
# index => daten nach auswertung => daten zurück zu index
$fehler = "";

if(isset($_GET["error"])){
    $fehler = $_GET["error"];
}


?>
<!doctype html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, inital-scale=1">
    <titel>Aufgabe 2 Chatname</titel>
</head>

<body>
    <form action="auswertung.php" method="get">

        <h1>Aufgabe 2: Chatname</h1>
        <?php if($fehler !== "") : ?>
        <p role="alert"><strong>Fehler:</strong><?= $fehler ?> </p>
        <?php endif ?>
        <label for="chatname">Chatname</label>
        <input type="text" id="chatname" name="chatname" style="padding: 8px;">
        <button type="submit">
            Chatname senden
        </button>

    </form>
</body>

</html>