
<?php

    switch ($_REQUEST['Edades']) {
        case $_REQUEST['Edades']==" ":
            print "<p style='color:red;'>No ha introducido ninguna edad</p>";
            break;
        case $_REQUEST['Edades']<20:
            print "<p>Es menor de 20 años</p>";
            break;
        case $_REQUEST['Edades']>=20 && $_REQUEST['Edades']<39:
            print "<p>Esta entre 20 y 39 años</p>";
            break;
        case $_REQUEST['Edades']>=40 && $_REQUEST['Edades']<59:
            print "<p>Esta entre 40 y 59 años</p>";
            break;
        case $_REQUEST['Edades']>60:
            print "<p>Es mayor de 60 años</p>";
            break;
        default:
            print "<p>No ha introducido una edad correcta</p>";
            break;
    }

?>
<p><a href="index_ej5.html">Volver al formulario</a></p>