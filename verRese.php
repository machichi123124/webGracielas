<?php
$conexion = mysqli_connect('localhost', 'root', '', 'gracielas');

$sql = 'SELECT * FROM tbl_reservacion';
$resultado = mysqli_query($conexion, $sql);
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
        <script>
                    fechaTR();
                    setInterval(fechaTR, 1000);
                </script>
    </header>

    <div class="container">
        <h1 class="title">Reservaciones Registradas</h1>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Número de Personas</th>
                    <th>Comentarios</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($mostrar = mysqli_fetch_array($resultado)) { ?>
                    <tr>
                        <td><?php echo $mostrar['nombre']; ?></td>
                        <td><?php echo $mostrar['telefono']; ?></td>
                        <td><?php echo $mostrar['fecha']; ?></td>
                        <td><?php echo $mostrar['hora']; ?></td>
                        <td><?php echo $mostrar['personas']; ?></td>
                        <td><?php echo $mostrar['comentarios']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
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
