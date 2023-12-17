<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EXPRESIONES REGULARES</h1>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <p>Numero de telefono <input type="text" name="tlf" id="tlf"></p>
        <p>Nombre <input type="text" name="nombre" id="nombre"></p>
        <p>Calle <input type="text" name="calle" id="calle"></p>
        <p>Edad mayor de  18 menor de 80 <input type="text" name="edad" id="edad"></p>
        <p>Email<input type="text" name="email" id="email"></p>
        <p>Codigo Postal<input type="text" name="cp" id="cp"></p>
        <input type="submit" value="enviar" name="enviar">
    </form>

    <?php

        if(isset($_REQUEST['enviar'])){

            if(preg_match('/^\+34\d{9}$/',$_REQUEST['tlf'])){
            print "Numero de telefono: ".$_REQUEST['tlf'];
            }else{
                print "INCORECTO";
            }
        if(preg_match('/^([A-Z]{1}[a-z\s]+)([A-Z]{1}[a-z\s]+)?$/',$_REQUEST['nombre'])){
            print "<br>Nombre: ".$_REQUEST['nombre'];
        }else{
            print "<br>INCORRECTO";
        }
        if(preg_match('/^(Calle|Avenida|Plaza)\s[A-Za-z\sñ]+$/',$_REQUEST['calle'])){
            print "<br>Calle: ".$_REQUEST['calle'];
        }else{
            print "<br>INCORRECTO";
        }
        if($_REQUEST{'edad'} >= 18 && $_REQUEST['edad'] <= 80 && preg_match('/^\d{2}$/',$_REQUEST['edad'])){
            print "<br>Edad: ".$_REQUEST['edad'];
        }else{
            print "<br>INCORRECTO"; 
        }
        if(filter_var($_REQUEST['email'],FILTER_VALIDATE_EMAIL)){
            print "<br>Email: ".$_REQUEST['email'];
        }else{
            print "<br>INCORRECTO"; 
        }
        if(preg_match('/^\d{5}$/',$_REQUEST['cp'])){
            print "<br>Codigo Postal: ".$_REQUEST['cp'];
        }else{
            print "<br>INCORRECTO"; 
        }
        }

    ?>
</body>
</html>