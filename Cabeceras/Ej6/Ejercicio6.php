<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    
    <?php
$leer = file("tabla.txt");

print "<table style='background-Color:#f4e664'><tbody><th style='background-Color:purple;'>Nombre</th>
<th style='background-Color:purple;'>Destino</th>
<th style='background-Color:purple;'>Duracion</th>
<th style='background-Color:purple;'>Salida</th>";
foreach ($leer as $Indice => $valor) {
    $contenido = explode(":",$valor);
    print "<tr>";
    foreach ($contenido as $key => $value) {
        print "<td>".$value."</td>";
    }
    print "</tr>";
}
print "</tbody></table>";
    ?>

    <form action="validar.php" method="post">
    <p>Introduzca nombre del circuito: <input type="text" name="Nombre" id="Nombre">
    <?php if(isset($_GET['error1']) && $_GET['error1'] == 1){
        print "<p style='color:red;'>Cadena vacia o caracteres no aceptados</p>";
    }?>
</p>
    <p>Introduzca el destino: <input type="text" name="Destino" id="Destino">
    <?php if(isset($_GET['error2']) && $_GET['error2'] == 2){
        print "<p style='color:red;'>Cadena vacia o caracteres no aceptados</p>";
    }?></p>
    <p>Introduzca la duracion: <input type="text" name="Duracion" id="Duracion">
    <?php if(isset($_GET['error3']) && $_GET['error3'] == 3){
        print "<p style='color:red;'>Cadena vacia o caracteres no aceptados</p>";
    }?></p>
    <p>Introduzca los dias de salida: <input type="text" name="DiaSemana" id="DiaSemana">
    <?php if(isset($_GET['error4']) && $_GET['error4'] == 4){
        print "<p style='color:red;'>Cadena vacia o caracteres no aceptados</p>";
    }?></p>
    <p><input type="submit" value="Enviar"></p>
    </form>
</body>
</html>