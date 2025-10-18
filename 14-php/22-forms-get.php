<?php
$title = '22-forms-get';
$description = 'Form get';

include 'template/header.php';

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo $_GET['method'] ;
}
include 'template/footer.php';
?>