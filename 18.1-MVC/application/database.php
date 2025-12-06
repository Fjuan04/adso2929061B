<?php

abstract class DataBase {
    protected static $conn = null;

    public static function connect(){
        if(self::$conn === null){
            try {
                $host = 'localhost';
                $dbnm = 'pokeadso';
                $user = 'root';
                $pass = 'root';

                self::$conn = new PDO("mysql:host=$host;dbname=$dbnm;charset=utf8mb4", $user, $pass);
            } catch (PDOException $e){
                
                die("Connection error: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}