<?php
$title = '21-functions-returns';
$description = 'Functions that return a response / result';

include 'template/header.php';

        function div($n1, $n2 = 5){
            return  "$n1 / $n2 = ".  $n1 / $n2. "<br>";
        }

        echo div(25);
        echo div(25, 6);

include 'template/footer.php';