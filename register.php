<!DOCTYPE html>
<html lang="es-ES">
    
<head>
    <link rel="stylesheet" href="./Partials/style2.css">
</head>
<body class="bg-no-repeat bg-cover bg-fixed bg-[url('./Partials/BG2.jpg')] text-sky-900">

    <?php include "./Partials/header.php";?>
    
    <div class="grid grid-cols-10"> <!-- Titulo y Logo -->
        <div class="content-center mt-14 mb-2 ml-40 col-span-9">
            <h1 class="text-center text-5xl text-stone-900 font-bold">Registrate</h1>
        </div>
        <div class="flex justify-end">
                <a href="index.php">
                    <img src="./Partials/HDLogo.png" class="drop mt-8 mr-8 w-24 cursor-pointer" alt="Haonter Dev Logo">
                </a>
        </div>
    </div>

    <!--Inputs de formulario-->
    <form action="register.php" method="POST" class="bg-stone-300/60 shadow-inner shadow-stone-800/50 mt-4 pt-1 mx-80 rounded-3xl">

        <p class="flex justify-center text-lg mb-2 mt-4 text-stone-900">Los campos con * son requeridos</p>

        <div class="flex justify-center"> <!-- Nombre y Apellido -->
            <div class="inline-flex justify-center">
                <p class="inline-flex justify-center px-2 py-2 text-stone-900 font-bold">*</p> 
                <input 
                    required 
                    class="inline-flex justify-center font-medium mr-2 ml-2 rounded px-2 py-2 shadow-stone-800 shadow-md hover:drop-shadow-lg" 
                    type="text" 
                    placeholder="Nombre" 
                    name="IName"
                > 
            </div>

            <div class="inline-flex justify-center">
                <p class="inline-flex justify-center px-2 py-2 text-stone-900 font-bold">*</p> 
                <input 
                    required 
                    class="inline-flex justify-center font-medium mr-2 ml-2 rounded px-2 py-2 shadow-stone-800 shadow-md hover:drop-shadow-lg" 
                    type="text" 
                    placeholder="Apellido" 
                    name="ISecondName"
                    >
            </div>
        </div><br>

        <div class="flex justify-center"> <!-- Fecha de Nacimiento y Celular -->
            <div class="inline-flex justify-center">
                <p class="inline-flex justify-center px-2 py-2 text-stone-900 font-medium">F/N * </p> 
                <!--Input con limitacion de fecha maxima a fecha actual con PHP--> 
                <input 
                    required 
                    class="inline-flex justify-center font-medium ml-2 mr-2 rounded px-2 py-2 text-stone-900 shadow-stone-800 shadow-md hover:drop-shadow-lg" 
                    type="date" 
                    min="1922-01-01" 
                    max=<?php $FActual=date("Y-m-d"); echo $FActual;?> 
                    name="IBornDate"> 
            </div>

            <div class="inline-flex justify-center">
                <p class="inline-flex justify-center px-2 py-2 text-stone-900 font-medium" >Celular</p> 
                <input 
                    class="inline-flex justify-center rounded font-medium text-stone-900 shadow-stone-800 shadow-md hover:drop-shadow-lg" 
                    type="number" 
                    minlength="9" 
                    placeholder="56912345678" 
                    name="PhoneNumber"
                >
                <br>
            </div>
        </div><br>

        <div class="flex justify-center"> <!-- E-mail y Usuario -->
            <div class="inline-flex justify-center">
                <p class="inline-flex justify-center text-stone-900 font-bold">*</p> 
                <input 
                    required 
                    class="inline-flex justify-center ml-2 mr-2 rounded px-2 py-2 text-stone-900 font-medium shadow-stone-800 shadow-md hover:drop-shadow-lg" 
                    type="email" 
                    placeholder="E-mail" 
                    name="IEmail"
                > 
            </div>

            <div class="inline-flex justify-center">
                <p class="inline-flex justify-center text-stone-900 font-bold">*</p> 
                <input 
                    required 
                    class="inline-flex justify-center ml-2 mr-2 font-medium rounded px-2 py-2 text-stone-900 shadow-stone-800 shadow-md hover:drop-shadow-lg" 
                    type="text" 
                    placeholder="Usuario" 
                    minlength="5" 
                    name="IUser"
                >
            </div>
            
        </div><br>

        <div class="flex justify-center"> <!-- Contraseña -->
            <div class="inline-flex justify-center">
                <p class="inline-flex justify-center text-stone-900 font-bold">*</p> 
                <input 
                    required 
                    class="inline-flex justify-center ml-2 mr-2 font-medium rounded px-2 py-2 text-stone-900 shadow-stone-800 shadow-md hover:drop-shadow-lg" 
                    type="password" 
                    placeholder="Contraseña" 
                    minlength="8" 
                    name="IPassword"
                >
            </div>
            <div class="inline-flex justify-center">
                <p class="inline-flex justify-center text-stone-900 font-bold">*</p> 
                <input 
                    required 
                    class="inline-flex justify-center ml-2 mr-2 px-2 py-2 font-medium rounded text-stone-900 shadow-stone-800 shadow-md hover:drop-shadow-lg" 
                    type="password" 
                    placeholder="Confirme contraseña" 
                    minlength="8" 
                    name="IPassword2"
                >
            </div>
        </div>

        <div class="flex justify-center"> <!-- Mensaje de requisitos para Password -->
            <p class="inline-flex justify-center text-center text-stone-900 mb-6 mt-8 text-xs font-bold">
                (La contraseña debe contener mayuscula, minuscula, numero y caracter especial (£$%&@#~?|.,*+=_-),<br>al menos un caracter de cada tipo, con un minimo de 8 digitos)
            </p>
        </div>
        
        <?php
            include "./Specials/Insert.php";
        ?>

        <div class="flex justify-center mb-6"> <!--Boton registrate-->
            <input 
                type="submit" 
                name="BtnRegistrar"
                class="inline-flex mb-4 justify-center rounded bg-gradient-to-b from-stone-500/90 to-stone-600/90 hover:bg-gradient-to-t from-stone-500/90 to-stone-600/90 cursor-pointer shadow-stone-900/80 shadow-md hover:drop-shadow-lg border-zinc-600 px-2 py-2 text-stone-900 font-medium" 
                value="Registrate">
        </div>
        
    </form>

</html>