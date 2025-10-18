<?php session_start(); ?>
<?php 
    $title       = '30- Sessions';
    $description = 'Mechanism to store and retrieve data across multiple page requests from a single user.';

    include 'template/header.php';

?>

<?php 
    if ($_POST) {
        unset($_SESSION['visits']);
        session_destroy();
    }	
?>

<?php if (isset($_SESSION['visits'])): ?>
    <?php $_SESSION['visits']++; ?>
<?php else: ?>
    <?php $_SESSION['visits'] = 1; ?>
<?php endif ?>
<p>
    <strong>
        You have visited this page: 
    </strong>
    <?php echo $_SESSION['visits']; ?> 
    <?php echo ($_SESSION['visits'] == 1) ? "time" : "times"; ?>
</p>
<form action="" method="POST">
    <input type="submit" value="Close Session" class="btn btn-danger" name="delete">
</form>

<?php include 'template/footer.php' ?>