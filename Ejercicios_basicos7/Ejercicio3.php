
    <?php

        $Caracter = $_REQUEST['Caracter'];

        function comprobar($caracter){

            switch ($caracter) {
                case ctype_upper($caracter):
                    print $caracter. " es mayuscula";
                    break;
                case ctype_lower($caracter):
                    print $caracter. " es minuscula";
                    break;
                case ctype_alnum($caracter):
                    print $caracter. " es un numero";
                    break;
                case ctype_space($caracter):
                    print $caracter." es un blanco";
                case ctype_punct($caracter):
                    print $caracter. " es un signo de puntuacion";
                    break;
                default:
                    print "Es cualquier otra cosa";
                    break;
            }
        }
        comprobar($Caracter);
    ?>
    <p><a href="index.html">Volver al formulario</a></p>