<?php 
$title = '01 - Class';
$description = 'CLASS';
include 'template/header.php';


class Vehicle {
    # Attributes

    public $brand;
    public $refer;
    public $color;
    public $model;

    # Methods

    public function setAttributes($b, $r, $c, $m) {
        $this->brand = $b;
        $this->refer = $r;
        $this->color = $c;
        $this->model = $m;
    }

    public function getAttributes() {
        return "<ul>
                    <li>Brand: $this->brand</li>
                    <li>Brand: $this->refer</li>
                    <li>Brand: $this->color</li>
                    <li>Brand: $this->model</li>
                </ul>";
    }
}
# Object Instance
$vh1 = new Vehicle;

$vh1->setAttributes('Volkswagen', 'Golf', 'Black', 2020);

echo $vh1->getAttributes();


$vh2 = new Vehicle;

$vh2->setAttributes('Nissan', 'Murano', 'Gray', 2022);

echo $vh2->getAttributes();

//
$vh3 = new Vehicle;

$vh3->brand = 'Toyota';
$vh3->refer = '4Runner';
$vh3->color = 'Orange';
$vh3->model = '2010';

echo $vh3->getAttributes();


include 'template/footer.php';