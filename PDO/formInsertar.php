
    <?php
        include("funciones.php");
        session_start();

        if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

            ?>
            <form action="insertar.php" method="post">
                <?php

                $conexion = conectarBBDD("Agenda");

                $describe = "show columns from personas";
                $resultadoDescribe = $conexion->query($describe);
                $columnas = $resultadoDescribe->fetchAll(PDO::FETCH_ASSOC);

                foreach ($columnas as $columna) {
                    if($columna["Field"] != "id"){
                        print "<p>".$columna['Field']." <input type='text' name=".$columna['Field']."></p>";
                    }
                }
                ?>
                <input type="submit" value="Insertar" name="enviar"><input type="reset" value="Resetear" name="resetear">
                <?php
                    if(isset($_GET['max']) && $_GET['max'] == 1){
                        print "<p style='color:red'>Maximo numero de registros alcanzados debe borrar alguno</p>";
                    }
                ?>
            </form>
            <br>
            <a href="links.php">Volver al formulario</a>
            <?php
        }else{
            header("location:index.php?error=1");
        }

    ?>