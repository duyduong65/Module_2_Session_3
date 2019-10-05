<?php

class Fan
{
    const low = 1;
    const medium = 2;
    const fast = 3;
    private $speed;
    private $on;
    private $radius;
    private $color;

    function __construct($speed = self::low, $on = false, $radius = 5, $color = "blue")
    {
        $this->speed = $speed;
        $this->on = $on;
        $this->radius = $radius;
        $this->color = $color;
    }

    function getSpeed(){
        return $this->speed;
    }
    function setSpeed (){

    }

}