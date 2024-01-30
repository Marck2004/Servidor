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
                header("location:formInsertar.php?vacio=1");
            }else{
                $valores[] = $_POST[$campo['Field']];
                $interrogantes[] = '?'; 
                $campos[] = $campo['Field'];
            }
        }
        }
        
        $camposCadena = implode(",",$campos);
        $interrogantes = implode(",",$interrogantes);

        try{
        $stmt=$conn->prepare("insert into persona($camposCadena)
            values ($interrogantes)");

            $stmt->execute($valores);

            print "<p>Insercion realizada con exito</p>";
            print "<p><a href='links.php'>Volver al menu</a></p>";
        }catch(PDOException $e){
            print $e->getMessage();
        }

    }else{
        header("location:login.php?error=1");
    }
?>