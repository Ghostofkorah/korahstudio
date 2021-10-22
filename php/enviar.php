<?php

// llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// datos para el correo
$destitanatario = "info@korahstudio.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Teléfono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando mensaje

mail($destitanatario, $asunto, $carta);
header('Location:mensaje-de-envio.html')
?>