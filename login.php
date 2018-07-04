<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Iniciar Sesion</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="css/registroLogin.css">
    </head>
        <body>
            
            <!--CAJA DE TITULO-->
            <div class="titulo">
                <header>
                    <h1>Generador de Examenes en Linea</h1>
                </header>
            </div>

            <div class="login">
                <h1>Inicio de Sesion</h1>

                <form action="login.php" method="post">
                    <label id="icon" for="matricula"></label>
                    <input type="text" name="matricula" id="matricula" placeholder="Matricula" required autocomplete="off" />
                    <label id="icon" for="pass"></label>
                    <input type="password" name="pass" id="pass" placeholder="Contraseña" required autocomplete="off" />
                    
                    
                    <div class="boton">
                        <input type="submit" id="registrar" name="registrar" value="registrar">
                    </div>
                    <br>
              </form>
        </div>
    
    </body>
</html>



<?php 
	//AQUI COMIENZA EL CODIGO PHP PARA VERIFICAR SI EL USUARIO ESTA REGISTRADO
	error_reporting(0);
	session_start();
	$matricula = $_POST['matricula'];
	$contrasena = $_POST['pass'];
	//echo "...".$contrasena;
	$link = mysqli_connect("localhost","root","");
	mysqli_select_db($link,"proyecto");
	$consultaAlumno = mysqli_query($link,"SELECT * FROM alumnos WHERE matricula='$matricula'");
	$consultaAdministrador=mysqli_query($link,"SELECT * FROM administradores WHERE nrc='$matricula'");
	if($row=mysqli_fetch_array($consultaAlumno)){
		if($row['password']==$contrasena){
			$_SESSION['matricula']=$row['matricula'];
			echo '<script type="text/javascript">
			alert("Bienvenido");
			</script>';
		}else{
			echo "<script type='text/javascript'>
			alert('Contraseña incorrecta');
			window.location='login.html'
			</script>";
		}
		
	}else{
		if($array=mysqli_fetch_array($consultaAdministrador)){
			if($array['password']==$contrasena){
				$_SESSION['matricula']=$array['nrc'];
				echo '<script type="text/javascript">
				alert("Bienvenido Profesor '.$array['nombre'].'");
				</script>';
			}else{
				echo "<script type='text/javascript'>
				alert('Esta matricula no tiene privilegios de administrador o la contraseña no es correcta');
				window.location='login.html'
				</script>";
			}	
		}
	}
 ?>