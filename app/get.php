<?php
    session_start();

    if(!empty($_GET)) {
        $_SESSION['size'] = $_GET['size'];   
        header('Location: index.php#1');
    }