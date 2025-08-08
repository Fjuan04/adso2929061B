<?php
    include '../config/app.php';
    include '../config/database.php';
    include '../config/security.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu mejor amigo en casa - Add</title>
    <link rel="stylesheet" href="<?=$css?>master.css">
</head>
<body>
    <main class="add">
        <header>
          
            <h2>Adicionar Mascota</h2>
            <a href="dashboard" class="back"></a>
            <a href="logout.php" class="close"></a>
        </header>
        <figure class="photo-preview">
            <img id="preview" src="../public/imgs/photo-lg-0.svg" style="border-radius: 50%; width: 170px; height: 170px; overflow: hidden; object-fit: cover" alt="">
        </figure>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Nombre">
            <div class="select">
                <select name="raza">
                    <option value="">Seleccione Raza...</option>
                    <option value="1">Pug</option>
                    <option value="2">Bulldog</option>
                    <option value="3">Cocker</option>

                </select>
            </div>
            <div class="select">
                <select name="especie">
                    <option value="">Seleccione Categoría...</option>
                    <option value="1">Perro</option>
                    <option value="2">Gato</option>

                </select>
            </div>
            <input name="foto" type="file" id="foto" style="display: none;" accept="image/*">
            <button type="button" id="upload" class="upload">Subir Foto</button>
            <div class="select">
                <select name="genero">
                    <option value="">Seleccione Genero...</option>
                    <option value="1">Macho</option>
                    <option value="2">Hembra</option>
                </select>
            </div>
            <button class="save">Guardar</button>
        </form>

        <?php
            if($_POST){
                $name = $_POST['name'];
                $raza = $_POST['raza'];
                $especie = $_POST['especie'];
                $genero = $_POST['genero'];

                if(isset($_FILES['foto'])){
                    $foto = $_FILES['foto'];
                    $unico = uniqid().'_'.$foto['name'];
                    $rutafinal = '../uploads/'. $unico;
                    move_uploaded_file($foto['tmp_name'], $rutafinal);
                    
                    $sql = "INSERT INTO pets
                    (name, specie_id, breed_id, photo, sex_id)
                    VALUES (?, ?, ?, ?, ?)";

                    $stmt = $conx->prepare($sql);
                    $stmt->execute([$name, $especie, $raza, $unico, $genero]);
                    
                    echo "<script>alert('La mascota $name ha sido añadida con exito')
                        window.location.replace('dashboard')
                    </script>";
                }
                
                


            }

        ?>
    </main>

    <script>
        const pre = document.getElementById('preview')
        const foto = document.getElementById('foto')
        const btn = document.getElementById('upload')

        btn.addEventListener('click', ()=>{
            foto.click()
        })

        foto.addEventListener('change', function(){
            pre.src = URL.createObjectURL(this.files[0]);
        })

    </script>
</body>
</html>