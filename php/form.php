<?php

$nombre = $_POST['name'];
$correo = $_POST['email'];
$textArea = $_POST['textArea'];

$header = "Content-Type: text/plain; charset=UTF-8"; // Corregí el tipo de contenido y agregué la codificación UTF-8

$mensaje = "Este mensaje fue enviado por: " . $nombre . ",\r\n";
$mensaje .= "Su correo es: " . $correo . ",\r\n"; // Concateno los valores utilizando .=
$mensaje .= "Mensaje: " . $textArea . ",\r\n";

$para = 'jacksonflorezp@gmail.com';
$desde = 'Sitio web login';

if (mail($para, $desde, utf8_decode($mensaje), $header)) {
    echo "Correo electrónico enviado correctamente";
} else {
    echo "Error al enviar correo electrónico";
}

?>