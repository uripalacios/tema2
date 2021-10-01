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
            echo "<h1>Entero</h1>";
                $variable=7;

            //mostrar la variable            
            echo "La variable es: ", $variable;
            echo "<br>Tipo de variable<br>";
            //Nos muestra el tipo de variable(impreso)
            echo var_dump($variable); 
            
            //El tipo de dato boolean
            echo "<h1>Boolean</h1>";
            $bolean = false;
            echo "<br>la variable $bolean es: " . gettype($bolean) . " tiene el valor de " . $bolean ."<br>";
            //como ver las propiedades
            echo var_dump($bolean); 
            echo "<br>le pregunto con is_bool():";
            echo is_bool($bolean);

            // EL tipo float
            echo "<h1>Decimal</h1>";
                echo "float";
                $conpunto = 8.326;
                echo "<br>la variable $conpunto es: " . gettype($conpunto) . " tiene el valor de " . $conpunto ."<br>";
                echo "<br>le pregunto con is_float():";
                echo is_float($conpunto);

            //Numero en base cientifica
                $numbasecientifica =2.52e10;
                echo "<br>la variable $numbasecientifica es: " . gettype($numbasecientifica) . " tiene el valor de " . $numbasecientifica ."<br>";
                echo "<br>le pregunto con is_float():";
                echo is_float($conpunto);

            //Numero en base hexadecimal
                $hex =0xFE;
                echo "<br>la variable $hex es: " . gettype($hex) . " tiene el valor de " . $hex ."<br>";
                echo "<br>";

            //Convertir
                //Se le escribe la variable, la base en la que esta, a lo que se quiere convertir
                echo base_convert($hex,10,16);

            //Comprobar si es numerico
                echo "<br>Si el hexadecimal es numerico: " . is_numeric($hex);

            
                echo "<h1>String</h1>";
                $cadena = "8.326";
                echo "<br>la variable cadena es: " . gettype($cadena) . " tiene el valor de " . $cadena ."<br>";
                echo "<br>le pregunto con is_string():" . is_string($cadena);
                echo "<br>le pregunto con is_numeric():" . is_numeric($cadena);

                echo "<h1>Nulo</h1>";
                $nulo=null;
                echo "<br>La variable nulo es: " . gettype($nulo) . "tiene el valor de " . var_dump($nulo);
                echo "<br>si el nulo es null():" . is_null($nulo);

                //Cambiar el tipo de dato
                //tengo el en entero hexadecimal y lo quiero comvertir a float
                echo "<h1>Conversiones</h1>";
                echo gettype($hex) . " pasa a ";
                settype($hex, "float");
                echo gettype($hex);
                echo "<br>";

                //Convertir variables
                //de forma automatica
                $a=4;
                $b=2.5;
                $s=$a+$b;
                echo "Valor " . $s. " y tipo " . gettype($s);

                //cast nosotros
                $castint = $a + (int) $b;
                echo "<br>Valor " .$castint. " y tipo " .gettype($castint);

                //Variables de variables
                echo "<h1>Variables de variables</h1>";
                echo "<br>";
                $var ="uno";
                echo "<br>";
                $$var="dos";
                echo "<br>";
                echo $var;
                echo "<br>";
                echo $$var . " es lo mismo " . $uno;

                //Variables por referencia
                echo "<h1>Variables por referencia</h1>";
                $d=5;
                $e=&$d;
                $d=$d + 1;
                echo $e;

                //Variables predefinidas, superglobales
                echo "<h1>Superglobales</h1>";
                echo "<br> POST";                
                print_r($_POST);
                echo "<br> GET";                
                print_r($_GET);
                echo "<br> REQUEST";                
                print_r($_REQUEST);
                echo "<br> SESSION";                
                print_r($_SESSION);

                echo "<br> SERVER";                
                print_r($_SERVER);

                //Comprobar que llega la variable
                if(isset($_GET['nombre']) && $_GET['nombre'] =='uriel')
                    echo $_GET['nombre'];
                else
                    echo "No hay nombre";

                //SI esta bien programado el htmml
                $_GET['idioma'];
            ?>
        </main>
    <footer>&copy urielpalacios</footer>
</body>
</html>