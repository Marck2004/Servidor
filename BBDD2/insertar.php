<?php

    session_start();

        if($_SESSION['resultado'] == 0){
            header('location:bbddInexistente.php');
        }else{
            function validar($tipo){
                if(isset($_REQUEST['enviar'])){
                    if(empty($_REQUEST[$tipo]) || !preg_match('/^[A-Z][a-zA-Z\s]+$/',$_REQUEST[$tipo])){
                        print "<p style='color:red;'>El campo esta vacio o contiene caracteres no aceptados</p>";
                        
                    }
                }
            }

            function añadirDatos(){
                
                if(isset($_REQUEST['enviar'])){
                    if((isset($_REQUEST['nombre']) && isset($_REQUEST['apellido'])) || preg_match('/^[A-Z][a-zA-Z\s]+$/',$_REQUEST[$tipo])){

                        $conexion = mysqli_connect("localhost","root","","listados");
                    
                        $buscar = mysqli_query($conexion,"select * from alumno where nombre ='$_REQUEST[nombre]' and apellido='$_REQUEST[apellido]' ");

                        if(mysqli_num_rows($buscar) == 0){
                        mysqli_query($conexion,"insert into alumno(nombre,apellido)
                        values ('$_REQUEST[nombre]','$_REQUEST[apellido]')") or die("ERROR:NO SE PUEDE INSERTAR");
    
                        $select = mysqli_query($conexion,"select * from alumno");
    
                        while($columna = mysqli_fetch_array($select)){
                            print "<br> Nombre : ".$columna['nombre']."<br> apellido: ".$columna['apellido'];
                        }
                        
                    }else{
                        print "<p>El alumno ya existe intente insertar otro</p><br>";
                        print "<a href='insertar.php'>Volver a insertar</a>";
                    }
                }

            }
        }
            ?>

            <p><a href="index.php">Pagina inicial</a></p>

            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">

            <h3>Escriba los datos del nuevo registro</h3>

            <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
            <?php validar("nombre") ?>
            <br>
            <p>Apellidos: <input type="text" name="apellido" id="apellido"></p>
            <?php validar("apellido") ?>

            <input type="submit" value="enviar" name="enviar">
            <input type="reset" value="Reiniciar formulario" name="cancelar">

            </form>

            
            <?php
            añadirDatos();
        }

        
?>
