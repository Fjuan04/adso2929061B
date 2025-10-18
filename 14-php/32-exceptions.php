<?php 
    $title       = '32- Exceptions';
    $description = 'Is an object that describes an error or unexpected behaviour.';

    include 'template/header.php';

?>
<form action="" method="POST">
    <div class="row">
        <input type="number" class="form-control" name="age" placeholder="Enter your age">
    </div>
    <div class="row">
        <input type="submit" value="Validate" class="btn btn-success">
    </div>
</form>
<?php 
    if ($_POST) {
        function validate_age($age) {
            if ($age < 18) {
                throw new Exception("You can't vote!");
            }
            return true;
        }
        try {
            validate_age($_POST['age']);
            echo '<div class="msg">
                    You can vote!
                    </div>';
        } catch (Exception $e) {
            echo '<div class="error">
                    Error: '.$e->getMessage().'
                    </div>';
        }
    }
?>

<?php include 'template/footer.php' ?>