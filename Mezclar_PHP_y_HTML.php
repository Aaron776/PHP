<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<!-- Php permite ejecutar codigo html dentro de el, atravez de PHP podemos introducir codigo html a nuestra pagina -->
<?php
	print("Estoy trabajando con PHP"); // con esta funcion print() lo que perite ejecutar codigo html como si fuera texto y que se muestre en pantalla
	
	echo "Hola soy Aaron"; 

	print("<h1>Ovnis</h1>"); // con esta funcion print() lo que perite ejecutar codigo html como si fuera texto

	echo "<h2>Titulo Echo</h2>"; //con este comando echo tambien podemos escribir comando html
?>

<body>
<!-- Tambien podemos gragar varias etiquetas de php en nuestro documento php-->
<?php
 echo "Otro Texto";
?>
</body>
</html>