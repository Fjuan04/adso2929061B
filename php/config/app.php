<?php
session_start();

// Detecto protocolo (http o https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') 
    ? "https" 
    : "http";

// Detecta host y puerto
$host = $_SERVER['HTTP_HOST'];

//carpeta base;
$uri = $_SERVER["SCRIPT_NAME"];
$seg = explode('/', $uri);
$base = $seg[1];
// Ruta base dinámica
$url = $protocol . "://" . $host  . "/" . $base . '/';

// Carpetas públicas
$public = $url . 'public/';
$css    = $public . 'css/';
$js     = $public . 'js/';
$imgs   = $public . 'imgs/';




$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = "petsbd";