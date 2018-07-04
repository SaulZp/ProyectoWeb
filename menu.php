<?php 
	session_start();
	if(!isset($_SESSION['matricula'])){
		header("Location:index.html");
	}
 ?>



<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sistema</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/menu.css">
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet">
	</head>
	<body>

		<!--MENU-->
		<div class="menu">
			<nav>
				<ul>
					<li>
						<a href="perfil.php"><h2>Mi Perfil</h2></a>
					</li>
					<li>
						<a href="examen.php"><h2>Generar Examen</h2></a>
					</li>
					<li>
						<a href="cerrar.php"><h2>Cerrar Sesion</h2></a>
					</li>
				</ul>
			</nav>
		</div>

		<!--PRESENTACION-->	
		<div class="presentacion">
			<p id="texto">¡PONTE A PRUEBA! durante el semestre/cuatrimestre has adquirido ciertos conocimientos de los cuales carecias o tenias un previo conocimiento pero no a fondo, este test te ayudara a reafirmar las habilidades y conocimientos que has adquirido durante el trayecto del curso. ¡TE DESEAMOS BUENA SUERTE!</p>
		</div>

	</body>
</html>


<?php 

	$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,"proyecto");
	$matricula = $_SESSION['matricula'];
	$sql = "SELECT * FROM perfil WHERE id_Alumno='$matricula' AND id_Tema=1";
	$sql1 = "SELECT * FROM perfil WHERE id_Alumno='$matricula' AND id_Tema=2";
	$sql2 = "SELECT * FROM perfil WHERE id_Alumno='$matricula' AND id_Tema=3";
	$consulta = mysqli_query($conexion,$sql);
	$consulta1 = mysqli_query($conexion,$sql1);
	$consulta2 = mysqli_query($conexion,$sql2);
	if(($row = mysqli_fetch_array($consulta))==FALSE){
		mysqli_query($conexion,"INSERT INTO perfil VALUES('$matricula',1,0,0,'NO PRESENTADO','000/00/00',0)");
	}
	if(($row = mysqli_fetch_array($consulta1))==FALSE){
		mysqli_query($conexion,"INSERT INTO perfil VALUES('$matricula',2,0,0,'NO PRESENTADO','000/00/00',0)");
	}
	if(($row = mysqli_fetch_array($consulta2))==FALSE){
		mysqli_query($conexion,"INSERT INTO perfil VALUES('$matricula',3,0,0,'NO PRESENTADO','000/00/00',0)");
	}
 ?>