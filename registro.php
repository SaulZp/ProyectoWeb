<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registrate</title>
        <meta name="description" content="">
        <link rel="stylesheet" href="css/estilosRegis.css">
        <script src="js/validarFormulario.js"></script>
    </head>
        <body>
            
            <!--CAJA DE TITULO-->
            <div class="titulo">
                <header>
                    <h1>Generador de Examenes en Linea</h1>
                </header>
            </div>

            <div class="registro">
                <h1>Registro de Usuario</h1>
                <!--FORMULARIO DE REGISTRO-->
                <form action="registro.php" method="post" onsubmit="return validar()">
                    <hr>
                    <div class="accounttype">
                        <input type="radio" value="administrador" id="radioAdm" name="tipoCuenta" checked/>
                        <label for="radioAdm" class="radio" chec>Profesor</label>
                        <input type="radio" value="usuario" id="radioUser" name="tipoCuenta" />
                        <label for="radioUser" class="radio">ALumno</label>
                    </div>
                    <hr>
                    <label id="icon" for="matricula"></label>
                    <input type="text" name="matricula" id="matricula" placeholder="Matricula ó NRC" required/>
                    <label id="icon" for="nombre"></label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required/>
                    <label id="icon" for="apellidos"></label>
                    <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required/>
                    <label id="icon" for="email"></label>
                    <input type="email" name="email" id="email" placeholder="E-mail" required/>
                    <label id="icon" for="pass"></label>
                    <input type="password" name="pass" id="pass" placeholder="Contraseña" required/>
                    <label id="icon" for="pass2"></label>
                    <input type="password" name="pass2" id="pass2" placeholder="Confirmar Contraseña" required/>
                    
                    <div class="boton">
                        <br>
                        <input type="submit" id="registrar" name="registrar" value="Registrarse">
                    </div>
                    <br>
              </form>
        </div>
    </body>
</html>


<?php
//AQUI COMIENZA EL CODIGO PHP AGREGAR UN USUARIO O CLIENTE
$conexion = mysqli_connect("localhost","root","");
	mysqli_select_db($conexion,"proyecto");
/*    echo 'Error al conectar a la base de datos';
}else{
    echo 'Conectado a la base de datos';
}*/
?>