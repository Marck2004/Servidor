
    <?php
    include('funciones.php');
        if(isset($_REQUEST['enviar']) || (isset($_GET['parametro']) || $_GET['parametro'] == 1 )){

            $nombre = sanear('nombre');
            $clave = sanear('clave');

            $conexion = conectarBBDD("datos_empleados");

            try{
            $consulta = "select * from usuario where user = '$nombre' and pass='$clave'";

            $numeroFilas = $conexion -> query($consulta);


                if($numeroFilas->rowCount() == 1){

                    session_start();
                    $_SESSION['usuario'] = $nombre;
                    $_SESSION['clave'] = $clave;

                    
                    $nuevaBBDD = conectarServidor();

                    $conexion ->query("create database if not exists Agenda");

                        $conexion -> query("use Agenda");

                    $conexion ->query("create table if not exists personas(
                        id int auto_increment,
                        Nombre varchar(15) not null,
                        Apellido varchar(25) not null,
                        Direccion varchar(25) not null,
                        Tlf varchar(9) not null,
                        primary key(id))");

                       header("location:links.php");

                    }else{
                        header("location:index.php?error=1");
                        }
                }catch(PDOException $a){
                    print "<p>Error no se puede conectar con la bbdd por".$a->getMessage()."</p>";
                }
                
        }else{
            header("location:index.php");
        }
    

    ?>