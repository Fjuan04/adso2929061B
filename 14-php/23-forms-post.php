<?php
$title = '23-forms-post';
$description = 'Forms POST';

include 'template/header.php';

?>
<form action="" method="post">
    <label for="">Introduce tu nombre</label>
    <input type="text" name="name">
    <button >ENVIAR</button>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<br>";
    echo "Hola, este es un formulario post y tu nombre es: ". $_POST['name'];
}
include 'template/footer.php';
?>