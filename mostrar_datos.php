<?php
include("conexion.php");

echo "<h2>Lista de Vuelos</h2>";
$result = $conn->query("SELECT * FROM VUELO");
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id_vuelo"] . " | Origen: " . $row["origen"] . " | Destino: " . $row["destino"] . 
    " | Fecha: " . $row["fecha"] . " | Plazas: " . $row["plazas_disponibles"] . " | Precio: $" . $row["precio"] . "<br>";
}

echo "<h2>Lista de Hoteles</h2>";
$result = $conn->query("SELECT * FROM HOTEL");
while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id_hotel"] . " | Nombre: " . $row["nombre"] . " | Ubicación: " . $row["ubicación"] . 
    " | Habitaciones: " . $row["habitaciones_disponibles"] . " | Tarifa: $" . $row["tarifa_noche"] . "<br>";
}

$conn->close();
?>
