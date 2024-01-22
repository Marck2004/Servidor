<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        class Empleado{
            public $nombre;
            public $sueldo;

            public function inicializar(){
                $this->nombre = $_POST["nombre"];
                $this->sueldo = $_POST["sueldo"];
            }
            public function mostrarDatos(){
                echo "<p>Nombre introducido ".$this->nombre." </p>";
                if($this->sueldo > 3000){
                    echo "<p>Su sueldo es de ".$this->sueldo." por lo que debe pagar impuestos estas forrao</p>" ;
                }else{
                    echo "<p>Su sueldo es de ".$this->sueldo." por lo que no debe pagar impuestos eres un jodido pobre</p>" ;
                }
            }
        }
    ?>
    <form action="<? htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <p>Nombre:<input type="text" name="nombre" id="nombre"></p>
        <p>Sueldo:<input type="text" name="sueldo" id="sueldo"></p>
        <p><input type="submit" value="enviar" name="enviar"><input type="reset" value="reseteo"></p>
    </form>
    <?php

        if(isset($_POST["enviar"])){
            $empleado = new Empleado;
            $empleado->inicializar();
            $empleado->mostrarDatos();
        }

    ?>
</body>
</html>