<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "AGENCIA";

# Creando la conexión
$conn = new mysqli($servername, $username, $password, $database);

# Verificando la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos AGENCIA";
?>
