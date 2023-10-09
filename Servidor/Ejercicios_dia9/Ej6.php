<?php


    $Nombre = $_REQUEST['Nombre'];

    $Apellido = $_REQUEST['Apellido'];

    if(!empty($Nombre) && !is_numeric($Nombre)){
        print "<p>Nombre introducido <b>".$Nombre."</b></p>";
    }else if($Nombre==""){
        print "<p style='color:red;'>No ha introducido ningun valor</p>";
    }else{
        print "<p style='color:red';>Nombre introducido incorrecto</p>";
    }

    if(!empty($Apellido) && !is_numeric($Apellido)){
        print "<p>Apellido introducido <b>".$Apellido."</b></p>";
    }else if($Apellido==""){
        print "<p style='color:red;'>No ha introducido ningun valor</p>";
    }else{
        print "<p style='color:red;'>Apellido introducido incorrecto</p>";
    }


    switch ($_REQUEST['Edad']) {
        case $_REQUEST['Edad']==" ":
            print "<p style='color:red;'>No ha introducido ninguna edad</p>";
            break;
        case $_REQUEST['Edad']<20:
            print "<p>Es menor de 20 años</p>";
            break;
        case $_REQUEST['Edad']>=20 && $_REQUEST['Edad']<39:
            print "<p>Esta entre 20 y 39 años</p>";
            break;
        case $_REQUEST['Edad']>=40 && $_REQUEST['Edad']<59:
            print "<p>Esta entre 40 y 59 años</p>";
            break;
        case $_REQUEST['Edad']>60:
            print "<p>Es mayor de 60 años</p>";
            break;
        default:
            print "<p>No ha introducido una edad correcta</p>";
            break;
    }

        if(is_numeric($_REQUEST['Peso'])){
            print "</p>Su peso es de ".$_REQUEST['Peso']." kg</p>";
        }else{
            print "<p style='color:red;'>Valor introducido incorrecto</p>";
        }

        if(isset($_REQUEST['Sexo'] )== 'Hombre'){
            print "<p>Su sexo es masculino</p>";
        }else if(isset($_REQUEST['Sexo']) == 'Mujer'){
            print "<p>Su sexo es femenino</p>";
        }else{
            print "<p style='color:red;'>Valor vacio/incorrecto</p>";
        }

        if(isset($_REQUEST['EstadoCivil']) == 'Casado'){
            print "<p>Su estado civil es casado</p>";
        }else if(isset($_REQUEST['EstadoCivil']) == 'Soltero'){
            print "<p>Su estado civil es soltero</p>";
        }else if(isset($_REQUEST['EstadoCivil']) == 'Otro'){
            print "<p>Su estado civil no esta especificado</p>";
        }else{
            print "<p style='color:red;'>Valor/es introducidos vacios/incorrectos</p>";
        }

        if(isset($_REQUEST['Cine']) == 'Cine'){
            print "<p>Le gusta el cine</p>";
        }
        if(isset($_REQUEST['Literatura']) == 'Literatura'){
            print "<p>Le gusta el Literatura</p>";
        }
        if(isset($_REQUEST['Tebeos']) == 'Tebeos'){
            print "<p>Le gusta el Tebeos</p>";
        }
        if(isset($_REQUEST['Deporte']) == 'Deporte'){
            print "<p>Le gusta el Deporte</p>";
        }
        if(isset($_REQUEST['Musica']) == 'Musica'){
            print "<p>Le gusta el Musica</p>";
        }
        if(isset($_REQUEST['Television']) == 'Television'){
            print "<p>Le gusta el Television</p>";
        }
?>