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
        manejarSesion();
        $conn = conectarBBDD("personas");
        $stmt=$conn->query("show columns from persona");
        $stmt = $stmt->fetchAll(PDO::FETCH_ASSOC);

    ?>
    <form action="insertar.php" method="post">
        <?php
            foreach ($stmt as $campo) {
                if($campo['Field'] != 'id'){
                print "<p>$campo[Field]: <input type='text' name='$campo[Field]'</p>";
            }
            }
        ?>
        <p><input type="submit" value="Insertar" name="enviar"></p>
    </form>
    <?php
        if(isset($_GET["vacio"]) && $_GET["vacio"] == 1){
            manejarError("En el formulario de insercion hay algun campo vacio");
            print "<p class='error'>Hay algun campo vacio</p>";
        }
    ?>
</body>
</html>