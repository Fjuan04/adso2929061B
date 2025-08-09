<?php

session_start();

//routes absolutes
$url = 'http://'.$_SERVER['HTTP_HOST'].'/';
$public = $url . 'public/';
$css = $public . 'css/';
$js = $public . 'js/';
$imgs = $public . 'imgs/';
// DataBase Config

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = "petsbd";