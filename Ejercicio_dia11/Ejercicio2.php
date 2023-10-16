<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
        <h1>INSERTAR NUEVA NOTICIA</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data">
    <ul>
        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size;?>">

        <p>Titulo:* <input type="text" name="Titulo" id="Titulo"></p>
        <p>Texto:* <textarea name="Texto" id="Texto" cols="10" rows="5"></textarea></p>
        <p>Categoria: <select name="Categorias" id="Categorias">
            <option value="Terror">Terror</option>
            <option value="Accion">Accion</option>
            <option value="Humor">Humor</option>
        </select>
        </p>
        <p>Imagen: <input type="file" name="Imagen" id="Imagen"></p>
        <p><input type="submit" name="Enviar" value="Enviar"><input type="reset" value="Cancelar"></p>
    </form>

    <?php
        if(!empty($_REQUEST['Titulo'])){
            print "<li><p>".htmlspecialchars(trim(strip_tags($_REQUEST['Titulo'])),ENT_QUOTES,'utf-8')."</p></li>";
        }else{
            print "<li><p style='color:red'>La cadena 'Titulo' esta vacia</p></li>";
        }
        if(!empty($_REQUEST['Texto'])){
            print "<li><p>".htmlspecialchars(trim(strip_tags($_REQUEST['Texto'])),ENT_QUOTES,'utf-8')."</p></li>";
        }else{
            print "<li><p style='color:red'>La cadena 'Texto' esta vacia</p></li>";
        }
        if(isset($_REQUEST['Categorias'])){
            print "<li><p>Categoria: ".htmlspecialchars(trim(strip_tags($_REQUEST['Categorias'])),ENT_QUOTES,'utf-8')."</p></li>";
        }

        if(isset($_REQUEST['Enviar'])){
            if(is_uploaded_file($_FILES['Imagen']['tmp_name'])){
                $directorio = "imagenesPeliculas/";
                $fichero = $_FILES['Imagen']['name'];
                $nombreCompleto = $directorio.$fichero;

                move_uploaded_file($_FILES['Imagen']['tmp_name'],$nombreCompleto);
                print "<p><li>Imagen: ".$nombreCompleto."</li></p>";
            }else{
                print "<li><p style='color:red'>No se sabe el nombre de la pelicula</p></li>";
            }
        }
    ?>
    </ul>
    <p><a href="Ejercicio1.php">Insertar otra noticia</a></p>
</body>
</html>