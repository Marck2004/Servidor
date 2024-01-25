<style>
    table,tr,th,td{
        border:2px solid black;
    }
</style>

<?php

session_start();
include("funciones.php");
    if(isset($_SESSION["usuario"])){    
        if(is_dir("imagenes")){
            $directorio = scandir("imagenes");

            print "<table>";
            print "<th>FICHEROS</th>";
            foreach ($directorio as $fichero) {
                if($fichero != "." && $fichero != ".."){
                    echo "<tr>
                    <td>$fichero</td>
                    </tr>";
                }
            }
            print "</table>";
        }
        print "<p><a href='links.php'>Volver al formulario</a></p>";
        }else{
    header("location:index.php?error=1");
    }

?>