<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<?php 
    //indica que manejara sesiones
    session_start();
    //conexion de bd
    $conexion = mysqli_connect("localhost","root","");
    //seleciona la bd
    mysqli_select_db($conexion,"proyecto");
    //obtiene los valores del formulario generales
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    //cifra contraseña
    $pass = md5($pass);

    //que tipo de usuario desea registrarse
    $tipoUser = $_POST['tipoCuenta'];
    if($tipoUser=="administrador"){
        $nrc = $_POST['matricula'];
        $sql= "INSERT INTO administradores VALUES(NULL,'$nrc','$nombre','$apellidos','$pass','$email')";
    }
    if($tipoUser=="usuario"){
        $matricula = $_POST['matricula'];
        $sql= "INSERT INTO alumnos VALUES(NULL,'$matricula','$nombre','$apellidos','$pass','$email')";   
    }

    //ejecuta la operacion de insercion
    mysqli_query($conexion,$sql);
    echo "<script type='text/javascript'>
                alert('Registro exitoso, inicie sesion');
                window.location='login.php';
    </script>";
 ?>

</body>
</html>