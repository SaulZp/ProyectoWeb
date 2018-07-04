<?php 
	/*session_start();
	if(!isset($_SESSION['matricula'])){
		header("Location:index.html");
	}*/
 ?>
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
			    <form action="upPregunta.php" class="form_pregunta" method="post">
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
                        
                        $pregunta = $fila['pregunta'];
				        $respuesta1 = $fila['respuesta1'];
				        $respuesta2 = $fila['respuesta2'];
						$respuesta3 = $fila['respuesta3'];
						$respuesta4 = $fila['respuesta4'];
							
						$tema = $fila['id_Tema'];
						$numP = $fila['noPregunta'];
                        $solu = $fila['solucion'];

						//RANGO, NUMERO DE PREGUNTAS CUYA RESPUESTA SON ETIQUETAS HTML, SE HACE LA CONVERSION DE HTML A TEXTO PLANO
						//SI EL NUMERO DE PREGUNTA NO ES 3,5,7 NO HACE CONVERSION Y SOLO CODIFICA PARA QUE NO SALGAN COSAS RARAS
						if($tema=='1'){
				            if(($numP=='3')or($numP=='5')or($numP=='7')){
								$respuesta1 = htmlentities($respuesta1);
								$respuesta2 = htmlentities($respuesta2);
								$respuesta3 = htmlentities($respuesta3);
								$respuesta4 = htmlentities($respuesta4);
				            }	
				        }

				        if($tema=='2'){
				            if(($numP=='3')or($numP=='4')or($numP=='7')){
								$respuesta1 = htmlentities($respuesta1);
								$respuesta2 = htmlentities($respuesta2);
								$respuesta3 = htmlentities($respuesta3);
								$respuesta4 = htmlentities($respuesta4);
				            }	
				        }
							
				        $pregunta= utf8_encode($pregunta);
						$respuesta1= utf8_encode($respuesta1);
						$respuesta2= utf8_encode($respuesta2);
						$respuesta3= utf8_encode($respuesta3);
						$respuesta4= utf8_encode($respuesta4);
                        
                        
                        echo "<tr>";
                        echo "<td> $tema </td>";
                        echo "<td> $numP </td>";
                        echo "<td> $pregunta </td>";
                        echo "<td> $respuesta1 </td>";
                        echo "<td> $respuesta2 </td>";
                        echo "<td> $respuesta3 </td>";
                        echo "<td> $respuesta4 </td>";
                        echo "<td> $solu </td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
			</div>
		</div>

	</body>
</html>