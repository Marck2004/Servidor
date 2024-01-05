<?php
    include("funciones.php");
    session_start();

    if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

        /*if(empty($_REQUEST["nombre"]) ||
        empty($_REQUEST["apellido"]) ||
        empty($_REQUEST["direccion"]) ||
        empty($_REQUEST["tlf"])){

            if(empty($_REQUEST["nombre"])){
                $errorNombre = 'errorNombre=1&';
            }
            if(empty($_REQUEST["apellido"])){
                $errorApellido = 'errorApellido=1&';
            }
            if(empty($_REQUEST["direccion"])){
                $errorDireccion = 'errorDireccion=1&';
            }
            if(empty($_REQUEST["tlf"])){
                $errorTlf = 'errorTlf=1';
            }

            header("location:formInsertar.php?".$errorNombre.$errorApellido.$errorDireccion.$errorTlf);
        }else{

        $nombre = sanear('nombre');
        $apellido = sanear('apellido');
        $direccion = sanear('direccion');
        $tlf = sanear('tlf');*/

        $conexion = conectarBBDD("Agenda");

        $select = "select * from personas";
        $resultadoSelect = $conexion->query($select);

        $comprobarExistencia = "select * from personas where Tlf = ?";

        $selectComprobarExistencia = $conexion->prepare($comprobarExistencia);

        $selectComprobarExistencia->execute([$_REQUEST['Tlf']]);

            if($selectComprobarExistencia->rowCount() != 1){

            
        if($resultadoSelect ->rowCount() < 10 ){

            try{
                $mostrarColumnas = "show columns from personas";

                $resultado = $conexion->query($mostrarColumnas);

                $numColumnas = $resultado->rowCount();

                $marcadores = array_fill(0,$numColumnas,'?');
                unset($marcadores[0]);

                $textoMarcadores = implode(',',$marcadores);
                

                $nombreColumnas = array();

                while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
                    if($fila['Field'] != "id"){
                        $nombreColumnas[] = "$fila[Field]";
                    }
                }
                $textoNombreColumnas = implode(',',$nombreColumnas);

                $nombreColumnas = array_map(function($columna) {
                    return "'$columna'";
                }, $nombreColumnas);

        $consulta = "insert into personas ($textoNombreColumnas)
            values ($textoMarcadores)";
            
                $resultado = $conexion -> prepare($consulta);

                $textoInput = array();
                $ejecutarInsert = $conexion->query("show columns from personas
                 where Field != 'id'");
                
                while($resultadoInput = $ejecutarInsert->fetch(PDO::FETCH_ASSOC)){

                    $textoInput[] = $_REQUEST[$resultadoInput['Field']];
                    print $_REQUEST[$resultadoInput['Field']];
                }

                $resultado ->execute($textoInput);
                
                $listar = $conexion->query("show columns from personas");

                $imprimirResultado = $listar->fetchAll(PDO::FETCH_ASSOC);
                echo "<b>El registro : </b><br>";
                unset($imprimirResultado[0]);

                foreach ($imprimirResultado as $indice=>$valor) {
                    echo $valor['Field'] .": ".$_REQUEST[$valor['Field']]."<br>";
                }
                print "<b>Se ha creado con exito</b>";
                
                    print "<a href='links.php'>Volver al formulario</a>";

            }catch(PDOException $e){
                print "<p>Error al insertar en la bbdd ".$e->getMessage()."</p>";
            }
        }else{
            header("location:formInsertar.php?max=1");
        }
        }else{
            header("location:formInsertar.php?encontrado=1");
        }
        
        }
    //}
?>