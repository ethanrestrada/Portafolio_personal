<?php
    $destinatario = 'etanr25@gmail.com';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    if(isset($_POST)){
        if( !empty($name) && !empty($email) && !empty($mensaje)){
            $header= "From .$email" . "\r\n";
            $header.= "X-Mailer : PHP/". phpversion();
            $mail = mail($destinatario, $name, $mensaje, $header);
            header("location:contact.html");
        }
    }
?>