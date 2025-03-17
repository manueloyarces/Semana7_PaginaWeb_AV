<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Vuelos</title>
    <script>
        function validarVuelo() {
            let origen = document.getElementById("origen").value;
            let destino = document.getElementById("destino").value;
            let fecha = document.getElementById("fecha").value;
            let plazas = document.getElementById("plazas").value;
            let precio = document.getElementById("precio").value;

            if (origen === "" || destino === "" || fecha === "" || plazas === "" || precio === "") {
                alert("Todos los campos son obligatorios");
                return false;
            }
            if (parseInt(plazas) <= 0 || parseFloat(precio) <= 0) {
                alert("Las plazas y el precio deben ser valores positivos");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h2>Registro de Vuelos</h2>
    <form action="procesar_vuelos.php" method="post" onsubmit="return validarVuelo()">
        <label>Origen:</label>
        <input type="text" id="origen" name="origen" required><br>

        <label>Destino:</label>
        <input type="text" id="destino" name="destino" required><br>

        <label>Fecha:</label>
        <input type="date" id="fecha" name="fecha" required><br>

        <label>Plazas Disponibles:</label>
        <input type="number" id="plazas" name="plazas" required><br>

        <label>Precio:</label>
        <input type="number" step="0.01" id="precio" name="precio" required><br>

        <input type="submit" value="Registrar Vuelo">
    </form>
</body>
</html>
