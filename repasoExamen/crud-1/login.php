<?php
    session_start();
	 include 'funciones.php';
	conectar();

    if(isset($_SESSION['login']) && $_SESSION['login'] == true) {
        header('location: main.php');
    }

   

  if (isset($_POST['enviar'])) {
		$user=sanear($_POST['user']);
		$pwd=sanear($_POST['pwd']);
		if(preg_match( '/^[A-Z][a-z]+[0-9]$/',$user) and preg_match('/^[a-z]+[0-9]$/',$pwd)){
			
		print "user es".($user);
	    
        $db = conectarBBDDLogin();
        $resultado = consultarLogin($db, $user, $pwd);
		
		
			   if(mysqli_num_rows($resultado) == 1){
					$_SESSION['login'] = true;
					header('location: main.php');
				} else {
				
					header('location: login.php?error=1');
				}
	}else{print '<br>campos vacios';}
  } else {     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h1>Autenticación</h1>
        <div style="border: 1px solid black; width: 40%; padding: 20px">
            <p><span>Usuario: </span><input type="text" name="user" id="user"></p>
            <p><span>Password: </span><input type="password" name="pwd" id="pwd"></p>
            <?php 
                if (isset($_GET['error'])) {
                    echo '<p style="color: red">Datos incorrectos'. $_SESSION['USUARIO']. 'y'. $_SESSION['PASSW'].'</p>';
                }
                ?>
            <p><input type="submit" name="enviar">Iniciar Sesión</input></p>
        </div>
    </form>
</body>
</html>

<?php
    }
?>