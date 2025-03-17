<?php
include("conexion.php");

echo "<h2>Lista de Reservas</h2>";
$result = $conn->query("SELECT * FROM RESERVA");

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID Reserva: " . $row["id_reserva"] . 
             " | Cliente ID: " . $row["id_cliente"] . 
             " | Fecha Reserva: " . $row["fecha_reserva"] . 
             " | Vuelo ID: " . $row["id_vuelo"] . 
             " | Hotel ID: " . $row["id_hotel"] . "<br>";
    }
} else {
    echo "No hay reservas registradas.";
}

$conn->close();
?>
