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

        $select = $conn->prepare("select * from persona where id = ?");
        $select->execute([$_POST["modificar"]]);
        $select = $select->fetch(PDO::FETCH_ASSOC);

    ?>
    <form action="modificar.php" method="post">

    <?php
        foreach ($stmt as $campos) {
            if($campos['Field'] != 'id'){
            print "<p>$campos[Field]<input type='text' name='$campos[Field]' value='".$select[$campos['Field']]."'></p>";
            }else{
                print "<input type='hidden' name='$campos[Field]' value='".$select[$campos['Field']]."'>";
            }
        }
    ?>
    <p><input type="submit" value="Buscar" name="enviar"></p>
    </form>

</body>
</html>