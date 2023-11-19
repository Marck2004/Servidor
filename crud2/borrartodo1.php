    
<?php
include 'funciones2.php';
colorear();

session_start();
if ($_SESSION['dentro'] != 200) {
    header("Location:inicio.php");
    exit;
} else {
    
    print "
    <div class='titulo'>
        <h1 > BASES DE DATOS 3 - BORRAR TODO 1</h1>
    </div>
    <div class='menu'>
        <span>
            <a href='inicio.php'>Inicio</a>
        </span>
    </div>

    <form action='borrartodo2.php' method='post'>
        <p>¿Estas seguro?</p>
        <br>
        <input type='submit' name ='si' value='Si'>
        <input type='submit' name ='no' value='No'>

    </form>

";
}
?>    
