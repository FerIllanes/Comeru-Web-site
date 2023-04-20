<?php

if(isset($_POST['email'])) {

    // Correo electrónico al que se enviará el mensaje
    $to = "tucorreo@tudominio.com";
    
    // Asunto del correo electrónico
    $subject = "Mensaje de contacto desde el sitio web";

    // Mensaje que se enviará
    $message = "Nombre: " . $_POST['nombre'] . "\r\n";
    $message .= "Email: " . $_POST['email'] . "\r\n";
    $message .= "Mensaje: " . $_POST['mensaje'] . "\r\n";

    // Encabezados del correo electrónico
    $headers = "From: " . $_POST['email'] . "\r\n";
    $headers .= "Reply-To: " . $_POST['email'] . "\r\n";

    // Enviar correo electrónico
    mail($to, $subject, $message, $headers);

}
?>