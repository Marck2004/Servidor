<?php
    print "<a href='index.php'>Pagina inicial</a>";

?>

    <form action="confirmBorrado.php" method="post">
        <p>¿Desea eliminar los datos?</p>
        <input type="submit" value="Si" name="eliminar">
        <input type="submit" value="No" name="paginaInicial">
    </form>