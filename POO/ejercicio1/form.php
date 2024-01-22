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
class persona{
    public $nombre;
    
    public function setNombre(){
        $this->nombre = $_POST["nombre"]." es el nombre que ha sido introducido";
    }
    public function mostrarNombre(){
        echo $this->nombre;
    }

}
?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <p><input type="text" name="nombre" id="nombre"></p>
        <p><input type="submit" value="enviar" name="enviar"></p>
    </form>

    <?php
    if(isset($_POST["enviar"])){
        $persona = new persona;
        $persona->setNombre();
        $persona->mostrarNombre();
    }

?>
</body>
</html>