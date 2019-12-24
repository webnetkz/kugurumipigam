<?php
    session_start();

    if(!empty($_POST['sub'])) {
        $_SESSION['size'] = $_POST['size'];
        if(!empty($_SESSION['size'])) {
            $size = $_SESSION['size'];
            $name = $_POST['name'];
            $_SESSION['zakaz'] .= 'Размер: '.$size.', ';
            $_SESSION['zakaz'] .= 'Наименование: '.$name.';<br> ';
            $_SESSION['num']++;
            header('Location: index');
        }
    }