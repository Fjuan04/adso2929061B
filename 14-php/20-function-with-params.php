<?php
$title = '20-functions-params';
$description = 'Functions that operate with values send by parammeter';

include 'template/header.php';

        function sum($n1, $n2 = 5){
            echo $n1 + $n2. "<br>";
        }

        sum(1, 2);
        sum(5);

include 'template/footer.php';