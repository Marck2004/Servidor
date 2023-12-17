<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Datos</title>
</head>
<body>

    <form action="insertar.php" method="post">
        <p>Codigo</p>
        <input type="text" name="codigo" id="codigo" disabled>
        
        <p>Nombres</p>
        <input type="text" name="nombre" id="nombre">
        <?php

        if(isset($_GET['nom']) && $_GET['nom'] == 1){
            print "<p style='color:red'>Campo vacio/erroneo</p>";
        } 
        
        ?>
        <p>Lugar de nacimiento</p>
        <input type="text" name="lugarNac" id="lugarNac">
        <?php
        
        if(isset($_GET['lug']) && $_GET['lug'] == 1){
            print "<p style='color:red'>Campo vacio/erroneo</p>";
       }         
        ?>
        <p>Fecha de Nacimiento</p>
        <input type="text" name="fechaNac" id="fechaNac">
        <?php
        
        if(isset($_GET['fec']) && $_GET['fec'] == 1){
            print "<p style='color:red'>Campo vacio/erroneo</p>";
       }         
        ?>
        <p>Direccion</p>
        <input type="text" name="direccion" id="direccion">
        <?php
        if(isset($_GET['dir']) && $_GET['dir'] == 1){
            print "<p style='color:red'>Campo vacio/erroneo</p>";
       } 
           
        
        ?>
        <p>Telefono</p>
        <input type="text" name="telefono" id="telefono">
        <?php
        if(isset($_GET['tlf']) && $_GET['tlf'] == 1){
            print "<p style='color:red'>Campo vacio/erroneo</p>";
       } 
          
        
        ?>
        <p>Puesto</p>
        <input type="text" name="puesto" id="puesto">
        <?php
        if(isset($_GET['pue']) && $_GET['pue'] == 1){
            print "<p style='color:red'>Campo vacio/erroneo</p>";
       } 
           
        
        ?>
        <p>Estado</p>
        
        <select name="estado" id="estado">
            <option value="-----">-------</option>
            <option value="contratado">Contratado</option>
            <option value="outsorcing">Outsorcing</option>
            <option value="fijo">Fijo</option>
        </select>
        <?php
        if(isset($_GET['est']) && $_GET['est'] == 1){
            print "<p style='color:red'>Campo vacio/erroneo</p>";
       } 
           
        
        ?>
        <p><input type="submit" value="Guardar datos" name="enviar">
        <input type="reset" value="Cancelar"></p>

    </form>

</body>
</html>