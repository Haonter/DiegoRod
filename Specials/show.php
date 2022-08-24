<script src="https://cdn.tailwindcss.com"></script>
<?php

    echo ("<div class='flex justify-center'><p class='inline-flex justify-center text-slate-900 text-xl mb-20 mt-16 font-bold'>Procesando datos...</p></div>");

    /*Variables de conexion */
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "haonter_dev";

    //Crear conexion
    $conn = new mysqli($servername,$username,$password,$db);

        //Validamos conexion, si hay error. No se ejecutara el resto del codigo
        if($conn->connect_error) {
            die("Connection failed: "). $conn->connect_error;
        }
        else{
            //Si imprime esto, se conecto correctamente
            echo ("<script>console.log('Conectado');</script>");
        }
        
        //Preparar la orden SQL
        $sql= "SELECT * FROM users";

        //Ejecutar la orden y obtener datos
        $result = $conn->query($sql);
        
        // Imprimiendo las filas resultantes

        echo("<div class='justify-center bg-stone-300/60 shadow-inner mx-32 py-2 shadow-stone-800/50 rounded-xl'>");
        if ($result->num_rows > 0) {
            //Muestra datos de cada row (Fila)
            while($row = $result->fetch_assoc()) {
                $ID = $row["ID"];
                $Nombre = $row["Nombre"];
                $Apellido = $row["Apellido"];
                $Usuario = $row["Usuario"];
                $FN = $row["Fecha_de_Nacimiendo"];
                $Email = $row["Email"];
                $Celular = $row["Celular"];
                $Clave = $row["Contraseña"];
                echo 
                    ("<body class='bg-gradient-to-bl from-sky-900 to-sky-400 '>
                    <p class='justify-center text-center text-stone-900 text-xs font-bold mt-2 mb-2'>".
                    "ID: " . $ID. " - Nobre: " . $Nombre. " - Apellido: " . $Apellido." - Usuario: ".$Usuario." - F/N: ".$FN.
                    " - Email: ".$Email." - Celular: ".$Celular." - Clave: {<span class='text-red-900'>Encriptado</span>}</p></body>");
            }
        } else {
            echo "0 results";
        }
        echo ("</div>");
    //Cerramos conexion por seguridad
    $conn->close();
?>