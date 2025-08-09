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
        <form action="" method="post">
            <input type="text" name="name" placeholder="Nombre" value="<?=$pet["name"]?>">
            <div class="select">
                <select name="raza">
                    <option selected value="<?=$pet["breed_id"]?>"><?=$pet["breed"]?></option>
                    <option value="1">Corgi</option>
                    <option value="2">Bulldog</option>
                </select>
            </div>
            <div class="select">
                <select name="specie_id">
                    <option selected value="<?=$pet["specie_id"]?>"><?=$pet["specie"]?></option>
                    <option value="1">Perro</option>
                    <option value="2">Gato</option>
                </select>
            </div>
            <input type="file" id="photo" style="display:none">
            <button type="button" class="upload">Subir Foto</button>
            <div class="select">
                <select name="sex_id">
                    <option selected value="<?=$pet["sex_id"]?>"><?=$pet["sex"]?></option>
                    <option value="1">Macho</option>
                    <option value="2">Hembra</option>
                </select>
            </div>
            <button class="update">Modificar</button>
        </form>
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