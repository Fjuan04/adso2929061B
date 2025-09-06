<?php
$title = '15-loop-while';
$description = 'Loop that executes WHILE a condition comes true.';

include 'template/header.php';
$i = 1; 
while($i <= 10){
    echo "<p>$i</p>";
    $i++;
}

include 'template/footer.php';