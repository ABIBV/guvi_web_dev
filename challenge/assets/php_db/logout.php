<?php
    session_start();
    session_destroy();
    header("Location : /challenge/index.php");
    exit();
?>