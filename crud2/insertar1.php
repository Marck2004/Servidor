
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
         <h1>Repaso Marzo-Junio </h1>
    </div>
    <div class='menu'>
        <span>
            <a href='inicio.php'>Inicio</a>
        </span>
    </div>

    <form action='insertar2.php' method='post'>
        <p>Escriba los datos del nuevo registro</p>
        <br>
        <span>
        Nombre: <input type='text' name='nombreR'>
        </span>
        <span>
        Localidad: <input type='text' name='localidadR'>
        </span>
        <br>

        <input type='submit' value='Añadir'>
        <input type='reset' value='Reiniciar formulario'>

    </form>

";
}
?>