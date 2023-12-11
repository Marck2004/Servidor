<?php
    include("funciones.php");
        if(count($_REQUEST['enviar']) < 2){
    if(empty($_REQUEST['nombre']) || empty($_REQUEST['clave'])){
        if(empty($_REQUEST['nombre'])){
            $errorUser = 'errorUser=1&';
            escribirFich("El campo usuario esta vacio/erroneo");
        }
        if(empty($_REQUEST['clave'])){
            $errorClave = 'errorClave=1';
            escribirFich("El campo clave esta vacio/erroneo");
        }
        header("location:index.php?".$errorUser.$errorClave);
    }else{
        session_start();

        $_SESSION['usuario'] = htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])),ENT_QUOTES,"utf-8");
        $_SESSION['clave'] = htmlspecialchars(trim(strip_tags($_REQUEST['clave'])),ENT_QUOTES,"utf-8");

        setcookie('usuario', htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])),ENT_QUOTES,'utf-8'), time() + 8000, '/');
        setcookie('clave', htmlspecialchars(trim(strip_tags($_REQUEST['clave'])),ENT_QUOTES,'utf-8'), time() + 8000, '/')
        ;
        header("location:confirmar.php");
    }
}else{
    print "<p>TIENES QUE MARCAR SOLO UNA OPCION</p>";
}

?>