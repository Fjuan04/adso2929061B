<?php

try {
    $conx = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit;
}

//login

function login($email, $password, $conx) {
    try {
        $sql = "SELECT *
        FROM users
        WHERE email = :email
        AND password = :password
        LIMIT 1";

        $stmt = $conx->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $usr = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['uid'] = $usr['id'];
            return true;
        }else {
            $_SESSION['error'] = "User no registered";
            return false;
        }

    } catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
    }
}


//function list pets

function listPets($conx){
    try{
        $sql = "SELECT p.id,
        p.name,
        p.photo,
        s.name as specie,
        b.name as breed
        FROM pets AS p, 
        species AS s,
        breeds AS b
        WHERE s.id = p.specie_id AND
        b.id = p.breed_id";
        $stmt = $conx->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);


    }catch (PDOException $e){
        echo $e->getMessage();
    }
}