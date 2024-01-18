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
            if(isset($_SESSION['usuario'])){
        ?>
<ul>
            <li><a href="listar.php">Listar matriculas</a></li>
            <li><a href="formInsertar.php">Insertar matricula</a></li>
            <li><a href="selectModif.php">Modificar matricula</a></li>
            <li><a href="formEliminar.php">Borrar matricula</a></li>
            <li><a href="listarFicheros.php">Listar Ficheros</a></li>
            </ul>
            <?php
            if(isset($_GET['existencia']) && $_GET['existencia'] == 1){
                print "<p style='color:red;'>No existe ese directorio</p>";
            }
            manejarError("No existe la sesion");
            header("location:index.php?sesion=1");
            }
            ?>
</body>
</html>