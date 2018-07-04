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
		<!--ENCABEZADO-->
		<div class="titulo">
			<header>
				<h1>Generador de Examenes en Linea</h1>
			</header>
		</div>

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
						<a href="index.html"><h2>Cerrar Sesion</h2></a>
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