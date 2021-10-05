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
            $a = 1;
            //local vs global
            function ambito(){
                global $a;
                echo $a;
                //En este caso si entra el valor de fuera de funcion
            }
            ambito();

            function contador(){
                //Quiere decir que no se puede volver a inicializar, 
                //Pero si me incrementa su valor si lo deseo.
                static $c=0;
                $c++;
                echo "<br>";
                echo $c;
            }
            contador();
            contador();
        ?>

        <h1>Constante</h1>
        <?php
            //se usa mas
            define("USUARIO","maria");
            echo USUARIO;
            echo "<br>";
            //casi no se usa
            const USER ="pepe";
            echo USER;
            //solo se puede boolean, entero, string y float
        ?>
        <br>
        <a href="codigo.php?paginaPHP=<?$pagina = basename($_SERVER['SCRIPT_FILENAME']);echo $pagina;?>">Ver el codigo</a>  
    </main>
    <footer>&copy urielpalacios</footer>
</body>
</html>