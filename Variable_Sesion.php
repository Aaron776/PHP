<?php 
/*
Las variables de sesion  son parecidas a las cookies ( o sea un lugar donde se almacenan dtos) y para recuprarlas son mediante el uso de matrices, estas son mas recomendables de usar, cuando quereos recibir los datos debemos hacerlo antes de ejecutar el codigo html 

Ademas debemos ejecutar la funcion session_start() esta funcion lo que permite que nuestro servidor se habilite para que esas variables se almacene dentro de el

Lo que hacemos despues es crear una variable $_SESSION en donde vamos alamcenar los datos 

No se puede comprobar si la variable de sesion de ha comprobado correctamente
*/

session_start();
$_SESSION['user']=$_REQUEST['usuario'];
$_SESSION['password']=$_REQUEST['contraseña'];
echo "Se han creado las variables de sesion";
 

 


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