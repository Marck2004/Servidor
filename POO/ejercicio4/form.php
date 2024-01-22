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
        class paginasWeb{
            private $listaWeb = array();
            public function añadirWeb(){
                $this->listaWeb = ["google","email","yahoo"];
            }
            public function mostrarVertical(){
                echo "VERICAL";
                foreach ($this->listaWeb as $webs) {
                    echo "<p><a href=#>$webs</a></p>";
                }
            }
            public function mostrarHorizontal(){
                echo "HORIZONTAL<br>";
                foreach ($this->listaWeb as $webs) {
                    echo "<a href=#>$webs</a>-";
                }
            }
        }
    ?>

    <?php

            $paginaWeb = new paginasWeb;
            $paginaWeb->añadirWeb();
            $paginaWeb->mostrarVertical();
            $paginaWeb->mostrarHorizontal();
        

    ?>
</body>
</html>