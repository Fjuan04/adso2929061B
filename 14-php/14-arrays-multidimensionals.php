<?php
$title = '14-Arrays-Multidimensional';
$description = 'Array that contains other nested arrays.';

include 'template/header.php';
    $bicycles =array (
        'Specialized' => ['Monster', 'Pro', 'Good'],
        'Santa Cruz' => ['High', 'Nomad', 'Tower']
    );


    foreach($bicycles as $key => $value){
        echo "<h3>$key</h3>";
        echo "<ul>";
        foreach($value as $ref){
            echo "<li> $ref </li>";
        }
        echo "</ul>";   
    }
include 'template/footer.php';