<?php


$gegenstand = "";
$farbe = "";
$error = [];
$daten = [];


if($_SERVER["REQUEST_METHOD"] !== "GET"){
    $error["REQUEST_METHOD_ERROR"] = "Bitte die per Get übersenden";
}
var_dump($_GET);
if(isset($_GET["gegenstand"]) && is_string($_GET["gegenstand"])){
    $gegenstand = trim($_GET["gegenstand"]);
}
if($gegenstand === ""){
    $error["DATEN_ERROR_GEGENSTAND"] = "Bitte Formular ausfüllen";
    $daten["gegenstand"]  = "";
}else{
    $daten["gegenstand"]  = $gegenstand; 
}

if(isset($_GET["farbe"]) && is_string($_GET["farbe"])){
    $farbe = trim($_GET["farbe"]);
}
if($farbe === ""){
    $error["DATEN_ERROR_FARBE"] = "Bitte Formular ausfüllen";
    $daten["farbe"]  = ""; 
}else{
    $daten["farbe"]  = $farbe; 
}

if(!empty($error)){

    $anzahlDurchlauf = 0;
    $zeichenkette = "";
    foreach($error as $key => $value){
        $anzahlDurchlauf++;
        $zeichenkette .= $anzahlDurchlauf . " Error => ". $key . " => " . $value . "<br>" . PHP_EOL;# Wo wird die Zeichenkette eventuell visualisiert PHP_EOL => Zeilenumbruch aber nur in PHP nicht im Browser
    }
    $daten["error"] = $zeichenkette;
    
}
$urlParameter = http_build_query($daten,"", "&");
header("Location: index.php?".$urlParameter, true, 303); 
exit;

?>