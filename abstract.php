<?php

abstract class Shape {
    abstract public function area();
}

class Circle extends Shape{
    public $radius;
    public function __construct($radius)
    {
        $this-> radius = $radius;
    }
    public function area(){
        return pi() * $this->radius * $this->radius;
    }
}

$circle = new Circle(10);
echo $circle->area();