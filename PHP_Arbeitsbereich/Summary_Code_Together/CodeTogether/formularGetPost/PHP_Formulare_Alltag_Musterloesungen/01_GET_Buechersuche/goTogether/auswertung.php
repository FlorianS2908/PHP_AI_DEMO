<?php
/**1. Sende suchbegriff mit GET an auswertung.php. Prüfe den Eintrag in $_GET mit isset(), bevor du ihn ausliest.
2. Übernimm nur einen Textwert und entferne äußere Leerzeichen. Ein fehlender oder danach leerer Suchbegriff ist ungültig.
3. Leite bei einem Fehler mit header() zum Formular zurück. Zeige dort die Fehlermeldung; das Feld bleibt leer.
4. Bei gültiger Eingabe gib aus, wonach gesucht wird. Eine echte Büchersuche wird nicht programmiert. */

# 1 HTML Formular => GET | POST => Server => Request aufrufen




$suchbegriff = "";
$error = [];
$daten = [];


if($_SERVER["REQUEST_METHOD"] !== "GET"){
    $error["REQUEST_METHOD_ERROR"] = "Bitte die per Get übersenden";
}
if(isset($_GET["suchbegriff"]) && is_string($_GET["suchbegriff"])){
    $suchbegriff = trim($_GET["suchbegriff"]);
}
if($suchbegriff === ""){
    $error["DATEN_ERROR_SUCHBEGRIFF"] = "Bitte Formular ausfüllen";
    #DATEN_ERROR=Bitte+Formular+ausfüllen
}else{
    $gueltigeDaten["suchbegriff"]  = $suchbegriff; 
}
# Fehler kommen nicht nur an einer Stelle vor => TOPDOWN => function
# keine Funktion soondern ich sammle die Fehler
if(!empty($error)){


    #$daten["error"] = implode("Error => ", $error);
    // erzeuge eine zeichenkette die Beliebig viele Fehler in dem Format => 
    #1. Error => "Bitte die per Get übersenden"
    #2. Error => "Bitte Formular ausfüllen"
    // anzeigt und speicher das im Array Daten unter dem Key error
    /**
     * - durchlaufe das Array $error mittels Foreach
     * - erzeuge eine Zeichenkette mit dem Format => anzahlDurchlauf + ". Error => " + Key + " => " + Value + zeilenumbruch
     * - füge jedes weiter Elemnet der Zeichenkette hinzu
     * - wenn das Array keine weitern element mehr hat => speichere diesen String im Array Daten unter dem Key "error"
     */

    # Algo => 1. Das Herzstück => erstellen der Zeichenkette 2. Struktur dazu

    #1. Herzstück
    $anzahlDurchlauf = 0;
#    $key = "";
#    $value = "";
    $zeichenkette = "";
#    $zeichenkette += $anzahlDurchlauf . " Error => ". $key . " => " . $value . "\\n";
    #2. Strucktur
    foreach($error as $key => $value){
        $anzahlDurchlauf++;
        $zeichenkette .= $anzahlDurchlauf . " Error => ". $key . " => " . $value . "<br>" . PHP_EOL;# Wo wird die Zeichenkette eventuell visualisiert PHP_EOL => Zeilenumbruch aber nur in PHP nicht im Browser
    }
    #1 Error => REQUEST_METHOD_ERROR => Bitte die per Get übersenden\n2 Error => DATEN_ERROR_SUCHBEGRIFF => Bitte Formular ausfüllen\n  => 
    #echo $zeichenkette;
    $daten["error"] = $zeichenkette;
    $urlParameter = http_build_query($daten,"", "&");
    #REQUEST_METHOD_ERROR=Bitte die per Get übersenden&DATEN_ERROR=Bitte Formular ausfüllen
    header("Location: index.php?".$urlParameter, true, 303); # => jedes
    exit;
}

function foreachExample(){
    # iterierbare Strukturen => Mengenspeicher => "Florian" => F l o r i a n => 123456 => 1 2 3 4 5 6 
    $name = "Florian"; 
    $array = ["a" => "F", "l", "o", "c" => "r", 1 => "i", "a", "c2x" => "n"];  
    var_dump($array);
    foreach($array as $value){
        #1. Durchlauf => steht in $value => F => key 0
        #2. Durchlauf => setht in $value => l
        #3. Durchlauf => setht in $value => o
        #4. Durchlauf => setht in $value => r
        #5. Durchlauf => setht in $value => i
        #6. Durchlauf => setht in $value => a
        #7. Durchlauf => setht in $value => n => key 6
    }
    foreach($array as $key => $value){
        echo "Feld: " . $key . " Value => ". $value .'<br>';
    }
}

?>