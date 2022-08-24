<?php
    /*Variables de conexion */
    $servername = "localhost";
    $username = "root";
    $password = "";

    //Abrimos conexion con localhost
    $connection = new mysqli($servername,$username,$password);

    //Se valida coneccion, en caso de error se detiene lo demas
    if($connection->connect_error) {
        die("Connection failed: "). $connection->connect_error;
    }
    else{
    echo ("<script>alert(Conectado a LocalHost);</script>");   //Se conecto correctamente
    }

    //Crear base de datos
    //Se crea la variable que contiene el codigo SQL que ejecutaremos
    $sql = "CREATE DATABASE haonter_dev";

    //Ejecutamos el SQL y validamos si se ejecuta correctamente
    if($connection->query($sql) === true) {
        echo ("<script>aletr(La base de datos se creo!);</script>");
    } else {
        echo ("<script>aletr(No se creo la base de datos!);</script>".$connection->error);
    }

    date_default_timezone_set("America/Santiago"); //Definicion de la zona horaria
    echo ("<br><p>".date('d-M-Y')." ".date('h:i:s')."</p>");

    //Cerramos conexion por seguridad
    $connection->close();
?>