<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php  
/*
Un constructor en una clase es un metodo o una funcion que ayuda a construir un objeto ademas de poder iicalizar un objeto de esa clase, el constructor viene por defecto a neos que yo lo defina, la forma de definir un constructor es de la siguiente forma:
function __construct(){}
*/
include("POO.class.php");
$ferrari=new Automovil();
 
 //Para llamar o que se ejecute la funcion constructor de la clase solo hace falta crear un objeto de esa clase y nada mas, no es necesario llamar a la funcion como hacemos con las demas funciones normales para que se ejecute

print("<br>");
$mazda=new Automovil();

?>
<body>

</body>
</html>