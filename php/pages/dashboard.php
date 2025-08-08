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
    <title>Tu mejor amigo en casa - Dashboard</title>
    <link rel="stylesheet" href="<?=$css?>master.css"">
</head>
<body>
   
    <main class="dashboard">
        <header>
            <h2>Administrar Mascotas</h2>
            <a href="logout.php" class="close"></a>
        </header>
       <a href="add" class="add"></a>   
       <table>  

        <?php 
            $pets = ListPets($conx);
        
            forEach($pets as $pet):
        ?>
        
           <tr>
               <td>
                
                    <figure class="photo">
                        <img style="overflow: hidden; object-fit: cover; width: 70px; height: 72px; border-radius: 50%; border: 4px solid #2c467499 " src="<?= '../uploads/'.$pet['photo'] ?>" alt="">
                    </figure>
                    <div class="info">
                        <h3><?= $pet['name'] ?></h3>
                        <h4><?= $pet['specie'] ?> - <?= $pet['breed'] ?></h4>
                    </div>
                    <div class="controls">
                        <a href="show/<?= $pet['id'] ?>" class="show"></a>
                        <a href="edit/<?= $pet['id'] ?>" class="edit"></a>
                        <a class="delete" href="javascript:deletePet(<?= $pet['id'] ?>, '<?= htmlspecialchars($pet['name'], ENT_QUOTES) ?>')"></a>

                    </div>
               </td>
           </tr>
        <?php endforeach; ?> 
       </table>
    </main>

    <script>
        function deletePet(id, name){
            console.log('gola')
            if(confirm(`Esta usted seguro? Va eliminar a  ${name}`)){
                window.location.replace('delete.php?id='+id)
            }
        }
    </script>
</body>
</html>