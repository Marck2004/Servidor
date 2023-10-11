<?php

    if(!empty($_REQUEST['Nombre']) && !empty($_REQUEST['Nombre'])){
        print "<p>El nombre es ".$_REQUEST['Nombre']."</p>";
    }else{
        print "<p style='color:red;'>El nombre esta vacio o es incorrecto</p>";
    }

    if(!empty($_REQUEST['Apellidos']) && !empty($_REQUEST['Apellidos'])){
        print "<p>El apellido es ".$_REQUEST['Apellidos']."</p>";
    }else{
        print "<p style='color:red;'>El apellido esta vacio o es incorrecto</p>";
    }

    if(preg_match('/^[a-zA-Z0-9_%*()<>+]+@gmail\.com$/',$_REQUEST['email'])){
        print "<p>El email es ".$_REQUEST['email']."</p>";
    }else{
        print "<p style='color:red;'>El email esta vacio o es incorrecto</p>";
    }

    if(!empty($_REQUEST['Contraseña'])){
        print "<p>La contraseña es".$_REQUEST['Contraseña']."</p>";
    }else{
        print "<p style='color:red;'>La contraseña esta vacia o es incorrecta</p>";
    }

    if(isset($_REQUEST['Sexo'])=='Varon'){
        print "<p>Es un varon</p>";
    }else if(isset($_REQUEST['Mujer'])=='Mujer'){
        print "<p>Es una mujer</p>";
    }else{
    print "<p style='color:red;'>Valores vacios/incorrectos";
    }

    if(isset($_REQUEST['Estudios'])=='CertEsc'){
        print "<p>Tiene el certificado escolar</p>";
    }else if(isset($_REQUEST['Estudios'])=='ESO'){
        print "<p>Tiene la ESO</p>";
    }else if(isset($_REQUEST['Estudios'])=='FP'){
        print "<p>Tiene FP</p>";
    }else if(isset($_REQUEST['Estudios'])=='Diplomado'){
        print "<p>Esta Diplomado/a</p>";
    }else if(isset($_REQUEST['Estudios'])=='Licenciado'){
        print "<p>Es un/a Licenciado/a</p>";
    }else{
    print "<p style='color:red;'>Valores vacios/incorrectos";
    }

    if(isset($_REQUEST['Interes']) == 'Musica'){
        print "<p>Le gusta la Musica</p>";
    }else if(isset($_REQUEST['Interes']) == 'Deportes'){
        print "<p>Le gustan los Deportes</p>";
    }else if(isset($_REQUEST['Interes']) == 'Cine'){
        print "<p>Le gusta el Cine</p>";
    }else if(isset($_REQUEST['Interes']) == 'Libros'){
        print "<p>Le gustan los Libros</p>";
    }else if(isset($_REQUEST['Interes']) == 'Ciencias'){
        print "<p style='color:red;'>No ha seleccionado ningun hobbie</p>";
    }

    switch ($_REQUEST['Semana']) {
        case $_REQUEST['Semana']=='Default':
            print "<p>No sabe en que dia vive</p>";
            break;
        case $_REQUEST['Semana']=='Lunes':
            print "<p>Es Lunes</p>";
            break;
        case $_REQUEST['Semana']=='Martes':
            print "<p>Es Martes</p>";
            break;
        case $_REQUEST['Semana']=='Miercoles':
            print "<p>Es Miercoles</p>";
            break;
        case $_REQUEST['Semana']=='Jueves':
            print "<p>Es Jueves</p>";
            break;
        case $_REQUEST['Semana']=='Viernes':
            print "<p>Es Viernes</p>";
            break;
        case $_REQUEST['Semana']=='Sabado':
            print "<p>Es Sabado</p>";
            break;
        case $_REQUEST['Semana']=='Domingo':
            print "<p>Es Domingo</p>";
            break;
        default:
            print "<p>Esto no va a salir</p>";
            break;
    }
    if(!empty($_REQUEST['Opinion'])){
    print "<p>Su opinion es ".$_REQUEST['Opinion']."</p>";
        }else{
            print "<p style='color:red'>No tiene opinion</p>";
        }
?>
<p>Los datos son correctos <a href="Ejercicio7(3).html">Enviar</a></p>
<p>Los datos no son correctos <a href="index_ej7.html"> Volver a escribirlos</a></p>