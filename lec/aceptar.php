<?php
session_start();
	require("abrir.php");

	$user=$_POST['user'];
	$pass=$_POST['pass'];


	$sql=mysqli_query($conexion,"SELECT * FROM usuario WHERE user='$user' ");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['pass']){
			$_SESSION['nombre']=$f['nombre'];
			$_SESSION['user']=$f['user'];
			header("Location: ingreso2.php");

		}else{
			
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
			echo "<script>location.href='ingreso1.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='ingreso1.php'</script>";	

	}


?>