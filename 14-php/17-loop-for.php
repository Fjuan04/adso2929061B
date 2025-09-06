<?php
$title = '17-loop-for';
$description = 'Loop that repeats for a specific number of iters';

include 'template/header.php';
    for($i = 1; $i <=50; $i++){
        if($i % 5 == 0){
            echo "<p> $i</p>";
        }
    }

include 'template/footer.php';