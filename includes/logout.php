<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php
    $_SESSION['nm_usuario'] = null;
    $_SESSION['ds_senha'] = null;
    $_SESSION['role'] = null;
    session_destroy();
    header('Location: ../index.php');

?>