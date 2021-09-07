<?php 
/*
Pra leer las variables de sesion el codigo php debe ubicarse antes del cogigo html
Se debe poner la funcion session_start() para iiciar el servidor
*/

session_start();
$usuario=$_SESSION['user'];
$contraseña=$_SESSION['password'];
print("El usuario que se almaceno como variable de sesion es: $usuario");
echo "<br>";
print("La contraseña que se almaceno como variable de sesion es: $contraseña");



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

</body>
</html>