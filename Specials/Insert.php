<?php
    //Validaciones de existencia de variables
    if(empty($_POST['IName'])){
        $_POST['IName'] = "Empty";
    }
    if(empty($_POST['ISecondName'])){
        $_POST['ISecondName'] = "Empty";
    }
    if(empty($_POST['IUser'])){
        $_POST['IUser'] = "Empty-User";
    }
    if(empty($_POST['IBornDate'])){
        $_POST['IBornDate'] = "0000-00-00";
    }
    if(empty($_POST['IEmail'])){
        $_POST['IEmail'] = "Empty@empty.empty";
    }
    if(empty($_POST['PhoneNumber'])){
        $_POST['PhoneNumber'] = "No registro celular";
    }
    if(empty($_POST['IPassword'])){
        $_POST['IPassword'] = "Default0";
    }
    if(empty($_POST['IPassword2'])){
        $_POST['IPassword2'] = "Default0";
    }
    
    //Validar por medio de filtrado de caracteres si existe inyeccion de codigo en inputs
    if(preg_match("/</i",$_POST['IName']) || preg_match("/>/i",$_POST['IName'])){  
        $_POST['IName']="NULL";
    }
    if(preg_match("/</i",$_POST['ISecondName']) || preg_match("/>/i",$_POST['ISecondName'])){  
        $_POST['ISecondName']="NULL";
    }
    if(preg_match("/</i",$_POST['IUser']) || preg_match("/>/i",$_POST['IUser'])){
        $_POST['IUser']="NULL";
    }
    if(preg_match("/</i",$_POST['IBornDate']) || preg_match("/>/i",$_POST['IBornDate'])){  
        $_POST['IBornDate']="NULL";
    }
    if(preg_match("/</i",$_POST['IEmail']) || preg_match("/>/i",$_POST['IEmail'])){  
        $_POST['IEmail']="NULL";
    }
    if(preg_match("/</i",$_POST['PhoneNumber']) || preg_match("/>/i",$_POST['PhoneNumber'])){  
        $_POST['PhoneNumber']="NULL";
    }
    if(preg_match("/</i",$_POST['IPassword']) || preg_match("/>/i",$_POST['IPassword'])){  
        $_POST['IPassword']="NULL";
    }
    if(preg_match("/</i",$_POST['IPassword2']) || preg_match("/>/i",$_POST['IPassword2'])){  
        $_POST['IPassword2']="NULL";
    }
    
    $pass=$_POST['IPassword'];
    $pass2=$_POST['IPassword2'];

    //Validar coincidencia de contraseñas
    if($pass != $pass2){
        echo ("<div class='flex justify-center'><p class='inline-flex justify-center text-slate-900 mb-4 text-xs font-bold'>ADVERTENCIA - Las contraseñas NO coinciden!</p></div>");
    }
    elseif (($pass != "Default0") && ($pass2 != "Default0")) {
        //Validacion de caracteres en contraseña
        $uppercase=preg_match('@[A-Z]@', $_POST["IPassword"]);
        $lowercase=preg_match('@[a-z]@',$_POST["IPassword"]);
        $number=preg_match('@[0-9]@',$_POST["IPassword"]);
        $special=preg_match('/[£$%&*@#~?|.,_+=-]/', $_POST["IPassword"]);

        //strlen() devuelve la longitud de un string
        if($uppercase && $lowercase && $number && $special && ( (strlen($pass) ) > 7 ) ){ 
            
            echo ("<div class='flex justify-center'><p class='inline-flex justify-center text-slate-900 text-xs mb-4 font-bold'>Procesando datos...</p></div>");
            /*Variables de conexion */
            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "haonter_dev";

            //crear conexion
            $connection = new mysqli($servername,$username,$password,$db);

            //Validamos conexion, si hay error. No se ejecutara el resto del codigo
            if($connection->connect_error) {
                die("Connection failed: "). $connection->connect_error;
            }
            else{
                //Si imprime esto en consola, se conecto correctamente
                echo ("<script>console.log('Conectado / JavaScript con PHP')</script>");
            }

            $nombre= $_POST['IName'];
            $apellido=$_POST['ISecondName'];
            $fecha=$_POST['IBornDate'];
            $correo_minusculas=strtolower($_POST['IEmail']);
            $correo= $correo_minusculas;
            $Usuario_minusculas=strtolower($_POST['IUser']);
            $Usuario=$Usuario_minusculas;
            $celular=$_POST['PhoneNumber'];
            $clave=$_POST['IPassword'];
            $clave2=$_POST['IPassword2'];
            $claveEncriptada=password_hash($clave,PASSWORD_DEFAULT); //Encriptacion de password
            

            //Cargar datos en tabla
            //Se crea la variable que contiene el codigo SQL que ejecutaremos
            $sql = "INSERT INTO users(Nombre, Apellido, Usuario,Fecha_de_Nacimiendo, Email, Celular, Contraseña) VALUES ('$nombre','$apellido','$Usuario','$fecha','$correo','$celular','$claveEncriptada')";
            
            //query() es una funcion que realiza una consulta de SQL en este caso en la conexion creada y guardada $connection
            try{$connection->query($sql) === true;
                echo ("<div class='flex justify-center'><p class='inline-flex justify-center text-slate-900 text-xs mb-4 font-bold'>Felicidades ".$nombre.", te has registrado exitosamente.</p></div>");
            }
            
            //catch exception
            catch(Exception $e) {
                echo ("<div class='flex justify-center'><p class='inline-flex justify-center text-center text-slate-900 text-xs mb-4 font-bold'>Ups, ocurrio un error al registrar los datos.<br>".$e->getMessage()."</p></div>");
                //echo 'No Registrado ' .$e->getMessage();
            }

            //Cerramos conexion por seguridad
            $connection->close();
        }
        else {
            echo ("<div class='flex justify-center'><p class='inline-flex justify-center text-slate-900 text-xs mb-4 font-bold'>ADVERTENCIA - La contraseña no cumple con los requisitos solicitados!</p></div>");
        }
    }
    
//---- Envio de Correo (Pendiente)----//
    /*
    $to = $correo;
    $subject = "Prueba de Email con PHP";
    $message = "Hi, This is test email send by PHP Script";
    $headers = "From: haonterptc@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Email successfully sent to $to ...');</script>";
    } else {
        echo "<script>alert('Email sending failed...');</script>";
    }
    */
    //$timestamp = strtotime($_POST['IBornDate']);
    //echo $timestamp;
    //$date = new DateTime("$timestamp");
    //echo $date;
?>