<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class cabeceraPagina{
            private $titulo;
            private $position;

            public function mostrarTitulo(){
                $this->titulo = $_POST["titulo"];
                $this->position = $_POST["posicion"];

                echo "<h1 style='text-align:$this->position'>$this->titulo</h1>";
            }
        }

    ?>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <p>Titulo: <input type="text" name="titulo" id="titulo">
        Posicion: <input type="text" name="posicion" id="posicion"></p>
        <p><input type="submit" value="enviar" name="enviar"><input type="reset" value="borrar"></p>
    </form>

    <?php

        if(isset($_POST["enviar"])){
            $posicion = new cabeceraPagina;
            $posicion->mostrarTitulo();
        }

    ?>
</body>
</html>