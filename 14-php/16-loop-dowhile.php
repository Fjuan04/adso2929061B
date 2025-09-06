<?php
$title = '16-loop-Dowhile';
$description = 'Loop that executes WHILE a condition comes true.';

include 'template/header.php';
$i = 1; 

    do {
        if($i % 2 ==0){
            echo "<p>$i</p>";
        }
        $i++;
    }while($i<18);

include 'template/footer.php';