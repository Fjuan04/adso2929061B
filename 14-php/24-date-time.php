<?php 
    $title       = '24- Date & Time';
    $description = 'Many ways to handle dates and times.';

    include 'template/header.php';

?>

<ul class="msg">
    <li>
        <strong>hour-minutes-seconds: </strong>
        <?php echo date('h:i:s') ?>
    </li>
    <li>
        <strong>day-month-year: </strong>
        <?php echo date('d-m-Y') ?>
    </li>
    <li>
        <strong>Name of Day: </strong>
        <?php echo date('l') ?>
    </li>
    <li>
        <strong>Full Year: </strong>
        <?php echo date('Y') ?>
    </li>
    <li>
        <strong>Time Zone: </strong>
        <?php echo date('e') ?>
    </li>
    <li>
        <strong>Time UNIX: </strong>
        <?php echo time() ?>
    </li>
</ul>

<?php include 'template/footer.php' ?>