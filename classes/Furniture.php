<?php
require_once "classes/Main.php";

class Furniture extends Main
{

    // SET Parametre
    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setLength($length)
    {
        $this->length = $length;
    }

    public function setWeight($weight) {}   
    public function setSize($size) {}
   
}

?>