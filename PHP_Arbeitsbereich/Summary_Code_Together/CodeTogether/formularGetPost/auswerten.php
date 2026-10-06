<?php
# Eintrittspreis berechnen anhand der Daten


# $_POST & $_GET sind die Variablen für die Daten aus dem HTML Formular

if($_SERVER['REQUEST_METHOD'] === "POST"){
    var_dump($_POST);
    $daten = $_POST; # bei POST sonst nicht
    var_dump($daten);
    if($daten['alter'] === "" || $daten['name'] === ""){
        header("Location: formular.php?fehler=name");
       // echo "
        #<script>
         #   alert('Bitte gib einen Namen ein.');
          #  window.location.href = 'index.html';
       # </script>";
        # Daten welche schon korrekt sind bitte wieder ins Formular injecten
       # echo "<script> alert('Bitte kontrollieren sie ihre Daten') </script>";
        #header("Location: index.html");# redirect
        exit;

   }else{
        echo "ich bin nicht gesetzt";
    }

}elseif($_SERVER['REQUEST_METHOD'] === "GET"){
    var_dump($_GET);
    $daten = $_GET; # Bei GET sonst nicht
    if($daten['alter'] === "" || $daten['name'] === ""){
        header("Location: formular.php?fehler=alter");}
}
else{
    http_response_code(405);
    header("Allow: Get | Post");
    exit("Nur Get & Post erlaubt");
    # => errorLog enstehen => Fehler in Log File schreiben
}



?>