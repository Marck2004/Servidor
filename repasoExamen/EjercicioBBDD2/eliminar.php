
    <?php

        session_start();

        if(isset($_REQUEST['enviar'])){
            if($_SESSION['usuario'] == 0 || $_SESSION['clave'] == 0){
                header('location:index.php?usuario=1&clave=1');
            }else{

                $conexion = mysqli_connect("localhost","root","","datos_empleados");

            foreach ($_REQUEST['borrar'] as $value) {
                mysqli_query($conexion,"delete from  empleados where codigo=".$value);
            }
                
                header('location:mostrarEmpleados.php');

            }
        }

    ?>