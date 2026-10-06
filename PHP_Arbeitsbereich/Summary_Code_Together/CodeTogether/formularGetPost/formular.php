<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET und POST</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 30px; background: #f4f6f8;">

    <form action="auswerten.php" method="get"
        style="max-width: 340px; padding: 20px; background: white; border-radius: 8px; display: grid; gap: 10px;">
        <?php
        var_dump($_GET);
if(isset($_GET['fehler']) || isset($_GET['fehler']) === "alter"){
    echo "<script> alert('Bitte alter eingeben'); </script>";
}

?>
        <h2 style="margin: 0 0 10px;">Deine Daten</h2>

        <label for="name">Name</label>
        <input type="text" id="name" name="name" required style="padding: 8px;">

        <label for="alter">Alter</label>
        <input type="number" id="alter" name="alter" min="0" max="120" style="padding: 8px;">

        <button type="submit" formmethod="get" style="padding: 10px;">
            Mit GET senden
        </button>
        <button type="submit" formmethod="post" style="padding: 10px;">
            Mit POST senden
        </button>
    </form>

</body>

</html>