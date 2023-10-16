

    <?php

        $pais = array(
            "España"=>array("Peseta"=>"Castellano"),
            "Italia"=>array("Lira"=>"Italiano"),
            "Francia"=>array("Frances"=>"Franco"),
            "Reino Unido"=>array("Ingles"=>"Libra"),
            "Alemania"=>array("Aleman"=>"Marco"));

print "<table style='border:1px solid black;'><tbody>";
echo "<th style='border:1px solid black;'>Nombre</th>
<th style='border:1px solid black;'>Lengua</th>
<th style='border:1px solid black;'>Moneda</th>";
        foreach ($pais as $indice => $valor) {
            echo "<tr style='border:1px solid black;'>";
            foreach ($valor as $indice2 => $value) {
                echo "<td style='border:1px solid black;'>".$indice."</td>
                <td style='border:1px solid black;'</td>".$value.
                "<td style='border:1px solid black;'</td>".$indice2;
            }
            echo "</tr>";
        }
print "</tbody></table>";

    ?>