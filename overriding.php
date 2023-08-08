<?php

class Base{

public function hello(){
    echo "This is base class!";
}

 }

 class Child extends Base{

    public function hello(){
        echo "This is child class!";
    }
    
     }
    
     $b = new Base;
     $c = new Child;

     $b->hello();
     echo "<br>";
     $c->hello();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overriding</title>
</head>
<body>
    <br><br>
    <h1>Different objects call the same method </h1>
    <br>
    <p> Using "final" in front of the method block inheritance,
        <br> the child class can't use it anymore. If it is in front of the class,
        <br> the class cannot be extended  </p>
</body>
</html>