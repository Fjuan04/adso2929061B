<?php
    include '../config/app.php';
    include '../config/database.php';
    include '../config/security.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu mejor amigo en casa - Edit</title>
    <link rel="stylesheet" href="<?=$css?>master.css">
</head>
<body>
    <main class="edit">
        <header>
            <h2>Modificar Mascota</h2>
            <a href="dashboard.php" class="back"></a>
            <a href="index.php" class="close"></a>
        </header>
        <?php 
            $id = $_GET['id'];
            $pet = showPet($id, $conx);
        ?>
        <figure class="photo-preview">
            <img id="preview" src="../uploads/<?=$pet["photo"]?>" alt="">
        </figure>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Nombre" value="<?=$pet["name"]?>">
            <div class="select">
                <select name="raza">
                    <?php $breeds = listBreeds($conx) ?>
                    <?php foreach($breeds as $breed): ?>
                        <option value="<?=$breed['id']?>" <?= $breed['id'] == $pet['breed_id'] ? 'selected' : '' ?>><?=$breed['id']?>-<?=$breed['name']?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="select">
                <select name="specie_id">
                   <?php $species = listSpecies($conx) ?>
                    <?php foreach($species as $specie): ?>
                            
                        <option value="<?=$specie['id']?>" <?= $specie['id'] == $pet['specie_id'] ? 'selected' : '';?>>
                            <?=$specie['id']?>-<?=$specie['name']?>
                        </option>
                    <?php endforeach ?> 
                </select>
            </div>
            <input name="photo" type="file" id="photo" style="display:none">
            <button type="button" class="upload">Subir Foto</button>
            <div class="select">
                <select name="sex_id">
                    <?php $sexes = listSexes($conx);
                        foreach($sexes as $sex): ?>

                        <option value="<?=$sex['id']?>" <?= $sex['id'] == $pet['sex_id'] ? 'selected' : '' ?>><?=$sex['id']?>-<?=$sex['name']?></option>

                    <?php endforeach?>
                </select>
            </div>
            <button class="update">Modificar</button>
        </form>

         <?php
            if($_POST) {
                $errors = 0;
                foreach ($_POST as $key => $value) {
                    if(empty($value)) {
                        $errors++;
                    }
                }
                
                //var_dump($_POST);
                //var_dump($_FILES);
 
                if($errors == 0) {
                    $name      = $_POST['name'];
                    $specie_id = $_POST['specie_id'];
                    $breed_id  = $_POST['raza'];
                    $sex_id    = $_POST['sex_id'];
                    
                    if($_FILES['photo']['error'] == 0){
                        $photo     = time()."_".$_FILES['photo']['name'];
                        move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/".$photo);
                        if(updatePet($id, $name, $specie_id, $breed_id, $sex_id, $photo, $conx)) {
                            $imagePath = "../uploads/".$pet['photo'];
                            unlink($imagePath);
                            $_SESSION['message'] = "La Mascota $name se modificó con exito!";
                            echo "<script>window.location.replace('dashboard.php')</script>";
                        }
                    }else {
                        $photo = $pet['photo'];
                        if(updatePet($id, $name, $specie_id, $breed_id, $sex_id, $photo, $conx)) {
                            
                            $_SESSION['message'] = "La Mascota $name se modificó con exito!";
                            echo "<script>window.location.replace('dashboard.php')</script>";
                        }
                    }
 
                    
 
                } else {
                    $_SESSION['error'] = "Todos los campos son requeridos!";
                }
 
            }
 
            if(isset($_SESSION['error'])) {
                include 'error.php';
                unset($_SESSION['error']);
            }
        ?>
    </main>
    <script>
        const preview = document.querySelector('#preview')
        const upload  = document.querySelector('.upload')
        const photo   = document.querySelector('#photo')
 
        upload.addEventListener('click', function() {
            photo.click()
        })
 
        photo.addEventListener('change', function() {
            preview.src = window.URL.createObjectURL(this.files[0])
        })
    </script>
</body>
</html>