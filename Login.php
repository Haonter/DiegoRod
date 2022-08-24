<head>
    <link rel="stylesheet" href="./Partials/style2.css">
</head>
<?php 
    include "./Partials/header.php";
?>
<body class="bg-no-repeat bg-cover bg-fixed bg-[url('./Partials/BGL.jpg')] text-sky-900">

    <div class="flex justify-end"><!-- Titulo y Logo -->
        <a href="index.php">
            <img src="./Partials/HDLogo.png" class="drop mt-8 mr-8 w-24 cursor-pointer" alt="Haonter Dev Logo">
        </a>
    </div>

    <!--Iniciar Sesion-->
    <form class="bg-stone-200/70 mx-80 pb-8 shadow-inner shadow-stone-800/50 rounded-3xl" action="Login.php" method="POST">
        <h2 class="flex justify-center text-xl text-slate-900 font-medium mt-32 mb-4 pt-4">Iniciar Sesion</h2>

        <div class="flex justify-center">
            <div class="inline-flex justify-center mr-2">
                <input 
                    type="text"
                    class="rounded px-2 py-2 font-medium shadow-stone-800 shadow-md hover:drop-shadow-lg"
                    placeholder="Usuario" 
                    name="RUser"
                >
            </div>

            <div class="inline-flex justify-center mr-2">
                <input 
                    type="password"
                    class="rounded px-2 py-2 font-medium shadow-stone-800 shadow-md hover:drop-shadow-lg"
                    placeholder="Password" 
                    name="RPassword"
                >
            </div>

            <div class="inline-flex justify-center">
                <input 
                    type="submit" 
                    name="BLogin"
                    class="rounded bg-gradient-to-b from-stone-400/50 to-stone-500/50 hover:bg-gradient-to-t from-stone-500/50 to-stone-600/50 cursor-pointer shadow-stone-900/80 shadow-md hover:drop-shadow-lg border-zinc-600 px-2 py-2 mb-30 text-stone-800 font-medium" 
                    value="Iniciar Sesion"
                >
            </div>
        </div>
        <?php include "./Specials/LoginProcess.php" ?>
    </form>
</body>