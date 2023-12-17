<?php
 function borrarId($conn, $id) {
        $consulta = mysqli_query($conn, 'DELETE FROM personas WHERE Id = "'.$id.'"');
        if ($consulta != true) {
            return mysqli_connect_errno(). ' ' .mysqli_connect_error();
        }
    }

    function mostrarTablaCheck($conn) {
        $consulta = mysqli_query($conn, 'SELECT * FROM personas');
        if ($consulta != true) {
            return mysqli_connect_errno(). ' ' .mysqli_connect_error();
        }
        echo '<table cellspacing="0" cellpading="3">';
        echo '<tr>';
    
        $array = mysqli_fetch_assoc($consulta) or die ('No se pudo leer los datos');
        foreach ($array as $indice => $valor) {
            if ($indice == 'Id') {
                echo '<td>Borrar</td>';
            }
            echo '<td><b>'.$indice.'</b></td>';
        }
        echo '</tr>';
        for ($i = 0; $i < count($array); $i++) {
            echo '<tr>';
            foreach ($array as $indice => $valor) {
                if ($indice == 'Id') {
                    echo '<td><input type="checkbox" name="check[]" value="'.$valor.'" id=""></td>';
                }
                echo '<td>'.$valor.'</td>';
            }
            $array = mysqli_fetch_assoc($consulta);
            if (!is_array($array)) break;
            echo '</tr>';
        }
         echo '</table>';
    }

    function mostrarTabla($conn) {
        $consulta = mysqli_query($conn, 'SELECT * FROM personas');
        if ($consulta != true) {
            return mysqli_connect_errno(). ' ' .mysqli_connect_error();
        }

        echo '<table cellspacing="0" cellpading="3">';
        echo '<tr>';
        $array = mysqli_fetch_assoc($consulta) or die ('No se pudo leer los datos');
        foreach ($array as $indice => $valor) {
            echo '<td><b>'.$indice.'</b></td>';
        }
        echo '</tr>';
        for ($i = 0; $i < count($array); $i++) {
            echo '<tr>';
            foreach ($array as $indice => $valor) {
                echo '<td>'.$valor.'</td>';
            }
            $array = mysqli_fetch_assoc($consulta);
            if (!is_array($array)) break;
            echo '</tr>';
        }
         echo '</table>';
    }

    function insertarDatos($conn, $nombre,$lugar,$fecha,$direccion,$telefono,$puesto) {
        $consulta = mysqli_query($conn, 'INSERT INTO personas (nombre,lugar_nacimiento, fecha_nacimiento, direccion, telefono, puesto) 
		VALUES ("'.$nombre.'", "'.$lugar.'" , "'.$fecha.'", "'.$direccion.'", "'.$telefono.'", "'.$puesto.'")');
        if ($consulta == true) {
			print 'bien';
            return $consulta;
        } else {
            return mysqli_connect_errno(). ' ' .mysqli_connect_error();
        }
    }

    function consultarRegistro($conn, $sql) {
        $consulta = mysqli_query($conn, $sql);
        if ($consulta == true) {
            return $consulta;
        } else {
            return mysqli_connect_errno(). ' ' .mysqli_connect_error();
        }
    }

    function conectarDDBB($db) {
        $conexion = mysqli_connect('localhost', 'root', '', $db);
        if ($conexion == true) {
            return $conexion;
        } else {
            return mysqli_connect_errno(). ' ' .mysqli_connect_error();
        }
    }

    function conectarServidor() {
        $conexion = mysqli_connect('localhost', 'root', '');
        if ($conexion == true) {
            return $conexion;
        } else {
            return mysqli_connect_errno(). ' ' .mysqli_connect_error();
        }
    }

    function sentenciasBBDD($conn, $sql) {
        $consulta = mysqli_query($conn, $sql);
        if ($consulta != true) {
            return mysqli_error($conn);
        }else
		return $consulta;
    }

    function consultarLogin($conn, $user, $pass) {
        $consulta = mysqli_query($conn, 'SELECT * FROM usuario WHERE (user = "'.$user.'") AND (pass = "'.$pass.'")');
        if ($consulta == true) {
            return $consulta;
        } else {
            return mysqli_error($conn);
        }
    }

    function conectarBBDDLogin() {
        $conexion = mysqli_connect('localhost', 'root', '', 'datos_empleados');
		
        if ($conexion == true) {
			echo 'conectAda';
            return $conexion;
        } else {
            return mysqli_connect_errno(). ' ' .mysqli_connect_error();
        }
    }
	function conectar() {
	 $conn = conectarServidor();

		$sql1 = 'CREATE DATABASE IF NOT EXISTS datos_empleados';
		$sql2 = 'USE datos_empleados';
		$sql3='CREATE TABLE IF NOT EXISTS usuario (
			user VARCHAR(20) NOT NULL,
			pass  VARCHAR(20) NOT NULL,
			email  VARCHAR(20) NOT NULL,
			PRIMARY KEY (user)
		)';
		$sql4 = 'CREATE TABLE IF NOT EXISTS personas (
			Id INT NOT NULL AUTO_INCREMENT,
			Nombre VARCHAR(20) NOT NULL,
			Lugar_Nacimiento VARCHAR(20) NOT NULL,
			Fecha_Nacimiento varchar(20) NOT NULL,
			direccion VARCHAR(20) NOT NULL,
			telefono VARCHAR(20) NOT NULL,
			puesto   VARCHAR(20)  NOT NULL,
			PRIMARY KEY (Id)
		)';
    echo ' base de datos hecha ';	
    sentenciasBBDD($conn, $sql1);
    sentenciasBBDD($conn, $sql2);
    sentenciasBBDD($conn, $sql3);
	$ver=sentenciasBBDD($conn, $sql4);
	$sql5='select * from usuario';
	$resultado=sentenciasBBDD($conn, $sql5);
	$sql6="insert into usuario values('User1', 'admin1', 'user1@gmail.com'),
										('User2', 'admin2', 'user2@gmail.com')";
	$resultado=mysqli_num_rows($resultado);
	echo $resultado.'select usuario';
	if ( $resultado==0){
		$insert=sentenciasBBDD($conn, $sql6);
	}
	
	mysqli_close($conn);}
	
	function validarTfn($var)
	{		if(preg_match( '/^([91|6][0-9]){9}$/',$var))
		{return $var;}
		else { $var='';return $var;}
	}
	
	function validarTexto($var)
	{
		if(preg_match( '/^[A-Z][a-z]+$/',$var))
		{return $var;}
		else { $var='';return $var;}
	}
	function validarDireccion($var)
	{
		if(preg_match( '/^[Calle|Avenida|Plaza](\s[A-Z][a-z]+\s*)+[0-9]{3}]$/',$var))
		{return $var;}
		else { $var='';return $var;}
	}
	function sanear($var){
        $resultado=(isset($var))
            ? htmlspecialchars(trim(strip_tags($var)))
            : "";
        return $resultado;
    }

    define('REGISTROS_MAX', 5);
	
?>