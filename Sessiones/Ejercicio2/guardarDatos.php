<?php
    session_start();

    $_SESSION['contador'] = $_SESSION['contador']+ 1;
    
    print "<p>Recogeremos aquí más datos, los cuales serán almacenados en toda la sesión</p>";

    print "<p>Has recorrido o recargado ".$_SESSION['contador']." hasta ahora</p>";
?>