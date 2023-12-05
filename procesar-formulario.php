<?php


    $nombre = $_POST["introducir_nombre"];
    $email = $_POST["introducir_email"];
    $telefono = $_POST["introducir_telefono"];
    $asunto = $_POST["introducir_asunto"];
    $mensaje = $_POST["introducir_mensaje"];

    // Dirección de correo electrónico a la que quieres enviar el formulario
    $destinatario = "carrilloolmedobrayan@gmail.com";

    // Asunto del correo electrónico
    $subject = "Nuevo mensaje del formulario de contacto";

    // Cuerpo del correo electrónico
    $body = "Nombre: $nombre\n";
    $body .= "Email: $email\n";
    $body .= "Teléfono: $telefono\n";
    $body .= "Asunto: $asunto\n";
    $body .= "Mensaje:\n\n$mensaje";

    // Encabezados del correo electrónico
    $headers = "From: $email";

    // Enviar el correo electrónico
    $headers = "MIME-Version: 1.0\r\n"; 

$headers .= "FROM: $nombre <$correo>\r\n";

$headers .= "Return-path: $destino\r\n";

mail($destinatario,$asunto,$cuerpo,$headers);
    // Redireccionar a una página de confirmación
    header("Location: catalogo.html");


?>
