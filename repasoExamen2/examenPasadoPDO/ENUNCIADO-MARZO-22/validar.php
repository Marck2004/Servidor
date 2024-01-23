
    <?php
        include("funciones.php");
        session_start();
        if(isset($_REQUEST["enviar"]) || isset($_SESSION["usuario"])){

            $conexion = conectarBBD("marzo");

            $nombre = sanear("nombre");
            $clave = sanear("clave");

            $sentencia = "select * from User where username = ? and passwd = ?";

            $ejecutarSentencia = $conexion->prepare($sentencia);

            $ejecutarSentencia->execute([$nombre,$clave]);

            if($ejecutarSentencia->rowCount() == 1){
                
                $conexion->query("create table if not exists viviendas(
                    id int auto_increment primary key not null,
                    tipo enum ('Piso','Chalet','Casa','Adosado') not null,
                    zona enum ('Centro','Nervion','Triana','Aljarafe','Macarena') not null,
                    direccion varchar(100) not null,
                    dormitorios int not null,
                    precio double not null,
                    tamaño double not null,
                    extras set('Piscina','Jardin','Garaje','Sauna'),
                    foto varchar(256)
                )");

                
                $_SESSION["usuario"] = $nombre;

                    header("location:links.php");
            }else{
                manejarError("Credenciales incorrectas");
                header("location:index.php?error=1");
            }

        }else{
            manejarError("No ha introducido credenciales");
            print "<p>Acceso no autorizado</p>";
            print "[ <a href='index.php'>Conectar</a> ]";
        }
    ?>