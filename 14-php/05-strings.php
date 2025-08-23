<?php
$title = '05- string';
$description = 'Different ways to comment code.';

include 'template/header.php';

    $num1 = 25.6;
    $num2 = 4;
    
    $string1 = "Lorem Ipsum Dolor ";
    $string2 = 'Sit Amet Consecutare';
    
    echo "<p>" . $string1  . $string2 . "</p>"; 
    echo  "Characters length is: " . strlen($string1.$string2);


    

include 'template/footer.php';