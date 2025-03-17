<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST["origen"];
    $destino = $_POST["destino"];
    $fecha = $_POST["fecha"];
    $plazas = $_POST["plazas"];
    $precio = $_POST["precio"];

    // Validación en PHP
    if (empty($origen) || empty($destino) || empty($fecha) || empty($plazas) || empty($precio)) {
        die("Error: Todos los campos son obligatorios.");
    }
    if ($plazas <= 0 || $precio <= 0) {
        die("Error: Plazas y precio deben ser valores positivos.");
    }

    // Insertar datos en la base de datos
    $sql = "INSERT INTO VUELO (origen, destino, fecha, plazas_disponibles, precio) 
            VALUES ('$origen', '$destino', '$fecha', '$plazas', '$precio')";

    if ($conn->query($sql) === TRUE) {
        echo "Vuelo registrado con éxito.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
