<?php
$chatname = "";
$error = [];
$daten = [];


if($_SERVER["REQUEST_METHOD"] !== "POST"){
    $error["REQUEST_METHOD_ERROR"] = "Bitte die per POST übersenden";
}
if(isset($_POST["chatname"]) && is_string($_POST["chatname"])){
    $chatname = trim($_POST["chatname"]);
}
if($chatname === ""){
    $error["DATEN_ERROR_CHATNAME"] = "Bitte Formular ausfüllen";
}else{
    $gueltigeDaten["chatname"]  = $chatname; 
}
if(!empty($error)){

    $anzahlDurchlauf = 0;
    $zeichenkette = "";
    foreach($error as $key => $value){
        $anzahlDurchlauf++;
        $zeichenkette .= $anzahlDurchlauf . " Error => ". $key . " => " . $value . "<br>" . PHP_EOL;
    }
    $daten["error"] = $zeichenkette;
    $urlParameter = http_build_query($daten,"", "&");
    header("Location: index.php?".$urlParameter, true, 303); 
    exit;
}
?>