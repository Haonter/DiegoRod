<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es-ES">
    
<?php //Header
    include "./Partials/homeheader.php";
?>
<head>
    <link rel="stylesheet" href="./Partials/style2.css">
</head>

<body class="bg-no-repeat bg-cover bg-fixed bg-[url('./Partials/BG.jpg')] text-stone-800"> <!-- Bienvenido Usuario-->
    <div class='flex justify-center'>
        <p class='inline-flex justify-center text-center text-stone-900 mt-4 text-xs font-bold'>
            ¡Bienvenido/a <?php echo ucfirst($_SESSION["Usuario"])?>! <!-- ucfirst(retorna una cadena con el primer caracter en mayuscula)-->
        </p>
    </div>

    <div class="grid grid-cols-10"> <!-- Titulo y Logo -->
    
        <div class="content-center mt-28 ml-36 col-span-9">
            <h1 class="ShadowT text-center text-5xl text-stone-800 font-bold">Diego Rodriguez</h1>
        </div>
        <div class="flex justify-end">
                <a href="index.php">
                    <img src="./Partials/HDLogo.png" class="drop mr-8 w-24 cursor-pointer" alt="Haonter Dev Logo">
                </a>
        </div>
    </div>

    <div class="content-center mt-10 ml-4 grid-cols-10"> <!-- WD -->
        <h3 class="text-center text-3xl col-span-10 ShadowT2 text-stone-800 font-bold">Desarrolador WEB</h3>
    </div>
    
</body>
</html>