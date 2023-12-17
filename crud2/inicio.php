
<?php
include 'funciones2.php';
colorear();

session_start();
$_SESSION['dentro']=200;


print "
    <div class='titulo'>
        <h1>Repaso Marzo-Junio </h1>
    </div>
    <div class='menu'>
        <span>
            <a href='conectar.php'> Conectar a la BBDD</a>
            <a href='insertar1.php'> Añadir registro </a>
            <a href='modificar1.php'> Modificar Registro </a>
            <a href='borrar1.php'> Borrar Registro </a>
			<a href='buscar1.php'> Buscar registro</a>
			<a href='borrartodo1.php'> borrar todo</a>
            
        </span>
    </div>
    <h3> Práctica BBDD Mysqli </h3>
";
?>