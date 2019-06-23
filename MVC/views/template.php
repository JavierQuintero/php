<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../sass/estilos.css" rel="stylesheet"/>
    <!-- <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet"> -->
    <title>Template</title>
</head>
<body>
    <header>
        <h1>LOGOTIPO</h1>
    </header>
        <?php

            include "modules/elem/navegation.php"
        
        ?>
    <section>
        <h1>PAGINA DE INICIO</h1>
        <?php
        
            $mvc = new MvcController();
            $mvc -> enlacesPaginasController();
        
        ?>
    </section>
</body>
</html>