<?php

$title  = '19-trait';
$description = " A mechanism for code reuse in single inheritance languages.";


include 'template/header.php';

trait Hello {
    public function showHello($name) {
        echo "<li> <b>Welcome:</b>".$name."</li>";
    }
}

trait Adso {
     public function showAdso($code) {
        echo "<li> <b>Program:</b>".$code."</li>";
    }
}

class Deportment {
    use Hello, Adso;
    public function showDeportment($dep) {
        echo "<li> <b>Department:</b>".$dep."</li>";    
    }
}

$h1 = new Deportment();
$h1->showHello('Juan David');
$h1->showAdso(2929061);
$h1->showDeportment('Caldas');

include_once 'template/footer.php';