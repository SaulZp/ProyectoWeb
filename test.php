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
		<link rel="stylesheet" type="text/css" href="css/test.css">
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet">
	</head>
	<body>
		<!--EXAMEN GENERADO-->
		<div class="titulo">
			<header>
				<h1>EXAMEN</h1>
			</header>
		</div>

		<div class="prueba">
			<form action="calificacion.php" method="post">
			<?php 
					error_reporting(0);
					$conexion = mysqli_connect("localhost","root","");
					mysqli_select_db($conexion,"proyecto");
					$numeros=array();

					if(isset($_POST['web'])){
						$idTema = "1";
						for($i=0;$i<5;$i++){
							$numero = rand(1,9);
							while(in_array($numero, $numeros)){
								$numero = rand(1,9);
							}
							array_push($numeros, $numero);
						}
					}
					if(isset($_POST['uwe'])){
						$idTema = "2";
						for($i=0;$i<5;$i++){
							$numero = rand(1,8);
							while(in_array($numero, $numeros)){
								$numero = rand(1,8);
							}
							array_push($numeros, $numero);
						}
					}
					if(isset($_POST['servlet'])){
						$idTema = "3";
						for($i=0;$i<5;$i++){
							$numero = rand(1,8);
							while(in_array($numero, $numeros)){
								$numero = rand(1,8);
							}
							array_push($numeros, $numero);
						}
					}

					session_start();
					$_SESSION['tema'] = $idTema;
					$_SESSION['preguntas'] = $numeros;
					for($x=0;$x<5;$x++){
//						echo '<h2>'.$numeros[$x].'</h2><br>';
						//echo "SELECT * FROM preguntas WHERE id_tema='$idTema' AND noPregunta='$numeros[$x]'"."<br>";
						$sql="SELECT * FROM preguntas WHERE id_tema='$idTema' AND noPregunta='$numeros[$x]'";
						$res=mysqli_query($conexion,$sql);
						
						if($row = mysqli_fetch_array($res)){
							$pregunta = $row['pregunta'];
							$respuesta1 = $row['respuesta1'];
							$respuesta2 = $row['respuesta2'];
							$respuesta3 = $row['respuesta3'];
							$respuesta4 = $row['respuesta4'];
							
							$tema = $row['id_Tema'];
							$numP = $row['noPregunta'];

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
							 
						}
						echo "<hr>";
						echo "<h2>".$pregunta."</h2>";
						echo "<input type='radio' name='$x' id='$x' value='1'><label>".$respuesta1."</label>";
						echo "<br>";
						echo "<input type='radio' name='$x' id='$x' value='2'><label>".$respuesta2."</label>";
						echo "<br>";
						echo "<input type='radio' name='$x' id='$x' value='3'><label>".$respuesta3."</label>";
						echo "<br>";
						echo "<input type='radio' name='$x' id='$x' value='4'><label>".$respuesta4."</label>";
						echo "<br>";
					}
				 ?>
				 <input type="submit" name="enviar" id="enviar" value="Evaluar">
			</form>
		</div>
		


	</body>
</html>