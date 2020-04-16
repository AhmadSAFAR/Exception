<?php
require_once 'Car.php';
$car = new Car('green', 4, 'electric',true);
var_dump($car);
try{
     $car->start();
}catch(exception $e){
    echo $e->getMessage()."<br>";
     $car->setParkBrake(false);
     var_dump($car);
}
finally {
    echo "My car drives like a donut";
}
echo"<br>";
