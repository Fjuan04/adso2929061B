<?php
$title = '18-loop-foreach';
$description = 'Loop that repeats for a specific lenght of an array';

include 'template/header.php';
    $word = 'AMERICA';

    $langs =['PHP', 'HTML', 'CSS', 'JS'];

    foreach($langs as $i =>  $lang){
        echo "$i ======>  $lang <br>";
    }

include 'template/footer.php';