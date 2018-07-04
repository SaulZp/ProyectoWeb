<?php 
/*	session_start();
	if(!isset($_SESSION['matricula'])){
		header("Location:index.html")
	}*/
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
            $pregunta = $_POST['pregunta'];
            $nPregunta = $_POST['nPregunta'];
            //echo "$pregunta <br>";
            //echo "$nPregunta <br>";
            $host = "localhost";
            $user = "root";
            $pw = "";
            $db = "proyecto";

            $link = mysqli_connect($host,$user,$pw);
            mysqli_select_db($link,$db);
         
            //Update de una pregunta
            $sql = "UPDATE preguntas SET pregunta='$nPregunta' WHERE pregunta = '$pregunta'";
            //Script para validar la actualizacion
            if (mysqli_query($link,$sql)) {
                echo '<script>alert("Informacion agregada correctamente");</script>';
                $link->close();
                echo '<script>window.location="updatePreguntas.php";</script>';
            }
         ?>
     </body>
 </html>