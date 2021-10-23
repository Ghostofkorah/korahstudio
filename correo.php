<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['correo'])  && !empty($_POST['mensaje'])) {
        $name = $_POST['nombre'];
        $movil = $_POST['telefono'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        $header = "From: info@korahstudio.com" . "\r\n";
        $header. = "Reply-to: info@korahstudio.com" . "\r\n";
        $header. = "X-Mailer: PHP/". phpversion();
        mail($correo,$correo,$movil,$mensaje,$header);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamente!</4>";
        }
    }
}