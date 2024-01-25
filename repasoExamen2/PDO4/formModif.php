<style>
    table,tr,th,td{
        border:2px solid black;
    }
</style>
<?php
    include("funciones.php");
    session_start();

    if(isset($_SESSION["usuario"])){

        $conn = conectarBBDD("Matricula2");

        $stmt = $conn->query("select * from matriculas");

        ?>
            <form action="formModif2.php" method="post">
                <table>
                    <th>DNI</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DIRECCION</th>
                    <th>TELEFONO</th>
                    <th>FOTO</th>
                    <th>MODIFICAR</th>
        <?php
            foreach ($stmt as $valor) {
                echo "<tr>
                <td>".$valor['dni']."</td>
                <td>".$valor['nombre']."</td>
                <td>".$valor['apellido']."</td>
                <td>".$valor['direccion']."</td>
                <td>".$valor['telefono']."</td>
                <td><img src='imagenes/".$valor['foto']."'style='width:50px;heigth:50px;'></td>
                <td><input type='radio' name='modif' value='$valor[dni]'></td>
                </tr>";
            }
        ?>
        </table>
        <input type="submit" value="enviar" name="enviar">
        <p><a href="links.php">Volver al formulario</a></p>
            </form>
        ?>
<?php

    }else{
        header("location:index.php?error=1");
    }

?>