<?php
include "..\PHP\conexion.php";
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
    <h1 class="titulo">Creacion de Clientes</h1>
    <ul class="sidenav">
        <li><a class="activate" href="index.html">Index</a></li>
        <li><a href="acerca.html">Acerca de nosotros</a></li>
        <li><a href="productos.php">Productos</a></li>
        <li><a href="clientes.php">Clientes</a></li>
        <li><a href="stock.php">Stock</a></li>
    </ul>
    <div class="centro">
    <form>
    <ul >
        <li><h5>Nombre:</h5></li>
        <input type="text">
        <li><h5>Apellido paterno:</h5></li>
        <input type="text">
        <li><h5>Apellido materno:</h5></li>
        <input type="text">
        <li><h5>Email:</h5></li>
        <input type="email">
        <li><h5>Clave:</h5></li>
        <input type="password">
        <li><h5>Telefono: </h5></li>
        <input type="tel">
        <li><h5>Ciudad: </h5></li>
        <input type="text">
        <li><h5>Fecha de nacimiento:</h5></li>
        <input type="date">
        <h5><form action="#"></h5>
        <label for="Estados">Estados</label>
        <select name="Estados" id="Estados">
        <option value="Ciudad de México">Ciudad de Mexico</option>
        <option value="Aguascalientes">Aguascalientes</option>
        <option value="Baja California">Baja California</option>
        <option value="Baja California Sur">Baja California Sur</option>
        <option value="Campeche">Campeche</option>
        <option value="Chiapas">Chiapas</option>
        <option value="Chihuahua">Chihuahua</option>
        <option value="Coahuila">Coahuila</option>
        <option value="Colima">Colima</option>
        <option value="Durango">Durango</option>
        <option value="Guanajuato">Guanajuato</option>
        <option value="Guerrero">Guerrero</option>
        <option value="Hidalgo">Hidalgo</option>
        <option value="Jalisco">Jalisco</option>
        <option value="Estado de Mexico">Estado de Mexico</option>
        <option value="Michoacan">Michoacan</option>
        <option value="Morelos">Morelos</option>
        <option value="Nayarit">Nayarit</option>
        <option value="Nuevo Leon">Nuevo Leon</option>
        <option value="Oaxaca">Oaxaca</option>
        <option value="Puebla">Puebla</option>
        <option value="Queretaro">Queretaro</option>
        <option value="Quinta Roo">Quinta Roo</option>
        <option value="San Luis Potosi">San Luis Potosi</option>
        <option value="Sinaloa">Sinaloa</option>
        <option value="Sonora">Sonora</option>
        <option value="Tabasco">Tabasco</option>
        <option value="Tamaulipas">Tamaulipas</option>
        <option value="Tlaxcala">Tlaxcala</option>
        <option value="Veracruz">Veracruz</option>
        <option value="Yucatan">Yucatan</option>
        <option value="Zacatecas">Zacatecas</option>
        </select>
    </form>
</ul>
    <button type="submit" class="boton1">Confirmar</button>
</form>
</div>

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