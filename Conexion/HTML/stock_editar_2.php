<<<<<<< HEAD:Conexion/HTML/stock_editar_2.php
<?php
include "..\PHP\conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("SELECT * FROM calzado WHERE IDcalzado=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://jose-angel-lopez-rocha.github.io/WEB/Conexion/CSS/formularios.css" rel="stylesheet">
    <title>Edicion de Stock</title>
</head>
<body>
    <h1 class="titulo">Edicion del Stock</h1>
    <ul class="sidenav">
        <li><a class="activate" href="index.html">Index</a></li>
        <li><a href="acerca.html">Acerca de nosotros</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="clientes.php">Clientes</a></li>
        <li><a href="stock.php">Stock</a></li>
    </ul>
    <?php
    while($mostrar=$sql->fetch_object()){?>
    <div class="centro">
    <form>
    <ul>
        <li><h5>Marca:</h5></li>
        <input type="text" value="<?=$mostrar->Marca?>">
        <li><h5>Talla:</h5></li>
        <input type="text" value="<?=$mostrar->Talla?>">
        <li><h5>Color:</h5></li>
        <input type="text" value="<?=$mostrar->Color?>">
        <li><h5>Precio:</h5></li>
        <input type="text" value="<?=$mostrar->Precio?>">
        <li><h5>Clave:</h5></li>
        <input type="text"value="<?=$mostrar->Clave?>">
        <li><h5>Stock: </h5></li>
        <input type="text"value="<?=$mostrar->Stock?>">
        <li><h5>Categoria: </h5></li>
        <input type="text"value="<?=$mostrar->Categoria?>">
    </form>
</ul>
    <button type="submit" class="boton3">Confirmar Modificacion</button>
</form>
</div>
    <?php }
    ?>

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
$id=$_GET["id"];
$sql=$conexion->query("SELECT * FROM calzado WHERE IDcalzado=$id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://jose-angel-lopez-rocha.github.io/web/Conexion/CSS/formularios.css" rel="stylesheet">
    <title>Edicion de Stock</title>
</head>
<body>
    <h1 class="titulo">Edicion del Stock</h1>
    <ul class="sidenav">
        <li><a class="activate" href="index.html">Index</a></li>
        <li><a href="acerca.html">Acerca de nosotros</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="clientes.php">Clientes</a></li>
        <li><a href="stock.php">Stock</a></li>
    </ul>
    <?php
    while($mostrar=$sql->fetch_object()){?>
    <div class="centro">
    <form>
    <ul>
        <li><h5>Marca:</h5></li>
        <input type="text" value="<?=$mostrar->Marca?>">
        <li><h5>Talla:</h5></li>
        <input type="text" value="<?=$mostrar->Talla?>">
        <li><h5>Color:</h5></li>
        <input type="text" value="<?=$mostrar->Color?>">
        <li><h5>Precio:</h5></li>
        <input type="text" value="<?=$mostrar->Precio?>">
        <li><h5>Clave:</h5></li>
        <input type="text"value="<?=$mostrar->Clave?>">
        <li><h5>Stock: </h5></li>
        <input type="text"value="<?=$mostrar->Stock?>">
        <li><h5>Categoria: </h5></li>
        <input type="text"value="<?=$mostrar->Categoria?>">
    </form>
</ul>
    <button type="submit" class="boton3">Confirmar Modificacion</button>
</form>
</div>
    <?php }
    ?>

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
>>>>>>> 7b8f87f (Descripción breve de los cambios):HTML/stock_editar_2.php
</html>