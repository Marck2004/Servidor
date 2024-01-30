<?php

    include("funciones.php");
    manejarSesion();

    if(isset($_POST["enviar"])){

        $conn = conectarBBDD("personas");
        $stmt=$conn->query("show columns from persona");
        $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);


        foreach ($stmt as $campo) {
            if($campo['Field'] != 'id'){
            if(empty($_POST[$campo['Field']])){
                header("location:formModif2.php?vacio=1");
            }else{
                $valores[] = $_POST[$campo['Field']];
                $campos[] = $campo['Field'].'= ?';
            }
        }else{
            $dni = $_POST[$campo['Field']];
        }
        }

        $valores[] = $dni;
        $campos = implode(",",$campos);

        $stmt=$conn->prepare("update persona set $campos where id = ?");
        $stmt->execute($valores);

        print "<p>Modificacion realizada con exito</p>";
        print "<p><a href='links.php'>Volver al menu</a></p>";
    }else{
        header("location:login.php?error=1");
    }
?>