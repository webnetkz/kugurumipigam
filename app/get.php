<?php
    session_start();

    if(!empty($_POST['sub'])) {
        $_SESSION['size'] = $_POST['size'];
        if(!empty($_SESSION['size'])) {
            $size = $_SESSION['size'];
            $name = $_POST['name'];
            $_SESSION['zakaz'] .= 'size = '.$size.', ';
            $_SESSION['zakaz'] .= 'name = '.$name.'; ';
            $_SESSION['num']++;
            header('Location: index.php#'.$name);
        }
    }