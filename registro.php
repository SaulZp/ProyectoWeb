<?php 
	session_start();
	$matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
	$contrasena = $_POST['pass'];
    $contrasena2 = $_POST['pass2'];
	
    //CONEXION A LA BASE DE DATOS
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
	/*	echo "<script type='text/javascript'>
			var opcion = confirm('No te has registrado,¿Quieres crear una nueva cuenta como alumno?');
			if(opcion==true){
				window.location='registro.html';
			}else{
				window.location='login.html'
			}			
			</script>";*/
	}
 ?>