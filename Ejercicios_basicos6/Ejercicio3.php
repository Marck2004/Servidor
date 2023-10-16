
    <?php

    $paises = array('Italia' => 'Roma',
    'Luxemburgo' => 'Luxemburgo',
    'Belgica' => 'Bruselas',
    'Dinamarca' => 'Copenhage',
    'Finlandia' => 'Helsinki',
    'Francia' => 'Paris',
    'Eslovakia' => 'Bratislava',
    'ESlovenia' => 'Ljubljana',
    'Alemania' => 'Berlin',
    'Grecia' => 'Atenas',
    'Irlanda' => 'Dublín',
    'Holanda' => 'Amsterdam',
    'Portugal' => 'Lisboa',
    'España' => 'Madrid',
    'Suecia' => 'Estocolmo',
    'Reino' => 'Unido Londres',
    'Chipre' => 'Nicosia',
    'República' => 'ChecaPraga',
    'Estonia' => 'Tallin',
    'Hungria' => 'Budapest',
    'Malta' => 'Valetta',
    'Austria' => 'Viena',
    'Polonia' => 'Varsovia');

        foreach ($paises as $indice => $valor) {
            echo "La capital de ".$indice." es: ".$valor."<br>";
        }

    ?>