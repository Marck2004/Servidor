
    <?php

       // $Sexo = $_REQUEST['Sexo'];
    
        
    if(isset($_REQUEST['Sexo'])){
        print "<p>Es un/a ".$_REQUEST['Sexo']."</p>";
    }else{
        print "<p style='color:red;'> no ha indicado su sexo</p>";
    }

    ?>
    <p><a href="index_ej2.html">Volver al formulario</a></p>