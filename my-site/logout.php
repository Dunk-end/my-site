<?php

    require_once 'connect.php';

    unset($_SESSION['user_login']);
    session_destroy();
    header("Location: ../index.php");

?>