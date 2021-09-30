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
            //declaramos variable
                $variable=7;
            //mostrar la variable
            echo "La variable es: ", $variable;
            echo "<br>Tipo de variable<br>";
            //Nos muestra el tipo de variable(impreso)
            echo var_dump($variable); 
            
            //El tipo de dato boolean
            $bolean = false;
            echo "<br>la variable $bolean es: " . gettype($bolean) . " tiene el valor de " . $bolean ."<br>";
            //como ver las propiedades
            echo var_dump($bolean); 
            echo "<br>le pregunto con is_bool():";
            echo is_bool($bolean);

            // EL tipo float
                $conpunto = 8.326;
                echo "<br>la variable $conpunto es: " . gettype($conpunto) . " tiene el valor de " . $conpunto ."<br>";
                
            ?>
        </main>
    <footer>&copy urielpalacios</footer>
</body>
</html>