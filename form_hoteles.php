<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Hoteles</title>
    <script>
        function validarHotel() {
            let nombre = document.getElementById("nombre").value;
            let ubicacion = document.getElementById("ubicacion").value;
            let habitaciones = document.getElementById("habitaciones").value;
            let tarifa = document.getElementById("tarifa").value;

            if (nombre === "" || ubicacion === "" || habitaciones === "" || tarifa === "") {
                alert("Todos los campos son obligatorios");
                return false;
            }
            if (parseInt(habitaciones) <= 0 || parseFloat(tarifa) <= 0) {
                alert("Las habitaciones y la tarifa deben ser valores positivos");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <h2>Registro de Hoteles</h2>
    <form action="procesar_hoteles.php" method="post" onsubmit="return validarHotel()">
        <label>Nombre del Hotel:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label>Ubicación:</label>
        <input type="text" id="ubicacion" name="ubicacion" required><br>

        <label>Habitaciones Disponibles:</label>
        <input type="number" id="habitaciones" name="habitaciones" required><br>

        <label>Tarifa por Noche:</label>
        <input type="number" step="0.01" id="tarifa" name="tarifa" required><br>

        <input type="submit" value="Registrar Hotel">
    </form>
</body>
</html>
