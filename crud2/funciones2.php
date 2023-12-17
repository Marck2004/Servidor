
<?php
function colorear()
{
    print "
        <style>
        *{
            margin:0px;
            padding:0px 
        }
        body{
            background:antiquewhite; 
        }
        body>*{
            padding:15px 25px ;
        }
        div{
            color:white;
        }
        a:visited, a{
            color:white;
            text-decoration: none;
        }
        .titulo{
            background:chocolate;   

        }
        .menu{
            background:peru;  
        }
        span{
            display:flex;
            flex-c
        }
        table,td,th{
            padding: 5px 15px;
            border:solid black 1px;
        }
        table{
            margin: 15px 25px ;
            padding: 0px;
        }
        </style>
        ";
}

function conectarMysql($server)
{
    //CONECTAR MYSQL
    $conexion = mysqli_connect($server, "root", "") or die("<p>No se ha podido conectar al servidor</p>");
    if (isset($conexion)) {
       // print "<p>Conexion al servidor \"$server\" realizada</p>";
        return $conexion;
    }
}

//function conectarBD($conexion, $BD, )
function conectarBD($conexion, $BD)
{
    //CONECTAR A LA BASE DE DATOS
    $base = mysqli_select_db($conexion, $BD) or die("<p>No se ha podido conectar a la base de datos</p>");
    if (isset($base)) {
       print "<p>Conexion a la base de datos \"$BD\"  realizada</p>";
    }
}

function crearBD($conexion, $BD)
{
    $crear = "CREATE DATABASE IF NOT EXISTS $BD";
    $usar = "USE $BD";

    mysqli_query($conexion, $crear);
    mysqli_query($conexion, $usar);
}

function borrarBD($conexion, $BD)
{
    $borrar = "DROP DATABASE IF EXISTS $BD";
    mysqli_query($conexion, $borrar);
}


function query($conexion, $sentencia)
{
    $query = mysqli_query($conexion, $sentencia) or die("<p>No ha podido realizarse la accion</p>");

    return $query;
}

function crearMatriz($Pconsulta)
{
    $numRegistros = mysqli_num_rows($Pconsulta);
    $tabla = array();

    for ($i = 0; $i < $numRegistros; $i++) {
        $Aconsulta = mysqli_fetch_array($Pconsulta);
        array_push($tabla, $Aconsulta);
    }
    return $tabla;
}

function imprimirTabla($matriz)
{
    print "<table>";
    foreach ($matriz as $fila => $vector) {
        print "<tr>";
        foreach ($vector as $registro => $valor) {
            if (!is_numeric($registro)) {
                print "<th>$registro</th>";
            }
        }
        print "</tr>";
        break;
    }
    foreach ($matriz as $fila => $vector) {
        print "<tr>";
        foreach ($vector as $registro => $valor) {
            if (!is_numeric($registro)) {
                print "<td>$valor</td>";
            }
        }
        print "</tr>";
    }
    print "</table>";
}

function checkRegistro($matriz)
{
    foreach ($matriz as $fila => &$vector) {
        $id=$vector['ID'];
        $borrador = array('Borrar' => "<input type='checkbox' name='eliminar[]' value='$id' id='identificador$id'><label for='identificador$id'> ID:$id</label>");
        $vector = $borrador + $vector;
    }
    return $matriz;
}

function radioRegistro($matriz){
    foreach ($matriz as $fila => &$vector) {
        $id=$vector['ID'];
        $modificado = array('Modificar' => "<input type='radio' name='marcado' value='$id'>");
        $vector = $modificado + $vector;
    }
    return $matriz;
}

?>