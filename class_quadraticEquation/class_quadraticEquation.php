<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getA()
    {
        return $this->a;
    }

    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function getDiscriminant()
    {
        return ($this->b * $this->b) - (4 * $this->a * $this->c);
    }

    public function getRoot1()
    {
        return round((-$this->b - sqrt($this->getDiscriminant()) / (2 * $this->a)),2);
    }

    public function getRoot2()
    {
        return round(((-$this->b + sqrt($this->getDiscriminant())) / (2 * $this->a)),2);
    }
}


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $quadratic = new QuadraticEquation($a, $b, $c);

    if ($quadratic->getDiscriminant() >= 0) {
        echo "X1 = " . $quadratic->getRoot1() . " : X2 = " . $quadratic->getRoot2();
    } else {
        echo "Phương trình vô nghiệm";
    }
}
