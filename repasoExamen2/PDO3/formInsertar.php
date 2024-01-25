<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        include("funciones.php");
        comprobarSesion();
        $conn = conectarBBDD("Matricula2");
        $stmt = $conn->query("show columns from matriculas");
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);

    ?>  
    <form action="insertar.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
    <?php
        foreach ($stmt as $campo) {
            if($campo["Field"] == "foto"){
                print "<p>".$campo['Field'].": <input type='file' name='foto'></p>";

                if(isset($_GET["valorPHP"]) && $_GET["valorPHP"] == 1){
                    capturarError("Supera la capacidad de PHP.ini");
                    print "<p class='error'>Supera la capacidad de PHP.ini</p>";
                }
                if(isset($_GET["valorForm"]) && $_GET["valorForm"] == 1){
                    capturarError("Supera la capacidad del formulario");
                    print "<p class='error'>Supera la capacidad del formulario</p>";
                }
            }else{
                print "<p>".$campo['Field'].": <input type='text' name='$campo[Field]'></p>";
            } 
            if(isset($_GET['error'.$campo["Field"]]) && $_GET["error".$campo['Field']] == 1){
                capturarError("campo vacio");
                print "<p class='error'>Campo ". $campo['Field']." vacio</p>";
            }
        }
    ?>
    <input type="submit" value="Insertar" name="enviar">
    </form>

</body>
</html>