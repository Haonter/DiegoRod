<?php

    if(empty($_POST['RUser'])){
        $_POST['RUser'] = "dflt";
    }
    if(empty($_POST['RPassword'])){
        $_POST['RPassword'] = "dflt1";
    }

    if(preg_match("/</i",$_POST['RUser']) || preg_match("/>/i",$_POST['RUser'])){
        $_POST['RUser']="NONE";
    }
    if(preg_match("/</i",$_POST['RPassword']) || preg_match("/>/i",$_POST['RPassword'])){  
        $_POST['RPassword']="NONE";
    }

    $Usuario_Minuscula=strtolower($_POST['RUser']);
    $Usuario= $Usuario_Minuscula;
    $UPassword= $_POST['RPassword'];

    if(($UPassword != "dflt1") &&($Usuario != "dflt")){

        //Variables de conexion
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "haonter_dev";
        

        //crear conexion
        $conn = new mysqli($servername,$username,$password,$db);

        //Validamos conexion, si hay error. No se ejecutara el resto del codigo
        if($conn->connect_error) {
            die("Connection failed: "). $conn->connect_error;
        }
        else{
        //Si imprime esto en consola, se conecto correctamente
        echo ("<script>console.log('Conectado a LocalHost');</script>");
        }

        $sql = ("SELECT * FROM users WHERE Usuario = '$Usuario'");  //Consulta de busqueda de usuario registrado
        
        //Se ejecuta la consulta y a su vez se guardan los datos obtenidos en la variable $result
        if($result = $conn->query($sql)){ //Si la consulta se ejecuta devuelve "true" y se inicia el "if"

            $rows = $result->num_rows; //Si el usuario existe es true (1) habra una fila, sino es false (0) no habran filas
            
            $BuscarPASS = $result->fetch_assoc(); //Se crea un array asociativo con los datos del usuario en caso de existir datos

            //Verificacion de coincidencia de contraseña ingresada en input 
            //con contraseña guardada en la Base de datos (almacenado en un array asociativo $BuscarPASS)
            if( ($rows == 1) && (password_verify($UPassword, $BuscarPASS['Contraseña']) ) ){
                session_start();
                $_SESSION["Usuario"]=$Usuario;
                header('Location: Home.php');
            }
            else{
                echo ("<div class='flex justify-center'><p class='inline-flex justify-center text-center text-stone-900 mt-8 text-xs font-bold'>¡Usuario y/o Contraseña invalido, Por favor intente de nuevo!</p></div>");
            }
        }
        //Cerrar conexion por seguridad
        $conn->close();
    }


?>