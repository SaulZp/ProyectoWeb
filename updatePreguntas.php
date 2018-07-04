<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Actualizar Preguntas</title>
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
		<div class="pregunta">
			<div class="contenedorPregunta">
                <p id="titulo2">Listado de Todas las Preguntas</p>
			    <form action="updatePreguntas.php" class="form_pregunta">
			        <label for="pregunta" id="lpregunta">Pregunta</label>
			        <input type="text" id="pregunta" name="pregunta" placeholder="Escriba la pregunta a editar"/>
			        <label for="nPregunta" id="lpregunta">Nueva Pregunta</label>
			        <input type="text" id="nPregunta" name="nPregunta" placeholder="Escriba la nueva pregunta"/>
			        <input type="submit" id="submit" value="Enviar Cambios"/>
			    </form>
			    <?php
                    $host = "localhost";
                    $user = "root";
                    $pw = "";
                    $db = "proyecto";

                    $link = mysqli_connect($host,$user,$pw);
                     mysqli_select_db($link,$db);
                    
                    //echo utf8_encode();            
                
                    $consultaAlumno = mysqli_query($link,"SELECT * FROM preguntas");
                    echo "<table>";
                    echo "<tr>";
                    echo "<th> ID Tema </th>";
                    echo "<th> No Pregunta </th>";
                    echo "<th> Pregunta </th>";
                    echo "<th> Respuesta 1 </th>";
                    echo "<th> Respuesta 2 </th>";
                    echo "<th> Respuesta 3 </th>";
                    echo "<th> Respuesta 4 </th>";
                    echo "<th> Solución </th>";
                    echo "</tr>";
                    while($fila = mysqli_fetch_array($consultaAlumno)){
                        echo "<tr>";
                        echo "<td> $fila[id_Tema] </td>";
                        echo "<td> $fila[noPregunta] </td>";
                        echo utf8_encode("<td> $fila[pregunta] </td>");
                        echo utf8_encode("<td> $fila[respuesta1] </td>");
                        echo utf8_encode("<td> $fila[respuesta2] </td>");
                        echo utf8_encode("<td> $fila[respuesta3] </td>");
                        echo utf8_encode("<td> $fila[respuesta4] </td>");
                        echo "<td> $fila[solucion] </td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
			</div>
		</div>

	</body>
</html>