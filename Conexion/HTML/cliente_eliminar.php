<<<<<<< HEAD:Conexion/HTML/cliente_eliminar.php
<?php
include "..\PHP\conexion.php";
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM cliente WHERE IDCliente=$id");
if($sql==1){
    echo '<div>Cliente eliminado ✅</div>';
}else{
    echo '<div>Error</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de clientes</title>
    <link href="https://jose-angel-lopez-rocha.github.io/WEB/Conexion/CSS/formularios.css" rel="stylesheet">
</head>
<body>
    <h1 class="titulo">Eliminacion de Clientes</h1>
    <ul class="sidenav">
        <li><a class="activate" href="index.html">Index</a></li>
        <li><a href="acerca.html">Acerca de nosotros</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="clientes.php">Clientes</a></li>
        <li><a href="stock.php">Stock</a></li>
    </ul>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Fecha de ingreso</th>
            <th>Fecha de nacimiento</th>
            <th>Accion</th>
        </tr>
        <?php
        $sql = "SELECT * FROM cliente";
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            while ($mostrar = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $mostrar['IDCliente']; ?></td> 
            <td><?php echo $mostrar['Nombre']; ?></td>
            <td><?php echo $mostrar['Ap_Paterno']; ?></td>
            <td><?php echo $mostrar['Ap_Materno']; ?></td>
            <td><?php echo $mostrar['Email']; ?></td>
            <td><?php echo $mostrar['Telefono']; ?></td>
            <td><?php echo $mostrar['Direccion']; ?></td>
            <td><?php echo $mostrar['Ciudad']; ?></td>
            <td><?php echo $mostrar['Estado']; ?></td>
            <td><?php echo $mostrar['Fecha_Ingreso']; ?></td>
            <td><?php echo $mostrar['Fecha_Nacimiento']; ?></td>
            <td><a href="cliente_eliminar.php?id=<?= $mostrar['IDCliente'] ?>" class="boton2">Eliminar</a></td>
        </tr>
        <?php
            }
        }else{
            echo "<tr><td colspan='10'>No hay clientes registrados</td><tr>";
        }
        ?>    
    </table>
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
=======
<?php
include "..\PHP\conexion.php";
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM cliente WHERE IDCliente=$id");
if($sql==1){
    echo '<div>Cliente eliminado ✅</div>';
}else{
    echo '<div>Error</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion de clientes</title>
    <link href="https://jose-angel-lopez-rocha.github.io/web/Conexion/CSS/formularios.css" rel="stylesheet">
</head>
<body>
    <h1 class="titulo">Eliminacion de Clientes</h1>
    <ul class="sidenav">
        <li><a class="activate" href="index.html">Index</a></li>
        <li><a href="acerca.html">Acerca de nosotros</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="clientes.php">Clientes</a></li>
        <li><a href="stock.php">Stock</a></li>
    </ul>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Fecha de ingreso</th>
            <th>Fecha de nacimiento</th>
            <th>Accion</th>
        </tr>
        <?php
        $sql = "SELECT * FROM cliente";
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            while ($mostrar = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $mostrar['IDCliente']; ?></td> 
            <td><?php echo $mostrar['Nombre']; ?></td>
            <td><?php echo $mostrar['Ap_Paterno']; ?></td>
            <td><?php echo $mostrar['Ap_Materno']; ?></td>
            <td><?php echo $mostrar['Email']; ?></td>
            <td><?php echo $mostrar['Telefono']; ?></td>
            <td><?php echo $mostrar['Direccion']; ?></td>
            <td><?php echo $mostrar['Ciudad']; ?></td>
            <td><?php echo $mostrar['Estado']; ?></td>
            <td><?php echo $mostrar['Fecha_Ingreso']; ?></td>
            <td><?php echo $mostrar['Fecha_Nacimiento']; ?></td>
            <td><a href="cliente_eliminar.php?id=<?= $mostrar['IDCliente'] ?>" class="boton2">Eliminar</a></td>
        </tr>
        <?php
            }
        }else{
            echo "<tr><td colspan='10'>No hay clientes registrados</td><tr>";
        }
        ?>    
    </table>
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
>>>>>>> 7b8f87f (Descripción breve de los cambios):HTML/cliente_eliminar.php
</html>