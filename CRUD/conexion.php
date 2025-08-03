<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$basededatos = "tienda";

// Crear conexión
// mysqli_connect("servidor", "usuario", "contraseña", "basededatos");
$conn =new mysqli($servidor, $usuario, $contraseña, $basededatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


echo "Conexión exitosa";
?>