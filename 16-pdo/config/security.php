<?php
    if(!isset($_SESSION['uid'])){
        $_SESSION['error'] = "Please login first";
        header("Location: /index.php");
    }