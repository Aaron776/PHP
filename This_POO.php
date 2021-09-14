<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php 
//El uso de la funcion de la palabra this, esta palabra nos permite hacer uso de todos los atributos de mi clase, nos pemite cambiar los valores o cosas asi es algo parecido a un intermediario

include("POO.class.php");
$ferrari=new Automovil();
print("<br>");
$ferrari->ponerColor();
print("<br>");
$ferrari->ponerPrecio();

//Otro objeto de la clase Automovil
print("<br>");
$mazda=new Automovil();
print("<br>");
print($mazda->color);
print("<br>");
print($mazda->precio);

 ?>
<body>

</body>
</html>