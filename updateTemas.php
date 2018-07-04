<?php 
	session_start();
	if(!isset($_SESSION['matricula'])){
		header("Location:index.html");
	}
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Actualizar Temas</title>
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
		<div class="tema">
			<div class="contenedorTema">
                <p id="titulo2">Listado de Todas las Preguntas</p>
			    <form action="upTema.php" class="form_pregunta" method="post">
			        
			        <label for="pregunta" id="lpregunta"> ID Tema</label>
			        <input type="text" id="tema" name="tema" placeholder="Numero de Tema"/>

			        <label for="pregunta" id="lpregunta">Nuevo Tema</label>
			        <input type="text" id="noPregunta" name="noPregunta" placeholder="Nuevo Tema"/>
			        
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
                
                    $consultaTema = mysqli_query($link,"SELECT * FROM temas");
                    
                    echo "<table>";
                    echo "<tr>";
                    echo "<th> ID Tema </th>";
                    echo "<th> Tema </th>";
                    echo "</tr>";
                    
                    while($fila = mysqli_fetch_array($consultaTema)){
							
						$id_tema = $fila['id_Tema'];
						$nom_Tema = $fila['nombre_Tema'];

						//RANGO, NUMERO DE PREGUNTAS CUYA RESPUESTA SON ETIQUETAS HTML, SE HACE LA CONVERSION DE HTML A TEXTO PLANO
						//SI EL NUMERO DE PREGUNTA NO ES 3,5,7 NO HACE CONVERSION Y SOLO CODIFICA PARA QUE NO SALGAN COSAS RARAS

                        
                        echo "<tr>";
                        echo "<td> $id_tema </td>";
                        echo "<td> $nom_Tema </td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
			</div>
		</div>

	</body>
</html>