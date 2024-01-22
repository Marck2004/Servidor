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

        class fecha{
            private $dia;
            private $mes;
            private $año;
            
            public function verFecha(){
                $this->dia = $_POST["dia"];
                $this->mes = $_POST["mes"];
                $this->año = $_POST["año"];

                echo $this->dia."/".$this->mes."/".$this->año;
            }
        }

    ?>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <p>Dia: <input type="text" name="dia" id="dia">
        Mes: <input type="text" name="mes" id="mes">
        Año: <input type="text" name="año" id="año"></p>
        <p><input type="submit" value="enviar" name="enviar"><input type="reset" value="cancelar"></p>
    </form>
    <?php

        if(isset($_POST["enviar"])){
            $fecha = new fecha;
            $fecha->verFecha();
        }

    ?>
</body>
</html>