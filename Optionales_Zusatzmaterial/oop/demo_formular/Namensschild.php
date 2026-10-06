<?php
class Namensschild
{
    private $name = "";

    // Der Name ist in auswertung.php bereits geprüft.
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getText()
    {
        return "Hallo, " . $this->name . "!";
    }
}
