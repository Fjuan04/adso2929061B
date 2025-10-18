<?php 
    $title       = '26- Server Side Include';
    $description = 'Is used to include the content of one file into another.';

    include 'template/header.php';
?>
    <h2>Esto esta siendo ejecutado con SSI</h2>

<?php

    include 'template/footer.php'; 
?>