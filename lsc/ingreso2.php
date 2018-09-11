<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:loginsc1.php");
	}
	?>
<html lang="en">
<head>
<meta charset="utf-8">
<title>TALLER</title>   
</head>

<body>
<form action="" method="post">
<legend  style="font-size: 18pt"><b> BIENVENIDO </b></legend>
</form>  
</body>
</header>
