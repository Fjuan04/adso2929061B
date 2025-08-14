<?php
    // Connection Data Base
    try {
        $conx = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
 
    // Login
    function login($email, $password, $conx) {
        try {
           $sql = "SELECT *
                   FROM users
                   WHERE email = :email
                   AND password = :password
                   LIMIT 1";
            $stmt = $conx->prepare($sql);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":password", $password);
            $stmt->execute();
 
            if($stmt->rowCount() > 0) {
                $usr = $stmt->fetch(PDO::FETCH_ASSOC);
                $_SESSION['uid'] = $usr['id'];
                return true;
            } else {
                 $_SESSION['error'] = "El Usuario no esta registrado!";
                return false;
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
 
    // List Pets
    function listPets($conx) {
        try {
            $sql = "SELECT p.id AS id,
                           p.name AS name,
                           p.photo AS photo,
                           s.name AS specie,
                           b.name AS breed
                    FROM pets AS p,
                         species AS s,
                         breeds AS b
                    WHERE s.id = p.specie_id
                    AND b.id = p.breed_id";
            $stmt = $conx->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
 
    // Add Pet
    function addPet($name, $specie_id, $breed_id, $sex_id, $photo, $conx) {
        try {
            $sql = "INSERT INTO pets
                    (name, specie_id, breed_id, sex_id, photo)
                    VALUES
                    (:name, :specie_id, :breed_id, :sex_id, :photo)";
            $stmt = $conx->prepare($sql);
            $stmt->bindparam(":name", $name);
            $stmt->bindparam(":specie_id", $specie_id);
            $stmt->bindparam(":breed_id", $breed_id);
            $stmt->bindparam(":sex_id", $sex_id);
            $stmt->bindparam(":photo", $photo);
            if($stmt->execute()) {
                return true;
            } else {
                return false;
            }
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Delete Pet
    function deletePet($id, $conx) {
        try {
            $sql = "DELETE 
                    FROM pets
                    WHERE id = :id";
            $stmt = $conx->prepare($sql);
            $stmt->bindparam(":id", $id);
            if($stmt->execute()) {
                return true;
            } else {
                return false;
            }  
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    // Show Pet
    function showPet($id, $conx) {
        try {
            $sql = "SELECT  
                            p.specie_id,
                            p.sex_id,
                            p.breed_id,
                            p.name AS name,
                           p.photo AS photo,
                           s.name AS specie,
                           b.name AS breed,
                           x.name AS sex
                    FROM pets AS p,
                         species AS s,
                         breeds AS b,
                         sexes AS x
                    WHERE x.id = p.specie_id
                    AND b.id = p.breed_id
                    AND p.id = :id";
            $stmt = $conx->prepare($sql);
            $stmt->bindparam(":id", $id);
            $stmt->execute();
            return $stmt->fetch();

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
 
    // List Breeds
    function listBreeds($conx) {
        try {
            $sql = "SELECT *
                    FROM breeds";
            $stmt = $conx->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
    // List Breeds
    function listSexes($conx) {
        try {
            $sql = "SELECT *
                    FROM sexes";
            $stmt = $conx->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    // List Species
    function listSpecies($conx) {
        try {
            $sql = "SELECT *
                    FROM species";
            $stmt = $conx->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    //update pet

    function updatePet($id,$name, $specie_id, $breed_id, $sex_id, $photo, $conx){
        $sql = "UPDATE pets 
                SET name = :name,
                    specie_id = :specie,
                    breed_id = :breed,
                    sex_id = :sex,
                    photo = :photo
                    WHERE id = :id";
        $stmt = $conx->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':specie', $specie_id);
        $stmt->bindParam(':breed', $breed_id);
        $stmt->bindParam(':sex', $sex_id);
        $stmt->bindParam(':photo', $photo);
        
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }

        
    }