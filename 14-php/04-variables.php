<?php
$title = '04- variables';
$description = 'How to define & use variables';

include 'template/header.php';

    $num1 = 25.6;
    $num2 = 4;
    
    $string1 = "This is a ";
    $string2 = 'String value';
    
    echo "<p> $num1 + $num2 = " . ($num1+$num2) . "</p>";
    echo "<p>" . $string1  . $string2 . "</p>";


    

include 'template/footer.php';