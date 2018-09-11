<!DOCTYPE html>
<html lang="es">
<head>
<title>TallerI</title>
<meta charset="utf-8">



</head>

<body>     
            


	<form name="formulario" method="POST" action="registro.php" id="formulario">
		
		<div>
			<label for="nombre">Nombre</label><br/>
			<input type="text" name="nombre" id="nombre"  class="form-control" maxlength="10" placeholder="Ingrese su nombre"/>
		</div>
		<div>
			<label for="user">Usuario </label><br/>
			<input type="text" name="user" id="user" class="form-control" maxlength="50" placeholder="Ingrese su user"/>
		</div>
		
		<div>
			<label for="contraseña">Contraseña</label><br/>
			<input type="password" name="pass" id="pass" maxlength="15" placeholder="Ingrese su contraseña"/>
		</div>
		<div>
			<label for="mail">email:</label><br/>
			<input type="text" name="mail" id="mail" class="form-control" maxlengpassth="50" placeholder="Ingrese su mail"/>
		</div>
		
		<div>
			<center><input type="submit" value="Enviar" class="btn btn-success" name="enviar"></center>
		</div>
			
	</form>

<ul>
	<b><a href="index.html">INICIO</a>
</ul>
	
<?php
	if(isset($_POST['enviar']))
    {
    	include("abrir.php"); 
    	
        $nombre = $_POST['nombre'];
        $user = $_POST['user'];
        $pass=$_POST['pass'];
        $mail = $_POST['mail'];
        

      mysqli_query($conexion,"INSERT INTO usuario VALUES('$nombre','$user','$pass','$mail')");

      include("cerrar.php");        
	}                   
?>
</body>
</html>