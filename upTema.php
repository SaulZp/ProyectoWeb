<?php 
	session_start();
	if(!isset($_SESSION['matricula'])){
		header("Location:index.html");
	}
 ?>
 <!DOCTYPE html>
 <html lang="es">
     <head>
         <meta charset="utf-8">
         <title></title>
         <meta name="description" content="">
         <link rel="stylesheet" href="main.css">
     </head>
     <body>
         <?php
            //obtiene los valores del formulario generales
            $idTema = $_POST['tema'];
            $nomTema = $_POST['noPregunta'];

            $host = "localhost";
            $user = "root";
            $pw = "";
            $db = "proyecto";

            $link = mysqli_connect($host,$user,$pw);
            mysqli_select_db($link,$db);
         
            //Update de una pregunta
           /* $consulta = mysqli_query($link,"SELECT * FROM preguntas WHERE id_Tema='$tema' AND noPregunta='$noPregunta'");            
            if($row=mysqli_fetch_array($consulta)){
                $p = $row['pregunta'];
                echo $p;
            }*/

            
            $sql = "UPDATE temas SET nombre_Tema='$nomTema' WHERE id_Tema='$idTema'";
            //Script para validar la actualizacion
            if (mysqli_query($link,$sql)) {
                echo '<script>alert("Informacion agregada correctamente");</script>';
                $link->close();
                echo '<script>window.location="updateTemas.php";</script>';
            }
         ?>
     </body>
 </html>