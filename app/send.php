<?php

    session_start();

    if(!empty($_POST['send'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $message = $name.', номер: '.$phone.'; '.$_SESSION['zakaz'];

        $to      = 'info@kigurumipigam.kz';
        $subject = 'Заказ с сайта KigurumiPigam.kz';
        $headers = 'From: info@kigurumipigam.kz' . "\r\n" .
            'Reply-To: info@kigurumipigam.kz' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        header('Location: ../index');
    }