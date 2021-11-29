<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["nazwa"]);
    header("location: login.php");
?>