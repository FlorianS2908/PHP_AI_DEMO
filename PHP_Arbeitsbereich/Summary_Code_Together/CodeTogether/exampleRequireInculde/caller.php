<?php
# verpflichtend => bei nicht funktionalität gibt es einen Error
# __DIR__ => ist ein konstante in der der Pfad zum aktuellen Ordner liegt
# C:\xampp\htdocs\PHP\PHP\Summary_Code_Together\CodeTogether\exampleRequireInculde
require_once __DIR__."/funktionen.php";# __DIR__ + Dateiname
# __DIR__ steht in php file => OrdnerPfad zu dieser Datei
# nicht verpflichtend => Warning
#include __DIR__."/funktionen.php";
# once bietet das einmalig nutzen der Datei an
#require_once __DIR__."/funktionen.php";
#include_once __DIR__."/funktionen.php";
echo addiere(1,3);
echo addiere2(1,3);
echo "Test";

?>