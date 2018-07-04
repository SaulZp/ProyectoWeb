<?php 
	session_start();
	if(!isset($_SESSION['matricula'])){
		header("Location:index.html");
	}
?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Administrador</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/menuAdmin.css">
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet">
	</head>
	<body>
		<!--MENU-->
		<div class="menu">
			<nav>
				<ul>
					<li>
						<a href="updateTemas.php"><h2>Actualizar Temas</h2></a>
					</li>
					<li>
						<a href="updatePreguntas.php"><h2>Actualizar Preguntas</h2></a>
					</li>
					<li>
						<a href="updateRespuestas.php"><h2>Actualizar Respuestas</h2></a>
					</li>
					<li>
						<a href="listarAlumnos.php"><h2>Listar Alumnos</h2></a>
					</li>
					<li>
						<a href="cerrar.php"><h2>Cerrar Sesion</h2></a>
					</li>
				</ul>
			</nav>
		</div>

		<!--PRESENTACION-->	
		<div class="graficos">
			<p id="texto">
			    ADMINISTRADOR
			</p>
		</div>

	</body>
</html>