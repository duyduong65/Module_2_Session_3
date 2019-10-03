<?php

class Rectangle
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function getWidth()
    {
        return $this->width;
    }

    function getHeight()
    {
        return $this->height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimetet()
    {
        return 2 * ($this->width + $this->height);
    }

    public function display()
    {
        echo "width: " . $this->getWidth() . "<br>" . "height: " . $this->getHeight();
    }
}

$width = 10;
$height = 20;
$rect = new Rectangle($width, $height);

echo $rect->display()."<br>";
echo "S= ".$rect->getArea()."<br>";
echo "C= ".$rect->getPerimetet();
?>