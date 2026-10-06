<?php
# index => daten nach auswertung => daten zurück zu index
$fehler = "";

if(isset($_GET["error"])){
http://localhost:8080/PHP/PHP_Arbeitsbereich/Summary_Code_Together/CodeTogether/formularGetPost/PHP_Formulare_Alltag_Musterloesungen/01_GET_Buechersuche/goTogether/index.php?dummy=Hallo%20Welt&
    $fehler = $_GET["error"];
}


?>
<!doctype html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, inital-scale=1">
    <titel>Aufgabe 1 Büchersuche</titel>
</head>

<body>
    <form action="auswertung.php" method="post">

        <h1>Aufgabe 1: Büchersuche</h1>
        <?php if($fehler !== "") : ?>
        <p role="alert"><strong>Fehler:</strong><?= $fehler ?> </p>
        <?php endif ?>
        <label for="suchbegriff">Suchbegriff</label>
        <input type="text" id="suchbegriff" name="suchbegriff" style="padding: 8px;">
        <button type="submit">
            suche starten
        </button>

    </form>
</body>

</html>