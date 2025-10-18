<?php 
    $title       = '33- Filters';
    $description = 'Are used to validate and sanitize external input.';

    include 'template/header.php';

?>

<form action="" method="POST">
    <div class="row">
        <input type="number" class="form-control" name="age" placeholder="Enter you Age">
    </div>
    <div class="row">
        <input type="email" class="form-control" name="email" placeholder="Enter your Email">
    </div>
    <div class="row">
        <input type="text" class="form-control" name="url" placeholder="Enter your URL">
    </div>
    <div class="row">
        <input type="submit" value="Apply Filters" class="btn btn-success">
    </div>
</form>
<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // AGE - - - - - - - - - - - - - - - - -
        $age = $_REQUEST['age'];
        $ops = array('options' => 
                array('min_range' => 18, 
                        'max_range' => 23
                )
            );
        if (!filter_var($age, FILTER_VALIDATE_INT, $ops)) {
            echo '<div class="error">
                    You Cannot Participate in WSI!
                    </div>';
        } else {
            echo '<div class="msg">
                    You Can Participate in WSI!
                    </div>';
        }
        // EMAIL - - - - - - - - - - - - - - - - -
        if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
            echo '<div class="error">
                    The Email is not valid!
                    </div>';
        } else {
            echo '<div class="msg">
                    The Email is valid!
                    </div>';
        }
        // URL - - - - - - - - - - - - - - - - -
        $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
        echo '<div class="msg">
            The URL disinfected is: '.$url.'
                </div>';
    }
?>

<?php include 'template/footer.php' ?>