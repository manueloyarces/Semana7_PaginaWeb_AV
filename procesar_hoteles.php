<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $ubicacion = $_POST["ubicacion"];
    $habitaciones = $_POST["habitaciones"];
    $tarifa = $_POST["tarifa"];

    // Validación en PHP
    if (empty($nombre) || empty($ubicacion) || empty($habitaciones) || empty($tarifa)) {
        die("Error: Todos los campos son obligatorios.");
    }
    if ($habitaciones <= 0 || $tarifa <= 0) {
        die("Error: Habitaciones y tarifa deben ser valores positivos.");
    }

    // Insertar datos en la base de datos
    $sql = "INSERT INTO HOTEL (nombre, ubicación, habitaciones_disponibles, tarifa_noche) 
            VALUES ('$nombre', '$ubicacion', '$habitaciones', '$tarifa')";

    if ($conn->query($sql) === TRUE) {
        echo "Hotel registrado con éxito.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
