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
					
                    echo "<table id='t01'>";
                        echo "<tr>";
                            echo "<th>Nombre</th>";
                            echo "<th>Apellidos</th>";
                            echo "<th>Correo</th>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td> $matricula </td>";
                            echo "<td> $apellidos </td>";
                            echo "<td> $correo </td>";
                        echo "</tr>";
                    echo "</table>";
                    
                    
                
	                $result2=mysqli_query($link,"select * from perfil where id_Alumno='$mat'");
                    
                    echo "<br><table>";
                    echo "<tr>";
                    echo "<th> ID Alumno </th>";
                    echo "<th> ID Tema </th>";
                    echo "<th> No Respuestas Correctas </th>";
                    echo "<th> No Respuestas Incorrectas </th>";
                    echo "<th> Estado </th>";
                    echo "<th> Fecha Examen </th>";
                    echo "<th> Intentos </th>";
                    echo "</tr>";
                    while($row2 = mysqli_fetch_array($result2)){
                        $idAlumno=$row2["id_Alumno"];
					    $idTema=$row2["id_Tema"];
                        $noCorrectas=$row2["noRespuestasCorrectas"];
                        $noIncorrectas=$row2["noRespuestasIncorrectas"];
					    $estado=$row2["estado"];
                        $fechaExamen=$row2["fecha_Examen"];
                        $intentos=$row2["intentos"];
                        echo "<tr>";
                        echo "<td> $idAlumno </td>";
                        if($idTema == 1){
                        	echo "<td> HTML5,CSS3,JAVASCRIPT </td>";
                        }
                        if($idTema == 2){
                        	echo "<td> UWE </td>";
                        }
                        if($idTema == 3){
                        	echo "<td> SERVLET </td>";
                        }
                        echo "<td> $noCorrectas </td>";
                        echo "<td> $noIncorrectas </td>";
                        echo "<td> $estado </td>";
                        echo "<td> $fechaExamen </td>";
                        echo "<td> $intentos </td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                
                    
                ?>
		    </div>
		</div>

	</body>
</html>