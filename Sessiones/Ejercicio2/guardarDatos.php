<?php
    session_start();

    $_SESSION['contador'] = $_SESSION['contador']+ 1;
    
    print "<p>Recogeremos aquí más datos, los cuales serán almacenados en toda la sesión</p>";

    print "<p>Has recorrido o recargado ".$_SESSION['contador']." hasta ahora</p>";
?>

    <form action="mostrarDatos.php" method="post">
    <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
    <p>Ciudad: <input type="text" name="ciudad" id="ciudad"></p>
    <p>Email: <input type="text" name="email" id="email"></p>
    <p>Telefono: <input type="text" name="telefono" id="telefono"></p>
    <p>Signo del Zodiaco: <select name="zodiaco" id="zodiaco">
    <option value="Escorpio">Escorpio</option>
    <option value="Libra">Libra</option>
    <option value="Sagitario">Sagitario</option>
    <option value="Capricornio">Capricornio</option>
    <option value="Piscis">Piscis</option>
    <option value="Acuario">Acuario</option>
    <option value="Tauro">Tauro</option>
    <option value="Aries">Aries</option>
    <option value="Leo">Leo</option>
    <option value="Cancer">Cancer</option>
    <option value="Geminis">Geminis</option>
    <option value="Virgo">Virgo</option>
        </select>
    </p>
    <input type="submit" value="enviar">
    </form>

    <h3>Datos recogidos</h3>

    <p>Contar: <?php $_SESSION['contador'] ?></p>

    <p>Pagina 1: <a href="Contador.php?iniciar=0">Reiniciar contador o sesion</a></p>
    <p>Pagina 3: <a href="mostrarDatos.php">Datos de la sesion</a></p>


