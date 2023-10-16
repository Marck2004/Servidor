<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    
        <h1>Introduce datos de la vivienda</h1>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" enctype="multipart/form-data"> 
    
        <p>Tipo de vivienda: <select name="tipoVivienda" id="tipoVivienda">
            <option value="Piso">Piso</option>
            <option value="Chalet">Chalet</option>
            <option value="Mansion">Mansion</option>
        </select>
        </p>

        <p>Zona: <select name="zona" id="zona">
            <option value="Centro">Centro</option>
            <option value="Periferia">Periferia</option>
        </select>
    </p>

        <p>Direccion: <input type="text" name="Direccion" id="Direccion"></p>

        <p>Numero de dormitorios: 
        1<input type="radio" name="Dormitorio" id="Dormitorio1" value="1">
        2<input type="radio" name="Dormitorio" id="Dormitorio2" value="2">
        3<input type="radio" name="Dormitorio" id="Dormitorio3" value="3">
        4<input type="radio" name="Dormitorio" id="Dormitorio4" value="4">
        5<input type="radio" name="Dormitorio" id="Dormitorio5" value="5"></p>
    
            <p>Precio: <input type="number" name="Precio" id="Precio">$$</p>
            <p>Tamaño: <input type="number" name="metros" id="metros"> metros cuadrados</p>

            <p>Extras: 
            piscina<input type="checkbox" name="piscina" id="piscina" value="piscina">
            jardin<input type="checkbox" name="jardin" id="jardin" value="jardin">
            garaje<input type="checkbox" name="garaje" id="garaje" value="garaje">
        </p>


        <p>Foto: <input type="file" name="Foto" id="Foto"></p>
        <p>Observaciones: <textarea name="Obs" id="Obs" cols="15" rows="10"></textarea></p>
    
            <p><input type="submit" name="insertar" value="Insertar vivienda"></p>
    </form>

  <?php
        if(isset($_REQUEST['tipoVivienda'])){
            print "<p>Opcion seleccionada: ".htmlspecialchars(trim(strip_tags($_REQUEST['tipoVivienda'])),ENT_QUOTES,'utf-8')."</p>";
        }else{
            print "<p style='color:red'>La opcion seleccionada no es valida</p>";
        }
        if(isset($_REQUEST['zona'])){
            print "<p>Opcion seleccionada: ".htmlspecialchars(trim(strip_tags($_REQUEST['zona'])),ENT_QUOTES,'utf-8')."</p>";
        }else{
            print "<p style='color:red'>Zona no seleccionada</p>";
        }

        if(!empty($_REQUEST['Direccion'])){
            print "<p>Direccion seleccionada: ".htmlspecialchars(trim(strip_tags($_REQUEST['Direccion'])),ENT_QUOTES,'utf-8')."</p>";
        }else{
            print "<p style='color:red'>Direccion no valida</p>";
        }

        if(isset($_REQUEST['Dormitorio'])){
            print "<p>Dormitorios escogidos: ".htmlspecialchars(trim(strip_tags($_REQUEST['Dormitorio'])),ENT_QUOTES,'utf-8')."</p>";
        }else{
            print "<p style='color:red'>Debe seleccionar almenos un dormitorio</p>";
        }

        if(isset($_REQUEST['Precio'])){
            if(is_numeric($_REQUEST['Precio'])){
                print "<p>Coste de: ".htmlspecialchars(trim(strip_tags($_REQUEST['Precio'])),ENT_QUOTES,'utf-8')." $$</p>";
            }else{
                print "<p style='color:red'>Campo vacio rellenelo</p>";
            }
        }
        if(isset($_REQUEST['metros'])){
            if(is_numeric($_REQUEST['metros'])){
                print "<p>Tamaño de: ".htmlspecialchars(trim(strip_tags($_REQUEST['metros'])),ENT_QUOTES,'utf-8')." metros</p>";
            }else{
                print "<p style='color:red'>Campo vacio rellenelo</p>";
            }
        }

        if(isset($_REQUEST['piscina'])){
            print "<p>Extra: ".htmlspecialchars(trim(strip_tags($_REQUEST['piscina'])),ENT_QUOTES,'utf-8')."</p>";
        }else{
            print "<p>No quiere extras ".$_REQUEST['piscina']."</p>";
        }
        if(isset($_REQUEST['jardin'])){
            print "<p>Extra: ".htmlspecialchars(trim(strip_tags($_REQUEST['jardin'])),ENT_QUOTES,'utf-8')."</p>";
        }else{
            print "<p>No quiere extras ".$_REQUEST['jardin']."</p>";
        }
        if(isset($_REQUEST['garaje'])){
            print "<p>Extra: ".htmlspecialchars(trim(strip_tags($_REQUEST['garaje'])),ENT_QUOTES,'utf-8')."</p>";
        }else{
            print "<p>No quiere extras ".$_REQUEST['garaje']."</p>";
        }

        if(isset($_REQUEST['Obs'])){
            print "<p>La observacion es: ".htmlspecialchars(trim(strip_tags($_REQUEST['Obs'])),ENT_QUOTES,'utf-8')."</p>";
        }else{
            print "<p>No ha insertado nada en la observacion</p>";
        }

        if(isset($_REQUEST['insertar'])){
            if(is_uploaded_file($_FILES['Foto']['tmp_name'])){
                $directorio = "Pisos/";
                $fichero = $_FILES['Foto']['name'];
                $nombrecompleto = $directorio.$fichero;
            move_uploaded_file($_FILES['Foto']['tmp_name'],$nombrecompleto);
                print "<p>La casa solicitada es: </p><img src=".$nombrecompleto.">";
            }else{
                print "<p style='color:red'>No existe la foto o ha tenido problemas de carga</p>";
            }
        }

    ?>

</body>
</html>