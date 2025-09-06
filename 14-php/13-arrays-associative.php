<?php
$title = '13-Arrays-associative';
$description = 'Array with "custom keys" as index';

include 'template/header.php';

    $characters = array (
        'Tanjiro Kamado' => 16,
        'Nezuko Kamado' => 15,
        'Zenitsu Agatsuma' => 17,
        'Inosuke Hashibira' => 18,

    );

    $characters['Genya Shinazugawa'] = 20;
    $characters['Kanao Tsuyuri'] = 19;

    foreach($characters as $key => $value):
        echo   $key . ":". $value . "<br><br>";
    endforeach;
include 'template/footer.php';