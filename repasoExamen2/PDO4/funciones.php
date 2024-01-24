<?php

    function conectarBBDD($bbdd){
        try{
            $conexion = new PDO("mysql:host=localhost;dbname=$bbdd;charset=utf8","root","");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
    }
    function conectarServidor(){
        try{
        $conexion = new PDO("mysql:host=localhost;charset=utf8","root","");
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $conexion;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    function manejarError($mensaje){
        $fichero = "errores.txt";

        if(!is_dir("errores")){
            mkdir("errores");
        }

        $mensaje = date("Y-m-m H:i:s") ." - ".$mensaje.PHP_EOL;
        
        error_log($mensaje,3,"errores/".$fichero);
    }
    function sanear($mensaje){
        return htmlspecialchars(trim(strip_tags($_REQUEST[$mensaje])),ENT_QUOTES,"utf-8");
    }

    function listar($stmt){
        ?>
        <table>
                    <th>DNI</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>DIRECCION</th>
                    <th>TELEFONO</th>
                    <th>FOTO</th>
        <?php
            foreach ($stmt as $valor) {
                echo "<tr>
                <td>".$valor['dni']."</td>
                <td>".$valor['nombre']."</td>
                <td>".$valor['apellido']."</td>
                <td>".$valor['direccion']."</td>
                <td>".$valor['telefono']."</td>
                <td><img src='imagenes/".$valor['foto']."'style='width:50px;heigth:50px;'></td>
                </tr>";
            }
        ?>
        </table>
        <?php
    }
?>