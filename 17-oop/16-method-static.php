<?php

$title  = '16-method-static';
$description = "  A method called on the class itself, not on an instance.";


include 'template/header.php';

class Car {
    public $brand;
    public $refer;

    public static function showInfoCar($brand, $refer) {
        # Error: $this can not be used in static methods
        # $this->brand = $brand;

        return "<li> 
                    <b>Brand: </b> {$brand} 
                    <b>Reference: </b> {$refer}
                </li>";
    } 

}

echo Car::showInfoCar('Aston Martin', 'DB9');
echo Car::showInfoCar('Porshe', 'Carrera GT');
echo Car::showInfoCar('Lamborgini', 'Gallardo');

include 'template/footer.php';