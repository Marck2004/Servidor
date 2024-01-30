
   <style>
    table,th,tr,td{
        border:2px solid black;
    }
    img{
        width:50px;
        heigth:50px;
    }
   </style>
   <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <p>Mostrar viviendas de tipo: <select name="filtro" id="filtro">
        <option value="Todos">Todos</option>
        <option value="Piso">Piso</option>
        <option value="Chalet">Chalet</option>
        <option value="Casa">Casa</option>
        <option value="Adosado">Adosado</option>
        </select>
        <input type="submit" value="Actualizar" name="enviar">
    </p>
    </form>
<table>
<?php

    include("funciones.php");
    manejarSesion();
    $conn=conectarBBDD("marzo3");
    $stmt=$conn->query("select * from viviendas");

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
            </tr>";
        }
    ?>
</table>
<?php
    if(isset($_POST["enviar"])){
        $filtro = sanear("filtro");

        if($filtro == "Todos"){
            $stmt=$conn->query("select * from viviendas");

        }else{
            $stmt=$conn->prepare("select * from viviendas where tipo = ?");
            $stmt->execute([$filtro]);
        }
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
            </tr>";
        }
    ?>
</table>
    <?php    
    }

?>