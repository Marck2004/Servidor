

    <?php

        $Fila1Columna1=$_REQUEST['Fila1Columna1'];
        $Fila1Columna2=$_REQUEST['Fila1Columna2'];

        $Fila2Columna1=$_REQUEST['Fila2Columna1'];
        $Fila2Columna2=$_REQUEST['Fila2Columna2'];

            function ordenarMatriz($Fila1Columna1,$Fila1Columna2,
            $Fila2Columna1,$Fila2Columna2){
                print "<h1>Matriz ordenada</h1>";
        $arr = array(1=>$Fila1Columna1,2=>$Fila1Columna2,
        3=>$Fila2Columna1,4=>$Fila2Columna2);
        
        print "<table style='border:1px solid black'>";
        for ($i=1; $i < count($arr); $i++) { 
            
            print "<tr style='border:1px solid black'>";
                    print "<td style='border:1px solid black'>".$arr[$i]."</td>";
            $i++;
                    for ($j=2; $j < 4; $j++) { 
                        
                       print "<td style='border:1px solid black'>".$arr[$i]."</td>";
                       $j++;

                    }
            print "</tr>";
            
        }

        print "</table>";
            }
            

                ordenarMatriz($Fila1Columna1,$Fila1Columna2,
                $Fila2Columna1,$Fila2Columna2);
                ordenarMatriz($Fila2Columna1,$Fila2Columna2,
                $Fila1Columna1,$Fila1Columna2);
    ?>
    <p><a href="index.html">Volver al formulario</a></p>