<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

    if(isset($_SESSION["usuario"])){

        ?>
    <h1>MENU</h1>
        <ul>
            <li><a href="formInsertar.php">Insertar</a></li>
            <li><a href="formModif.php">Modificar</a></li>
            <li><a href="formBorrar.php">Borrar</a></li>
            <li><a href="formConsultar.php">Consultar</a></li>
            <li><a href="listarFich.php">Listar ficheros</a></li>
        </ul>

        <?php
    }else{
        header("Location:login.php?error=1");
    }
    ?>
</body>
</html>