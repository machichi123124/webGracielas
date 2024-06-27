<?php
// Conexión a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'gracielas');

if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Obtener datos del formulario
if (isset($_POST['nombre']) && isset($_POST['fecha'])) {
    $nombre_cliente = $_POST['nombre'];
    $fecha_reservacion = $_POST['fecha'];
    
    // Escapar caracteres especiales para evitar inyección SQL
    $nombre_cliente = mysqli_real_escape_string($conexion, $nombre_cliente);
    $fecha_reservacion = mysqli_real_escape_string($conexion, $fecha_reservacion);
    
    // Consulta SQL para eliminar la reservación
    $sql = "DELETE FROM tbl_reservacion WHERE nombre = '$nombre_cliente' AND fecha = '$fecha_reservacion'";
    
    if (mysqli_query($conexion, $sql)) {
        // Verificar si se eliminó alguna fila
        if (mysqli_affected_rows($conexion) > 0) {
            echo "Reservación eliminada correctamente.";
        } else {
            echo "No se encontró ninguna reservación con los datos proporcionados.";
        }
    } else {
        echo "Error al eliminar la reservación: " . mysqli_error($conexion);
    }
} else {
    echo "Por favor, complete todos los campos.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Reservaciones</title>
    <style>
        header{   
            
            background-color: #556B2F;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }
        button {
            display: flex;
            padding: 10px 30px; /* Ajusta el padding según sea necesario */
            font-size: 18px;
            border: none;
            border-radius: 15px; /* Hace que el botón sea redondeado */
            background-color: #fff;
            color: #007bff;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            align: center;
        }
        button:hover {
            background-color: #007bff;
            color: #fff;
        }
        .logo{
            margin: 18px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px; /* Margen general alrededor de la página */

        }

        .container {
            display: flex;
            justify-content: center; /* Centra los elementos horizontalmente */
            align-items: center;
            margin: 20px auto; /* Centra el contenedor y ajusta los márgenes */
            max-width: auto; /* Ancho máximo del contenedor */
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .title{
            margin: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.html"><img src="logoG.png" width="80px"></a>
        </div>
    </header>
                    <div>
                    <button onclick="volver()" id="regresar">Regresar</button>
                        <script>
                            function volver() {
                                window.location.href = "rese.html";
                            }
                        </script>
                    </div>
</body>
</html>
<?php 
mysqli_close($conexion);
?>

