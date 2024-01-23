<style>
    table,th,tr,td{
        border:2px solid black;
    }
    .foto{
        width:50px;
        heigth:50px;
    }
</style>
<?php

    include("funciones.php");
    session_start();

    if(isset($_SESSION["usuario"])){

        $conexion = conectarBBD("marzo");

        ?>

        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        
        <p>Mostrar viviendas de tipo: <select name="tipo" id="tipo">
            <option value="todos">Todos</option>
            <option value="piso">piso</option>
            <option value="chalet">chalet</option>
            <option value="casa">casa</option>
            <option value="adosado">adosado</option>
        </select><input type="submit" value="actualizar" name="enviar"></p>
        </form>

        <?php
        $contar = $conexion->query("select * from viviendas");
        if($contar->rowCount() < 5){
        print "Mostrando viviendas de 1 a ".$contar->rowCount()." de un total de ".$contar->rowCount();
            }else{
                print "Mostrando viviendas de 1 a 5 de un total de ".$contar->rowCount().". 
                [ Anterior | <a href='listar.php?mas5=5'>Siguiente</a> ]";
            }

        if(isset($_POST["enviar"])){

            if($_POST["tipo"] == "todos"){
                $select = "select * from viviendas limit 5";

            $ejecutarSelect = $conexion->query($select);

            print "<table>";
            echo "<th>Tipo</th>
            <th>Zona</th>
            <th>Dormitorios</th>
            <th>Precio</th>
            <th>Tamaño</th>
            <th>Extras</th>
            <th>Foto</th>";
            foreach ($ejecutarSelect as $registro) {
                echo "<tr>
                <td>".$registro['tipo']."</td>
                <td>".$registro['zona']."</td>
                <td>".$registro['dormitorios']."</td>
                <td>".$registro['precio']."</td>
                <td>".$registro['tamaño']."</td>
                <td>".$registro['extras']."</td>
                <td><img src='imagenes/".$registro['foto']."' class='foto'></img></td>
                </tr>";
            }
            print "</table>";
            }else{
            $select = "select * from viviendas where tipo = ?";

            $ejecutarSelect = $conexion->prepare($select);
            $ejecutarSelect->execute([$_POST["tipo"]]);
            print "<table>";
            echo "<th>Tipo</th>
            <th>Zona</th>
            <th>Dormitorios</th>
            <th>Precio</th>
            <th>Tamaño</th>
            <th>Extras</th>
            <th>Foto</th>";
            foreach ($ejecutarSelect as $registro) {
                echo "<tr>
                <td>".$registro['tipo']."</td>
                <td>".$registro['zona']."</td>
                <td>".$registro['dormitorios']."</td>
                <td>".$registro['precio']."</td>
                <td>".$registro['tamaño']."</td>
                <td>".$registro['extras']."</td>
                <td><img src='imagenes/".$registro['foto']."' class='foto'></img></td>
                </tr>";
            }
            print "</table>";
        }
        }else{
            $select = "select * from viviendas limit 5";

            $ejecutarSelect = $conexion->query($select);

            print "<table>";
            echo "<th>Tipo</th>
            <th>Zona</th>
            <th>Dormitorios</th>
            <th>Precio</th>
            <th>Tamaño</th>
            <th>Extras</th>
            <th>Foto</th>";
            foreach ($ejecutarSelect as $registro) {
                echo "<tr>
                <td>".$registro['tipo']."</td>
                <td>".$registro['zona']."</td>
                <td>".$registro['dormitorios']."</td>
                <td>".$registro['precio']."</td>
                <td>".$registro['tamaño']."</td>
                <td>".$registro['extras']."</td>
                <td>".$registro['foto']."</td>
                </tr>";
            }
            print "</table>";
        }
        print "<p><a href='links.php'>Volver al formulario</a></p>";
    }else{
        header("location:index.php?error=1");
    }



?>