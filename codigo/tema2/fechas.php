<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../webroot/css/style.css">
    <title>Mi pagina principal</title>
</head>
<body>
    <header>
        Página de Uriel
        <p class="subtitulo">Index tema 2</p>

    </header>
    <main>

    <?php
        echo "<p>Segundos desde 1970</p>";
        $fecha = time();
        echo $fecha;
        echo "<p>Zona horaria servidor</p>";
        echo date_default_timezone_get();
        echo "<p>Zona horaria cambiada a Sarajevo</p>";
        date_default_timezone_set("Europe/Sarajevo");
        echo date_default_timezone_get();

        echo "<p>Fecha actual</p>";
        echo date('d-m-y h:i:s', time());
        //año-mes-dia
        echo "<p>Cumpleaños Ismael</p>";
        $cumple = strtotime('01-07-27');
        echo $cumple;
        //mes/dia/año
        $cumple2 = strtotime('07/27/01');
        echo "<p>Cumpleaños Ismael comprobacion de la fecha</p>";
        echo date('d-m-y h:i:s', $cumple);
        echo "<p>";
        echo date('d-m-y h:i:s', $cumple2);
    ?>

    <br>
            <a href="codigo.php?paginaPHP=<?$pagina = basename($_SERVER['SCRIPT_FILENAME']);echo $pagina;?>">Ver el codigo</a>        
    </main>
    <footer>&copy urielpalacios</footer>
</body>
</html>