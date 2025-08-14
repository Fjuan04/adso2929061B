<?php
    include '../config/app.php';
    include '../config/database.php';
    include '../config/security.php';

    if($_GET){
        $id = $_GET['id'];
        $stmt = $conx->prepare("SELECT photo
                                FROM pets
                                WHERE id = :id");
        
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        if($stmt->rowCount()>0){
            $image = $stmt->fetch();
            $imagePath = $image['photo'];
        }

        if(deletePet($id, $conx)){
            unlink('../uploads/'.$imagePath);
            $_SESSION['message'] = "La Mascota ha sido eliminada con exito!";
            echo "<script>window.location.replace('dashboard.php')</script>";
        }
    }