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
            $tema = $_POST['tema'];
            $noPregunta = $_POST['noPregunta'];
            $respuesta1 = $_POST['respuesta1'];
            $respuesta2 = $_POST['respuesta2'];
            $respuesta3 = $_POST['respuesta3'];
            $respuesta4 = $_POST['respuesta4'];
            $solucion = $_POST['solucion'];
         
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

            
            $sql = "UPDATE preguntas SET respuesta1='$respuesta1',respuesta1='$respuesta1',respuesta2='$respuesta2',respuesta3='$respuesta3',respuesta4='$respuesta4',solucion='$solucion' WHERE id_Tema='$tema' AND noPregunta='$noPregunta'";
            //Script para validar la actualizacion
            if (mysqli_query($link,$sql)) {
                echo '<script>alert("Informacion agregada correctamente");</script>';
                $link->close();
                echo '<script>window.location="updatePreguntas.php";</script>';
            }
         ?>
     </body>
 </html>