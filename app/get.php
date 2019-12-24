<?php
    session_start();

    if(!empty($_POST['sub'])) {
            $size = $_POST['size'];
            $name = $_POST['name'];
            $_SESSION['zakaz'] .= 'Размер: '.$size.', ';
            $_SESSION['zakaz'] .= 'Наименование: '.$name.';<br> ';
            $_SESSION['num']++;
            header('Location: ../index');
    }