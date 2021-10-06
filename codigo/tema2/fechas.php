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
        //letra
        $cumple3 = strtotime('27 July 2001');

        echo "<p>Cumpleaños Ismael comprobacion de la fecha</p>";
        echo date('d-m-y h:i:s', $cumple);
        echo "<p>";
        echo date('d-m-y h:i:s', $cumple2);
        echo "<p>";
        echo date('d-m-y h:i:s', $cumple3);
        echo "<p>";
        //Sumar fechas
        
        $hoy = time();
        echo date('d-m-y h:i:s', strtotime("+ 1 day"));

        echo "<p>";
        echo date('d-m-y h:i:s', strtotime("+ 1 week 2 hours"));
        echo "<p>";
        echo date('d-m-y h:i:s', strtotime("next Monday"));
        echo "<p>";
        //Para realizar la diferencia entre fechas y sacar los dias se haria con objetos
        // echo "<p>";
        // $diaObjeto = new Datetime();
        // $diaObjeto2 = new Datatime('2021-01-01');        
        // echo ($diaObjeto2->diff($diaObjeto))->format('%R%a days');

        //
        $diaMKtime = mktime(5,42,50,10,6,2021);
        echo "<p>";
        echo date('d-m-y h:i:s',$diaMKtime);
        echo "<p>";
        //
        print_r(getdate());
        echo "<p>";
        //para acceder a uno de los datos del array generado
        $arrayfecha = getdate();
        echo $arrayfecha['wday'];

    ?>

    <br>
            <a href="codigo.php?paginaPHP=<?$pagina = basename($_SERVER['SCRIPT_FILENAME']);echo $pagina;?>">Ver el codigo</a>        
    </main>
    <footer>&copy urielpalacios</footer>
</body>
</html>