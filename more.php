<?php include "./Partials/moreheader.php"; ?>

<head>
    <link rel="stylesheet" href="./Partials/style2.css">
</head>
<body class="bg-gradient-to-tr from-sky-900 via-sky-700 to-sky-400 text-sky-900">

    <div class="flex justify-end"><!-- Titulo y Logo -->
        <a href="index.php">
            <img src="./Partials/HDLogo.png" class="drop mt-8 mr-8 w-24 cursor-pointer" alt="Haonter Dev Logo">
        </a>
    </div>

    </form>
    <!--Crear Base de Datos-->
    <form class="flex justify-center mt-24 mb-4" action="./Specials/db.php" method="POST" target="_blank">
        <input 
            type="submit" 
            class="rounded bg-gradient-to-b from-sky-500 to-sky-700 hover:bg-gradient-to-t from-sky-500 to-sky-600 cursor-pointer shadow-cyan-900 shadow-lg hover:shadow-xl border-zinc-600 px-2 py-2 text-slate-900 font-medium" 
            value="Crear base de datos"
        ><br>
    </form>
    <!--Crear Tabla de Usuarios-->
    <form class="flex justify-center mt-20" action="./Specials/table.php" method="POST" target="_blank">
        <input 
            type="submit" 
            class="rounded bg-gradient-to-b from-sky-500 to-sky-700 hover:bg-gradient-to-t from-sky-500 to-sky-600 cursor-pointer shadow-cyan-900 shadow-lg hover:shadow-xl border-zinc-600 px-2 py-2 text-slate-900 font-medium" 
            value="Crear Tabla"
        ><br>
    </form>
    <!-- Ver Registros -->
    <form class="flex justify-center mt-20" action="./Specials/show.php" method="POST" target="_blank">
        <input 
            type="submit" 
            class="rounded bg-gradient-to-b from-sky-500 to-sky-700 hover:bg-gradient-to-t from-sky-500 to-sky-600 cursor-pointer shadow-cyan-900 shadow-lg hover:shadow-xl border-zinc-600 px-2 py-2 text-slate-900 font-medium" 
            value="Ver Registros"
        ><br>
    </form>
</body>