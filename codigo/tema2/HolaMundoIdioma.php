<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR.02</title>
</head>
<body>
    <?php

        $idiomaRecogido= $_GET['idioma'];
        $idiomas_es = "Hola";
        $idiomas_en = "Hello";
        $idiomas_pt = "Olá";
        $idiomas_al = "Hallo";
        $idiomas_fr = "Salut";



        //Variable de saludo que es la que se escribe
        // variable de variable
        $saludo="idiomas_".$idiomaRecogido ;       
        echo $$saludo;
        
    ?>
    <br>
    <a href="codigo.php?paginaPHP=<?$pagina = basename($_SERVER['SCRIPT_FILENAME']);echo $pagina;?>">Ver el codigo</a> 
</body>
</html>