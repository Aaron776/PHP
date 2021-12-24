<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php

//Un vector es una variable o espacio de memoria que va alamcenar datos


//Asi se crea un arereglo o matriz elemento por elemento, no se puede que en nuna solavariable esten todos los nombres, en los corchetes se pone el indice que va a ocupar ese elemento en la matriz, aunwue tambien puedo dejar los corchetes vacios y el programa automaticamnete me asigna los indices desde el 0 en forma ascendente

$paises[0]="Mexico";
$paises[1]="Ecuador";
$paises[2]="Colombia";
$paises[3]="Chile";

print($paises[0]);

echo "<br>";

$datos_alumno[]="172363435";
$datos_alumno[]="Aaron Ortiz";
$datos_alumno[]="Programacion";

print($datos_alumno[0]);


// Los vectores Asociativos: Estos vectores nos ayudan cuando no sabes el indice del elemento al que queremos acceder o imprimir en pantalla, este vector asociativo nos ayuda a crear un vector comun pero con la diferencia de que no vamos a utilizar los indices para acceder los datos en cambio accederemos por medio de una clave tipo string

echo "<br>";
$meses['primero']="Enero";  //aqui en los corchetes en vez de poner el numero de indice ponemos una palabra clave en una commila
$meses['segundo']="Abril";
$meses['tercero']="Mayo";

print($meses['segundo']); //para imprimir una dato de un arreglo o acceder a este debemos poner la clave entre los corchetes

                                

                                //Otra forma de crear un Vector Asociaativo
//Otrea forma de crear este vector es usando la funcion array y en los parentesis primero debes poner la clave del elemento al que quieres acceder y luego el valor de ese datos y podemos poner todos los elementos en ese solo arreglo
echo "<br>";
$dias= array('lu' => "Lunes",
			 'ju' =>"Jueves",
			 'vie' => "Viernes");

print($dias['lu']);



?>
<body>

</body>
</html>