<?php

    
    if(isset($_REQUEST['enviar'])){

        print "<a href='index.php'>Volver a inicio</a>";

        if((isset($_REQUEST['nombre']) && isset($_REQUEST['apellido'])) || preg_match('/^[A-Z][a-zA-Z\s]+$/',$_REQUEST[$tipo])){
            $conexion = mysqli_connect("localhost","root","","listados");
        
            $buscar = mysqli_query($conexion,"select * from alumno where nombre ='$_REQUEST[nombre]' and apellido='$_REQUEST[apellido]' ");

            if(mysqli_num_rows($buscar) == 0){
            mysqli_query($conexion,"insert into alumno(nombre,apellido)
            values ('$_REQUEST[nombre]','$_REQUEST[apellido]')") or die("ERROR:NO SE PUEDE INSERTAR");

                print "<p> Registro <b>".$_REQUEST['nombre'] . $_REQUEST['apellido']. "</b> creado correctamente</p>";
        }else{
            print "<p>El alumno ya existe intente insertar otro</p><br>";
            print "<a href='insertar.php'>Volver a insertar</a>";
        }
    }

    }


?>