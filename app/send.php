<?php

    session_start();

    if(!empty($_POST['send'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $message = $name.'<br>'.$phone.'<br>'.$_SESSION['zakaz'];

        $to      = 'info@kigurumipigam.kz';
        $subject = 'Заказ с сайта KigurumiPigam.kz';
        $headers = 'From: webmaster@kigurumipigam.kz' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);
        
        header('Location: ../index');
    }