<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<?php include("../Funciones.php");
    
    if(isset($_REQUEST['Enviar'])){
        print $url = $_REQUEST['url'];
        sanear($url);    print $url;

        if(validar($url) == 1){
        
            header("location:Ejercicio1.php?error=1");
        }
        print $_REQUEST['error'];
        if(isset($_GET['error'])){
            print "<p style='color:red;'>Introdujo una URL no valida</p>";
        }

    if(validar($url) == 0){
        header('location: '.$_REQUEST['url']);
    }
    }
?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <p>Introduzca una direccion de sitio web</p>
    <p>(ej http://www.google.com) <input type="text" name="url" id="url"></p>
    <input type="submit" value="Enviar" name="Enviar">
    </form>
  
</body>
</html>