<?php

    $texto = $_REQUEST['Nombre'];
print "<p>";
        if(isset($texto) && !is_numeric($texto) && !empty($texto)){
            print 'El nombre es: '.htmlspecialchars(trim(strip_tags($texto)),ENT_QUOTES,"utf-8");
        }else{
            print "<p>El nombre introducido es incorrecto o esta vacio</p>";
        }
        print "</p>";
        $contraseña = $_REQUEST['Contraseña'];
print "<p>";
        if(!mb_strlen($contraseña) < 5){
            print 'La contraseña es: '.htmlspecialchars(trim(strip_tags($contraseña)),ENT_QUOTES,"utf-8");
        }else{
            print "Los caracteres de la cadena son menores de 5";
        }
print "</p>";
        $estudios = $_REQUEST['Educacion'];
        print "<p>";
        switch ($estudios) {
            case $estudios == "Sin estudios":
                print htmlspecialchars(trim(strip_tags($estudios)),ENT_QUOTES,"utf-8");
                break;

            case $estudios == "ESO";
            print htmlspecialchars(trim(strip_tags($estudios)),ENT_QUOTES,"utf-8");
            break;
            case $estudios == "Bachillerato":
                print htmlspecialchars(trim(strip_tags($estudios)),ENT_QUOTES,"utf-8");
                break;

            case $estudios == "FP";
            print htmlspecialchars(trim(strip_tags($estudios)),ENT_QUOTES,"utf-8");
            break;

            case $estudios == "Universitario":
                print htmlspecialchars(trim(strip_tags($estudios)),ENT_QUOTES,"utf-8");
                break;

            case $estudios == "Otros";
            print htmlspecialchars(trim(strip_tags($estudios)),ENT_QUOTES,"utf-8");
            break;                                    
            default:
                print htmlspecialchars(trim(strip_tags("No tiene estudios")),ENT_QUOTES,"utf-8");
                break;
        }
        print "</p>";

        if(isset($_REQUEST['Nacionalidad']) =="Hispana"){
            print htmlspecialchars(trim(strip_tags($_REQUEST['Nacionalidad'])),ENT_QUOTES,"utf-8");
        }else if(isset($_REQUEST['Nacionalidad']) =="Sajona"){
            print htmlspecialchars(trim(strip_tags($_REQUEST['Nacionalidad'])),ENT_QUOTES,"utf-8");
        }else if(isset($_REQUEST['Nacionalidad']) =="Otro"){
            print htmlspecialchars(trim(strip_tags($_REQUEST['Nacionalidad'])),ENT_QUOTES,"utf-8");
        }


?>
<p><a href="Ejercicio2.html">Volver al formulario</a></p>