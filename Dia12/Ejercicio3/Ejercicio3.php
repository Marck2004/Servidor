
    <?php
    $nombre = $_REQUEST['Nombre'];
    $texto = $_REQUEST['campos'];
        if(isset($_REQUEST['Enviar'])){
            if(preg_match('/^[A-Za-z]+$/',$nombre) && isset($texto)){
                print "<p>Los datos se cargaron correctamente</p>";
                print "<p>Pulse <a href=Fichero.php>aqui</a> para ver el contenido del fichero</p>";

                $abrirFichero = fopen("escribir.txt",'w');
                $escrito = "----------\n".$nombre."\n".$texto;
                fwrite($abrirFichero,$escrito);
                fclose($abrirFichero);
                
            }else{
                print "<p style='color:red;'>Hay algun dato erroneo compruebelos</p>";
            }
        }

?>
<a href="Ejercicio3.html">Volver al formulario</a>