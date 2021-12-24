<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php 
//Los archivos en php no se crean en el computador si no en nuestro servidor

//fopen(): esta funcion lo que hace es abrir el archivo que quermeos utilizar, en el parentesis primero ponemos el nombre del archivo y luego poenmos el parametro modo (a de crear archivo y escribir al final ,w de escribir o sobreescribir en el archivo  y r de leer el archivo y solo permite leer archivos )

	$nombre=$_POST['nombre'];
	$calificacion=$_POST['calificacion'];					

						//Crear un Archivo

$archivo=fopen("calificacion.txt", "a") or die("Problemas al crear el archivo"); // esta funcion or die() lo que hace e mandar una alerta en caso de que el archivo no se haya creado

//Si ponemos "a" el modo del fopen lo que hace es que cada vez que ingresemos un dato nuevo este se ira poniendo al final del anterior y si ponemos la "w" lo que hace es que no agrega nada si no lo que hace es sobrescribir lo que ya esta en el archivo

//Ademas si quremos podemos almcenar ese archivo creado en una variable como hare en mi caso

//fputs(): esta funcion requiere de dos parametros, el archivo del archivos y luego poenmos el contenidos que vamos a gregar al archivos ( noamrlemnte son cademas strings o sea palabras como en Word), fputs quiere decir poner

fputs($archivo,$nombre);
fputs($archivo,"\n");
fputs($archivo,$calificacion);



//fclose(): Permite guardar  y cerrar el archivo, es importante siempre cerrar el archivo

 fclose($archivo);
 echo "Los datos se guardaron en el archivo Txt correctamente";

 //Cuando hagamos todo esto veremos que se nos creo un archivo txt con el nombre "calificacion" y veremos que tiene los datos que mando desde nuestro archvio html "Funciones_Archivos.html"



 ?>
<body>

</body>
</html>