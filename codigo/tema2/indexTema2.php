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
        <a href=""></a>
        <?
           echo "Hola", " clase ";  
           echo "<br>";        
        ?>
        <?
             print "Hola" . " clase<br>" . " de DAW ";
             echo "<br>";
        ?>
        <?
            printf("%d" , "17.999");
            echo "<br>";
            //sin decir decimales
            printf("%f" , "17.999");
            echo "<br>";
            //especificando decimales
            printf("%.3f" , "17.999");
            echo "<br>";
            printf("%s" , "17.999");
            echo "<br>";
        ?>
        <?
            echo "Var_dump<br>";
            echo var_dump("uriel");
            echo "<br>";
            echo var_dump("uriel",3.14);
        ?>
        <h2>Como antiguamente</h2>
        <a href="Holamundo.php">Hola mundo antiguo</a>
        <h2>Hedoc</h2>
        <?
            //Escribir un bloque de texto literalmente
            echo <<< MITEXTO
            Estamos en clase haciendo php 
            y las interfaces que hacemos 
            son muy bonitas y quiero escribir "con comillas"
            \n cosas raras
            MITEXTO;
        ?>
    </main>
    <footer>&copy urielpalacios</footer>
</body>
</html>