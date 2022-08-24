<?php
    /*Variables de conexion */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "haonter_dev";

    //abrirmos conexion con localhost
    $connection = new mysqli($servername,$username,$password,$db);

    //Validamos conexion, si hay error. No se ejecutara el resto del codigo
    if($connection->connect_error) {
        die("Connection failed: "). $connection->connect_error;
    }
    else{
    //Si imprime esto, se conecto correctamente
    echo ("<script>alert(Conectado a LocalHost);</script>");
    }

    //Crear tabla
    //Se crea la variable que contiene el codigo SQL que ejecutaremos
    $sql = "CREATE TABLE users(ID INT(255) NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), Nombre VARCHAR(50) NOT NULL, Apellido VARCHAR(50) NOT NULL, Usuario VARCHAR(15) NOT NULL UNIQUE , Fecha_de_Nacimiendo DATE NOT NULL, Email VARCHAR(50) NOT NULL, Celular VARCHAR(12), Contraseña VARCHAR(100) NOT NULL)";

    //Ejecutamos el SQL y validamos si se ejecuta correctamente
    if($connection->query($sql) === true) {
        echo ("<script>alert(La Tabla se creo!);</script>");
    } else {
        echo ("<script>alert(La Tabla no se creo!);</script>").$connection->error;
    }
    
    date_default_timezone_set("America/Santiago"); //Definicion de la zona horaria
    echo ("<br><p>".date('d-M-Y')." ".date('h:i:s')."</p>");
    
    //Cerramos conexion por seguridad
    $connection->close();
?>