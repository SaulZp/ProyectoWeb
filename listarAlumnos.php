<?php 
	/*session_start();
	if(!isset($_SESSION['matricula'])){
		header("Location:index.html");
	}*/
 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Alumnos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/estilosAdmin.css">
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
						<a href="index.html"><h2>Cerrar Sesion</h2></a>
					</li>
				</ul>
			</nav>
		</div>

		<!--PRESENTACION-->	
		<div class="alumnos">
			<p id="texto"> Listado de Alumnos registrados</p>
			<div class="tablaAlum">
			    <?php
                    $host = "localhost";
                    $user = "root";
                    $pw = "";
                    $db = "proyecto";

                    $link = mysqli_connect($host,$user,$pw);
                     mysqli_select_db($link,$db);

                    $consultaAlumno = mysqli_query($link,"SELECT * FROM alumnos");
                    echo "<table>";
                    echo "<tr>";
                    echo "<th> ID </th>";
                    echo "<th> Matricula </th>";
                    echo "<th> Nombre </th>";
                    echo "<th> Apellidos </th>";
                    echo "<th> Conttraseña </th>";
                    echo "<th> E-mail </th>";
                    echo "</tr>";
                    while($fila = mysqli_fetch_array($consultaAlumno)){
                        echo "<tr>";
                        echo "<td> $fila[id_Alumno] </td>";
                        echo "<td> $fila[matricula] </td>";
                        echo utf8_encode("<td> $fila[nombre] </td>");
                        echo utf8_encode("<td> $fila[apellidos] </td>");
                        echo "<td> $fila[password] </td>";
                        echo "<td> $fila[correo] </td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
			</div>
		</div>

	</body>
</html>