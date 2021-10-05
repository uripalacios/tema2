<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../webroot/css/style.css">
    <title>Include</title>
</head>
<body>
    <header>
        Página de Uriel
        <p class="subtitulo">Incluyendo Ficheros</p>

    </header>
    <main>
        <?php
            require("saludo.php");
            require("saludo.php");
            //tambien nos valdria para constantes
            include("misConstantes.php");
            echo USER;

            
        ?>
        <br>
        <a href="codigo.php?paginaPHP="
        <?
        $pagina = basename($_SERVER['SCRIPT_FILENAME']);
        echo $pagina;
        ?>
        >Ver el codigo</a>
    </main>
    <footer>&copy urielpalacios</footer>
</body>
</html>