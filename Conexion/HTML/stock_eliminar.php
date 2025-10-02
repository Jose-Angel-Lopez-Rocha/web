<<<<<<< HEAD:Conexion/HTML/stock_eliminar.php
<?php
include "..\PHP\conexion.php";
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM calzado WHERE IDcalzado=$id");
if($sql==1){
    echo '<div>Calzado eliminado ✅</div>';
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
    <h1 class="titulo">Eliminacion del stock</h1>
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
            <th>Marca</th>
            <th>Talla</th>
            <th>Color</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Categoría</th>
            <th>Accion</th>
        </tr>

        <?php
        $sql = "SELECT * FROM calzado";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            while ($mostrar = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $mostrar['IDcalzado']; ?></td> 
            <td><?php echo $mostrar['Marca']; ?></td>
            <td><?php echo $mostrar['Talla']; ?></td>
            <td><?php echo $mostrar['Color']; ?></td>
            <td><?php echo $mostrar['Precio']; ?></td>
            <td><?php echo $mostrar['Stock']; ?></td>
            <td><?php echo $mostrar['Categoria']; ?></td>
            <td><a href="stock_eliminar.php?id=<?= $mostrar['IDcalzado'] ?>" class="boton2">Eliminar</a></td>
        </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='8>No hay productos registrados</td></tr>";
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
            alt="Valid CSS!" />
        </a>
    </p>

    <p>
        <a href="https://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
            src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
            alt="Valid CSS!" />
        </a>
    </p>
</footer>
</body>
=======
<?php
include "..\PHP\conexion.php";
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE FROM calzado WHERE IDcalzado=$id");
if($sql==1){
    echo '<div>Calzado eliminado ✅</div>';
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
    <h1 class="titulo">Eliminacion del stock</h1>
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
            <th>Marca</th>
            <th>Talla</th>
            <th>Color</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Categoría</th>
            <th>Accion</th>
        </tr>

        <?php
        $sql = "SELECT * FROM calzado";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            while ($mostrar = $result->fetch_assoc()) {
        ?>
        <tr>
            <td><?php echo $mostrar['IDcalzado']; ?></td> 
            <td><?php echo $mostrar['Marca']; ?></td>
            <td><?php echo $mostrar['Talla']; ?></td>
            <td><?php echo $mostrar['Color']; ?></td>
            <td><?php echo $mostrar['Precio']; ?></td>
            <td><?php echo $mostrar['Stock']; ?></td>
            <td><?php echo $mostrar['Categoria']; ?></td>
            <td><a href="stock_eliminar.php?id=<?= $mostrar['IDcalzado'] ?>" class="boton2">Eliminar</a></td>
        </tr>
        <?php
            }
        } else {
            echo "<tr><td colspan='8>No hay productos registrados</td></tr>";
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
            alt="Valid CSS!" />
        </a>
    </p>

    <p>
        <a href="https://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
            src="https://jigsaw.w3.org/css-validator/images/vcss-blue"
            alt="Valid CSS!" />
        </a>
    </p>
</footer>
</body>
>>>>>>> 7b8f87f (Descripción breve de los cambios):HTML/stock_eliminar.php
</html>