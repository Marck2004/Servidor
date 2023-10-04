<?php



    if(isset($_REQUEST['Cine'])){
        print "<p>Le gusta el <b>".$_REQUEST['Cine']."</b></p>";
    }

    if(isset($_REQUEST['Literatura'])){
        print "<p>Le gusta la <b>".$_REQUEST['Literatura']."</b></p>";
    }

    if(isset($_REQUEST['Musica'])){
        print "<p>Le gusta la <b>".$_REQUEST['Musica']."</b></p>";
    }
    if(!isset($_REQUEST['Cine']) && !isset($_REQUEST['Literatura'])&& !isset($_REQUEST['Musica'])){
        print "<p style='color:red;'>No ha introducido valores</p>";
    }
?>
    <p><a href="index_ej3.html">Volver al formulario</a></p>