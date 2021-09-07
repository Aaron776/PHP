<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php 

session_start();
$_SESSION['user']=$_REQUEST['usuario'];
$_SESSION['password']=$_REQUEST['contraseña'];
echo "Se han creado las variables de sesion";
 

 ?>
<body>
<br>
<a href="Leer_Sesion.php">Leer Variables de Sesion</a>
</body>
</html>