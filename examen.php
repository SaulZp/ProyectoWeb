<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Sistema</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/examen.css">
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

		<!--Perfil-->	
		<div class="presentacion">
			<h1>¿De que tema quieres hacer el examen?</h1>
			<form action="test.php">
				<input type="submit" name="web" id="web" value="HTML,CSS,JAVASCRIPT">
				<input type="submit" name="uwe" id="uwe" value="UWE">
				<input type="submit" name="servlet" id="servlet" value="SERVLETS">
			</form>			
		</div>

	</body>
</html>