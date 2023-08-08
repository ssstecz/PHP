<?php

class Vehicle {

        private $name;

        function horn(){
            echo"<br>Vehicle Horn!";
        }
}


class LVehicle extends Vehicle{
    function horn(){
        echo"<br>Light Vehicle Horn!";
    }
}

class HVehicle extends Vehicle{
    function horn(){
        echo"<br>Heavy Vehicle Horn!";
    }
}

class MotorBike extends Vehicle{
    function horn(){
        echo"<br>Motor Bike Horn!";
    }
}



$vh = new Vehicle();
$lv = new LVehicle();
$hv = new HVehicle();
$mb = new MotorBike();

$vh->horn();
$lv->horn();
$hv->horn();
$mb->horn();

// Change vehicle

$vh = $lv;
echo"<br><br><br>";
$vh->horn();

class User {
    public $id;
    public $name;
    public $email;

    public function __construct($id, $name, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public static function getById($id) {
        // Get database connection and execute query
        $pdo = new PDO("mysql:host=localhost;dbname=scwtest__01", "root", "");
        $stmt = $pdo->prepare("SELECT * FROM tab03 WHERE id = :id");
        $stmt->execute(array(":id" => $id));

        // Get row as associative array
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Create new User object from row data
        return new User($row['sku'], $row['product'], $row['price']);
    }
}

// Usage:
$user = User::getById(1);
echo $user->name;

?>
