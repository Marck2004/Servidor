<style>
    table,tr,th,td{
        border:2px solid black;
    }
    img{
        width:50px;
        heigth:50px;
    }
</style>
<?php

    include("funciones.php");
    manejarSesion();

    if(isset($_POST["enviar"])){
        if(count($_POST["borrados"]) == 0){
            header("location:formBorrar.php?ninguno=1");
        }
        $conn = conectarBBDD("marzo3");

        $stmt=$conn->prepare("delete from viviendas where id=?");

        foreach ($_POST["borrados"] as $borrado) {
            $stmt->execute([$borrado]);
        }
        
        $stmt = $conn->query("select * from viviendas");
?>
        <table>
        <th>Tipo</th>
        <th>Zona</th>
        <th>Direccion</th>
        <th>Dormitorios</th>
        <th>Precio</th>
        <th>Tamaño</th>
        <th>Extras</th>
        <th>Foto</th>
        <th>Borrar</th>
    <?php
        foreach ($stmt as $valores) {
            echo "<tr>
                <td>$valores[tipo]</td>
                <td>$valores[zona]</td>
                <td>$valores[direccion]</td>
                <td>$valores[dormitorios]</td>
                <td>$valores[precio]</td>
                <td>$valores[tamaño]</td>
                <td>$valores[extras]</td>
                <td><img src='imagenes/$valores[foto]'></td>
                <td><input type='checkbox' name='borrados[]' value='$valores[id]'</td>
            </tr>";
        }
    ?>
</table>
<?php
    }else{
        header("location:login.php?error=1");
    }

?>
<p><a href="links.php">Volver al formulario</a></p>