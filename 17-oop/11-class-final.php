<?php 
$title  = '11-class-final';
$descripcion = " A class that cannot be extended by any other class.";
include 'template/header.php';
final class Fruit {
    private $name;
    private $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function showInfoFruit() {
        return "<li> 
                     <b>Fruit Name:</b>{$this->name} <br>
                     <b>Fruit Color:</b>{$this->color}
                </li>";
    }
}
# Error: Class Orange cannot extend final class Fruit
# class Orange extends Fruit { }
$fr = new Fruit('Pinapple', 'Yellow');
echo $fr->showInfoFruit();

$fr = new Fruit('Apple', 'Green');
echo $fr->showInfoFruit();

$fr = new Fruit('Blueberry', 'Dark Purple');
echo $fr->showInfoFruit();


include 'template/footer.php';