<?php
    $server = "localhost";
    $user   = "root";
    $pass   = "";
    $db     = "zapateria";
    $puerto = 4306;

    $conexion = new mysqli($server, $user, $pass, $db, $puerto);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="../CSS/style.css" rel="stylesheet">
</head>
<body>
    <h1 class="titulo">Clientes</h1>
    <ul class="sidenav">
        <li><a class="activate" href="index.html">Index</a></li>
        <li><a href="acerca.html">Acerca de nosotros</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="clientes.php">Clientes</a></li>
        <li><a href="stock.php">Stock</a></li>
    </ul>
    <h2 class="titulo">Stock:</h1>
    <ul>
        <li><a href="stock_crear.php">Crear stock</a></li>
        <li><a href="stock_editar.php">Editar stock</a></li>
        <li><a href="stock_eliminar.php">Eliminar stock</a></li>
    </ul>

    <footer class="footer">
        <h4>Información</h4>
        <ul>
            <li><a href="mailto:lopezrochaangel30@gmail.com">Enviar correo</a></li>
        </ul>

        <p>
            <a href="https://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                    src="https://jigsaw.w3.org/css-validator/images/vcss"
                    alt="Valid CSS!">
            </a>
        </p>

        <p>
            <a href="https://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px"
                    src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
                    alt="Valid CSS!">
            </a>
        </p>
    </footer>
</body>
</html>