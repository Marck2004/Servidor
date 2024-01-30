<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("funciones.php");
        manejarSesion();
        $conn=conectarBBDD("personas");
        $stmt=$conn->query("show columns from persona");
        $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <form action="buscar.php" method="post">

    <?php
        foreach ($stmt as $campos) {
            print "<p>$campos[Field]<input type='text' name='$campos[Field]'></p>";
        }
    ?>
    <p><input type="submit" value="Buscar" name="enviar"></p>
    </form>

</body>
</html>