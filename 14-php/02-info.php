<?php 
    $title = '02- PHP Info';
    $description  = 'Show All information of PHP';

    include 'template/header.php';
    echo "<div style='width: fit-content; background: #0009; position: absolute; top: 400px; left: 50%; transform: translate(-50%)'>";
        phpinfo();
    echo "</div>";

    include 'template/footer.php';
