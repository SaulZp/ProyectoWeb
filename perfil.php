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
		<link rel="stylesheet" type="text/css" href="css/perfil.css">
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
						<a href="cerrar.php"><h2>Cerrar Sesion</h2></a>
					</li>
				</ul>
			</nav>
		</div>

		<div class="usuario">
			<img src="img/estudiante.jpg" alt="estudiante.jpg" width="300" height="300">
		</div>
		<!--Perfil-->	
		<div class="presentacion">
			
		</div>

	</body>
</html>