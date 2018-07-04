<?php 
	session_start();
	if(!isset($_SESSION['matricula'])){
		header("Location:index.html");
	}
 ?>
 
 <!DOCTYPE html>
<html lang="es">
	<head>
		<title>Test</title>
		<meta charset="utf-8">
		<meta charset="ISO-8859-1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<link rel="stylesheet" type="text/css" href="css/calificacion.css">
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet">
	</head>
	<body>
		<!--ENCABEZADO-->
		<div class="titulo">
			<header>
				<h1>CALIFICACION</h1>
			</header>
		</div>

		<!--EXAMEN GENERADO-->

		<div class="prueba">
			<?php 
				error_reporting(0);
				session_start();
				$conexion = mysqli_connect("localhost","root","");
				mysqli_select_db($conexion,"proyecto");
				$preguntas = $_SESSION['preguntas'];
				$tema = $_SESSION['tema'];
				$buenas=0;
				$malas=0;
				for ($x=0; $x < 5; $x++) { 
					$respuesta = $_POST[$x];
					$pregunta = $preguntas[$x];
					$consulta = mysqli_query($conexion,"SELECT * FROM preguntas WHERE id_Tema='$tema' AND noPregunta='$pregunta'");
					if(($row = mysqli_fetch_array($consulta))==TRUE){
						if($respuesta == $row['solucion']){
							$buenas++;
						}else{
							$malas++;
						}
					}
				}

				$time = time();
				$date = date("Y-m-d",$time);
				$matricula = $_SESSION['matricula'];
				$cal = ($buenas*10)/5;
				$cons = mysqli_query($conexion,"SELECT * FROM perfil WHERE id_Tema='$tema' AND id_Alumno='$matricula'");
				if($arreglo = mysqli_fetch_array($cons)){
					$intento = $arreglo['intentos'];
				}
				echo "<h2>PUNTUACION:".$cal."</h2>";
				if($cal>=6){
					echo "<h2>¡BIEN HECHO!<h2>";
					$intento++;
					$estado="aprobado";
				}else{
					echo "<h2>¡VUELVE A INTENTARLO!<h2>";
					$intento++;
					$estado="reprobado";
				}
				
				$actualizacion=mysqli_query($conexion,"UPDATE perfil SET noRespuestasCorrectas='$buenas', noRespuestasIncorrectas='$malas', fecha_Examen='$date', intentos='$intento', estado='$estado' WHERE id_Alumno='$matricula' AND id_Tema='$tema'");

			 ?>
			
			<form action="menu.php" method="post">
			 <input type="submit" name="enviar" id="enviar" value="Regresar al Menu Principal">
			</form>
		</div>
		


	</body>
</html>