
<?php

function saneararray($var)
    {
        $array = array();
        foreach ($var as $indice => $valor) {
            $indicelimpio = htmlspecialchars(trim(strip_tags($indice)), ENT_QUOTES, "UTF-8");
            $valorlimpio = htmlspecialchars(trim(strip_tags($valor)), ENT_QUOTES, "UTF-8");
            $array[$indicelimpio][$valorlimpio];
        }
        return $array;
    }

    function sanear($texto)
    {
        if (isset($_REQUEST[$texto])) {
            $retorno = htmlspecialchars(trim(strip_tags($_POST[$texto])), ENT_QUOTES, "UTF-8");
        } else {
            $retorno = "";
        }
        return $retorno;
    }

?>