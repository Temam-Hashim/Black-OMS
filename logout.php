<?php
    session_start();
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['role']);
    session_destroy();
    header("Location: index.php");
?>