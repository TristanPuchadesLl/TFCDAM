<?php

/*En mi base de datos funciona correctamente*/
 $servidor = "localhost"; // El servidor que utilizaremos, en este caso será el localhost 
$usuario = "userportfolio"; // El usuario que acabamos de crear en la base de datos 
$contraseña = "portfolio"; // La contraseña del usuario que utilizaremos 
$BD = "userportfolio"; // El nombre de la base de datos 

    $conexion = new mysqli($servidor, $usuario, $contraseña, $BD);
    if ($conexion->connect_error) {
        die("No pudo conectarse: " . $conexion->connect_error);
    }
    ?>