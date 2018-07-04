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

		
		<!--Perfil-->	
		<div class="presentacion">
			<div class="usuario">
			    <img src="img/estudiante.jpg" alt="estudiante.jpg" width="300" height="300">
		    </div>
		    <div class="tabla">
		        <p id="textotabla">Tabla de Perfil</p>
		        <?php                        
					$mat=$_SESSION['matricula'];
						
					$link=mysqli_connect("localhost","root","");
					mysqli_select_db($link,"proyecto");
                
					$result1=mysqli_query($link,"select nombre,apellidos,correo from alumnos where matricula='$mat'");
					$row1=mysqli_fetch_array($result1);

					$matricula=$row1["nombre"];
					$apellidos=$row1["apellidos"];
                    $correo=$row1["correo"];
					
                    echo "<p> $matricula </p>";
                
	                $result2=mysqli_query($link,"select * from perfil where id_Alumno='$mat'");
                    $row2=mysqli_fetch_array($result2);
                    
                    $id_Alumno=$row2["id_Alumno"];
                    
                     echo "<p> $id_Alumno </p>";
                    
                ?>
		    </div>
		</div>

	</body>
</html>