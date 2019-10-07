<?php
require_once "classes/Main.php";

class Book extends Main
{
    // SET Parametre
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function setSize($size){}
    public function setHeight($height){}
    public function setWidth($width){}
    public function setLength($length){}
    
}

?>