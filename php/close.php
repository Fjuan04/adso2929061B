<?php
session_start();

unset($_SESSION['uid']);
unset($_SESSION['error']);

if(session_destroy()){
    
}