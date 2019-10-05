<?php
include "classes/Main.php";

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

     public function setWeight($weight)
     {
         $this->weight = $weight;
     }

    public function setSize($size)
    {
        $this->size = $size;
    }

}

?>