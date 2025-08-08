<?php
    include '../config/app.php';
    include '../config/database.php';
    include '../config/security.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM pets
    WHERE id = ?";

    $stmt = $conx->prepare($sql);
    $stmt->execute([$id]);
    header("Location: dashboard");
?>