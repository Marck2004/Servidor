<?php

    if($_REQUEST['enviar']){

        $conectar = mysqli_connect("localhost","root","","alumnos");

            $select = mysqli_query($conectar,"select * from t_cursos where nombre='".$_REQUEST['nombre']."' and apellido ='".$_REQUEST['especializacion']."'");

            if(mysqli_num_rows($select) > 0){
                print "ENTRASTE!!!!!!";
            }else{
                header("location:inicio.php");
            }


    }

?>