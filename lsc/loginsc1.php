<!DOCTYPE html>
<html lang="es">
<head>
<title>TallerI</title>
<meta charset="utf-8">



</head>

<body>

       <form action="" method="post">

        <table border="0">
		<legend  style="font-size: 18pt"><b>Iniciar Sesion</b></legend>
        <tr><td><label style="font-size: 14pt"><b>Usuario </b></label></td>
            <td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="user"></td></tr>
        <tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
            <td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
        <tr><td></td>
            <td width=80 align=center><input type="submit" value="ingresar" class="btn btn-success" name="ingresar"></center>
            </tr></tr></table>
            
        </form>
<?php

if(isset($_POST['ingresar']))
    {
    	include("abrir.php"); 

	$user=$_POST['user'];
	$pass=$_POST['pass'];


	$sql=mysqli_query($conexion,"SELECT * FROM usuario WHERE user='$user' and pass='$pass'  ");
        if (($consulta = mysqli_fetch_array($sql)))
        	{
              header("Location:ingreso2.php");
            }
		else
			{ 
			  echo '<script>alert("DATOS INCORRECTOS")</script> ';
			}
	}

?>
            
	

        <form method="post" action="" >
  
    <legend  style="font-size: 18pt"><b>Registrarse</b></legend>
    <div class="form-group">
      <tr><td><label style="font-size: 14pt"><b>Ingrese su Nombre</b></label></td>
      <td width=80><input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" style="border-radius:15px;"/> </td></tr>
    </div>
    <div class="form-group">
     <tr><td> <label style="font-size: 14pt"><b>Ingrese su Usuario</b></label></td>
     <td width=80>  <input type="text" name="user" class="form-control" placeholder="Ingrese usuario" style="border-radius:15px;"/> </td></tr>
    </div>
    <div class="form-group">
     <tr><td> <label style="font-size: 14pt;"><b>Ingrese su Contraseña</b></label></td>
     <td width=80> <input type="password" name="pass" class="form-control"  placeholder="Ingrese contraseña" style="border-radius:15px;"/> </td></tr>
    </div>
    <div class="form-group">
     <tr><td> <label style="font-size: 14pt;"><b>Ingrese su email</b></label></td>
     <td width=80> <input type="text" name="mail" class="form-control"  required placeholder="Ingrese mail" style="border-radius:15px;"/></td></tr>
    </div>
  

   
    <input  class="btn btn-danger" type="submit" name="enviar" value="enviar"/>

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