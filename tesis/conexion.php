<?php

// Crear coneccion
$conn = new mysqli("localhost", "root", "", "tesis");

// Checar coneccion
if ($conn->connect_error) {
    die("La conexion fallo: " . $conn->connect_error);
} 
echo "Connectado exitosamente";
?>