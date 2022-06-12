<?php

$destino = "info@dataflow-services.com";


$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde formulario de contacto de la web";
$mensajeCompleto = "\n" . "Nombre: " . $nombre . "\n" . "Email: " . $email . "\n" . "Telefono:" . $telefono . "\n". "Mensaje :" . $mensaje;
mail($destino , $header, $mensajeCompleto);
header('Location: https://dataflow-services.com/'); 


