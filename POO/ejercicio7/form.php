<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class persona{
            private $nombre;
            private $edad;

            public function setAttributes(){
                $this->nombre = $_POST["nombre"]." ".$_POST["apellido"];
                $this->edad = $_POST["edad"];
            }
            public function mostrarNombre(){
                echo $this->nombre;
            }
            public function comprobarMayorEdad(){
                if($this->edad >= 18){
                    echo " es mayor de edad";
                }else{
                    echo " es menor de edad";
                }
            }
        }
    ?>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        
        <p>Nombre: <input type="text" name="nombre" id="nombre">
        Apellido: <input type="text" name="apellido" id="apellido">
        Apellido: <input type="text" name="edad" id="edad"></p>
        <p><input type="submit" value="enviar" name="enviar"></p>
    </form>

    <?php

        if(isset($_POST["enviar"])){

            $persona = new persona;
            $persona->setAttributes();
            $persona->mostrarNombre();
            $persona->comprobarMayorEdad();
        }

    ?>
</body>
</html>