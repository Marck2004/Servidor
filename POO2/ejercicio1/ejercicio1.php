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

    class usuario{
        protected static $login;
        protected static $password;

        public function __construct(){
            self::$login = $_POST["nombre"];
            self::$password = $_POST["clave"];

            echo "<p>El login de usuario es ".usuario::$login."</p>
                <p>El password del usuario es: ".usuario::$password."</p>
                <p>He destruido el usuario introducido ".usuario::$login." y me voy</p>";
        
        } 

        /*public function setNames(){
            $this->login = $_POST["nombre"];
            $this->password = $_POST["clave"];
        }
        public function getNames(){
            echo "<p>El login de usuario es ".$this->login."</p>
                <p>El password del usuario es: ".$this->password."</p>
                <p>He destruido el usuario introducido ".$this->login." y me voy</p>";
        }*/
    }
    
    ?>
    <section style='border:2px solid black'>
    <p>Datos de usuario</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <p>Login: <input type="text" name="nombre" id="nombre">
    Password: <input type="text" name="clave" id="clave"></p>
    <input type="submit" value="enviar" name="enviar">
        </form>
    </section>
    <?php
        if(isset($_POST["enviar"])){
            $usuarioNuevo = new usuario();
        }
    ?>
</body>
</html>