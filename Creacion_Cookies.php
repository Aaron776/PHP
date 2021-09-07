<?php 
/*
Una cookie es como un archivo que va a permitirnos almacenar informacion para que nosotros cuando regresemos a una paginas no tengamos que ingresar esa infromacion nuevamente.
La cookies deben ejecutarse antes que cualquier ejecucion de codigo html y no debe ejecutarse despues de un echo o print

Para crear un cookie usamos la funcion setcookie()y dentro el parentesis van muchos parametros pero los mas importantes son el nombre de esa cookie, el valor de esa cookie, la duracion, la ruta donde se va a lamcenar ese archivo, el dominio y la seguridad( si se puede leer o cambiar))


Pra asegurarnos que nuestra cookie fue creada correctamente, las cookies se almacenan dentro de nuestro navegador y para ver las cookies vamos a las configurcaiones de nuestro navegador, luego vamos a configraciones avanzadas, vamos a la opcion privacidad y nos vamos a la opcion que dice Cookies y luego nos vamos a la opcion que dice ver todas las cookies y buscamos la que dice localhost y ahi veremos nuestra cookie con el nombre que le di en mi caso "Nombre_Persona" y "Calificacion_Persona" me aparecen.


Para leer los valores de una cookie lo hacemos mediante un if-else y dentro del if ponemos un isset y dentro de los parentesis poenmos la matriz "$_COOKIES" Y PARA LER UNA COOKIE  antes hay que entender que las cookies se almacenan en una matriz de datos conocida como matriz de cookies, para leer una cookie ya no es importante hacerlo hantes que el archivo html
*/
$nombre=$_POST['nombre'];
$calificacion=$_POST['calificacion'];
setcookie("Nombre_Persona","$nombre");
setcookie("Calificacion_Persona","$calificacion");

echo "Se han creado la cookies correctamente";
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>

<body>
	<br>
	<a href="Leer_Variables_Cookies.php">Cookie</a> <!-- este es solo un enlace para poder acceder a la paginas en donde pueda yo leer los cookies pero no es necesario crearla solo es de ejemplo--> 

</body>
</html>