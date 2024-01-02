<?php
    include("funciones.php");
    session_start();

        if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

            if(isset($_REQUEST['modificado'])){
                print "<a href='links.php'>Volver al formulario</a><br>";
                try{

                $conexion = conectarBBDD("Agenda");

                $select = "select id,Nombre,Apellido from personas where id = ?";

                $confirmSelect = $conexion ->prepare($select);

                $confirmSelect ->execute([$_REQUEST['modificado']]);

                foreach ($confirmSelect as $resultado) {
                ?>
                    <form action="confirmModif.php" method="post">
                        <p><input type="hidden" name="esconder" value="<?php echo $resultado['id'] ?>"></p>
                        <p>Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $resultado['Nombre']; ?> "></p>
                        <p>Apellidos <input type="text" name="apellido" id="apellido" value="<?php echo $resultado['Apellido'] ?>"></p>
                        <input type="submit" value="Actualizar"><input type="reset" value="Reiniciar formulario">
                    </form>

                <?php
                }
                }catch(PDOException $e){
                    print "<p>Error al crear la bbdd ".$e->getMessage()."</p>";
                }
            }else{
                header("location:formModif.php?seleccion=1");
            }

        }else{
            header("location:index.php?error=1");
        }

?>