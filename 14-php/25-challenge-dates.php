
<?php  
$title  = '25- challenge-dates';
$description = '';
    include 'template/header.php';

?>

    <form method="post">
        <label for="fecha_nacimiento">Bithdate:</label>
        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
        <input type="submit" value="Calc" style="border:none; padding:10px; color: #fff; border-radius:10px; background: #4b0081;">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['fecha_nacimiento'])) {
        $fecha_nacimiento = new DateTime($_POST['fecha_nacimiento']);
        $fechaActual = new DateTime(); 
        $edad = $fechaActual->diff($fecha_nacimiento);
        echo "<p>You're <strong> $edad->y years old</strong></p>";
    }
    ?>
</section>

<?php
include 'template/footer.php';