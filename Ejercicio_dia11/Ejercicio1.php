<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Datos Personales:</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size;?>">
    <p>Nombre: <input type="text" name="Nombre" id="Nombre" >
    Apellido: <input type="text" name="Apellido" id="Apellido">
    </p>

        <p>Edad:<input type="number" name="edad" id="edad"></p>
        <p>Telefono: <input type="number" name="tlf" id="tlf"></p>
        <p>Email: <input type="email" name="email" id="email"></p>
        <p><input type="file" name="imagen" id="imagen"></p>
        <input type="submit" name="Enviar" value="Enviar"><input type="reset" value="Cancelar">
        </form>
        
        <?php
        if(isset($_REQUEST['Nombre'])){
            if(preg_match('/^[A-Za-z]+$/',$_REQUEST['Nombre'])){
                print "<p>El nombre introducido es: ".htmlspecialchars(trim(strip_tags( $_REQUEST['Nombre'])),ENT_QUOTES,'utf-8')."</p>";
            }else{
                print "<p style='color:red'>El campo nombre esta vacio o contiene numeros</p>";
            }
        }
        if(isset($_REQUEST['Apellido'])){
            if(preg_match('/^[A-Za-z]+$/',$_REQUEST['Apellido'])){
                print "<p>El nombre introducido es: ".htmlspecialchars(trim(strip_tags( $_REQUEST['Apellido'])),ENT_QUOTES,'utf-8')."</p>";
            }else{
                print "<p style='color:red'>El campo apellido esta vacio o contiene numeros</p>";
            }
        }
        if(isset($_REQUEST['edad'])){
            if(preg_match('/^[1-9][0-9]$/',$_REQUEST['edad'])){
                print "<p>La edad introducida es: ".htmlspecialchars(trim(strip_tags($_REQUEST['edad'])),ENT_QUOTES,'utf-8')."</p>";
            }else{
                print "<p style='color:red'>El campo edad es incorrecto</p>";
            }
        }
        if(isset($_REQUEST['email'])){
            if(preg_match('/^[A-Za-z%-&·()]+@gmail.com$/',$_REQUEST['email'])){
                print "<p>El email es: ".htmlspecialchars(trim(strip_tags($_REQUEST['email'])),ENT_QUOTES,'utf-8')."</p>";
            }else{
                print "<p style='color:red'>El campo email es incorrecto</p>";
            }
        }
        if(isset($_REQUEST['tlf'])){
            if(preg_match('/^\d{9}$/',$_REQUEST['tlf'])){
                print "<p>Telefono: ".htmlspecialchars(trim(strip_tags( $_REQUEST['tlf'])),ENT_QUOTES,'utf-8')."</p>";
            }else{
                print "<p style='color:red'>El telefono debe contener nueve numeros</p>";
            }
        }

    if(isset($_REQUEST['Enviar'])){
        if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
            $nombreDirectorio = "img/";
            $nombreFichero = $_FILES['imagen']['name'];
            $nombreCompleto = $nombreDirectorio.$nombreFichero;
        
            move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreCompleto);
            print "<img src=$nombreCompleto>";
    }else{
        print "<p style='color:red'>NO SE HA SUBIDO LA IMAGEN</p>";
    }
    }
    
        ?>
</body>
</html>
