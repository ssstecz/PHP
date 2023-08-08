<?php

interface Shape{

    public function calculateArea();

}

class Circle implements Shape{
    private $radius;

    public function __construct($r){
        $this->radius = $r;
    }

    public function calculateArea(){
        echo "Area of circle = ".pi()*$this->radius*$this->radius.
        "<br>";
    }
} 
class Rectangle implements Shape{

    private $height;
    private $widht;

    public function __construct($h,$w){
        $this->height = $h;
        $this->width = $w;
            }

    public function calculateArea(){
        echo "Area of rectangle = ".$this->height*$this->width.
         "<br>";
    }
}

$circle = new Circle(5);
$rect = new Rectangle(10,20);

$circle->calculateArea();
$rect->calculateArea(); 

?>