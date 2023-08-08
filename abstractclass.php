<?php
abstract class Shape{

    abstract public function calculateArea();

}

//include absshape.php

class Circle extends Shape{
    private $radius;

    public function __construct($r){
        $this->radius = $r;
    }

    public function calculateArea(){
        echo "Area of circle = ".pi()*$this->radius*$this->radius.
        "<br>";
    }
} 
class Rectangle extends Shape{

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

$circle = (new Circle(15))->calculateArea();
$rect = new Rectangle(45,29);

//$circle->calculateArea();
$rect->calculateArea(); 

?>