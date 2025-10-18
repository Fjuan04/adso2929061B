<?php 
    $title       = '31- Send Mail';
    $description = 'Function for sending emails directly from the server.';

    include 'template/header.php';

?>
<form action="" method="POST">
    <div class="row">
        <input type="email" name="email" placeholder="Email">
    </div>
    <div class="row">
        <input type="text" name="subject" placeholder="Subject">
    </div>
    <div class="row">
        <textarea name="message" rows="4" placeholder="Message"></textarea>
    </div>
    <div class="row">
        <input type="submit" value="Send" class="btn btn-outline-success">
        <input type="reset" value="Clear Form" class="btn btn-outline-secondary">
    </div>
</form>
<?php 
    if ($_POST) {
        $email   = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
?>
<?php if (mail('ofaczero@gmail.com', "Subject: $subject", "Message: $message", "From: $email")): ?>
    <div class="msg">
        The email has been sent successfully!
    </div>
<?php else: ?>
    <div class="error">
        The email could not be sent!
    </div>
<?php endif ?>
<?php } ?>
<?php include 'template/footer.php' ?>