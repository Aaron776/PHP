<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php 
/*Los arreglo son un conjunto de datos almacenados en una sola variable, la estructura para hacer un arreglo es de la siguiente forma:
 Colocamos el indice en donde se va a color el valor en el arreglo dentro de unos corchetes y luego ponemos el valor 
*/


$nombres[0]=1;
$nombres[1]=4;
$nombres[2]=6;
$nombres[3]=7;

print("El valor de la variable en la posicion 0 es: $nombres[0] <br>");
print("El valor de la variable en la posicion 1 es: $nombres[1]");


// Otra forma de crear arrglos es usar el metodo array()y dentro de los parentesis ponemos los elementos
$frutas=array("Pera","Sandia","Banano","Manzana");
echo "<br>";
print_r($frutas); // para imprimir un arreglo usamos el print_r()

echo "<br>";
print($frutas[3]."<br>");



//Si Queremos Recorrer arreglos en php podemos usar un for() y dentro usando el metodo count() y dentro del parentesis ponemos el nombre del arreglo que queremos recorrer
for ($item=0; $item <count($frutas) ; $item++) { 
	echo $frutas[$item]."<br>";
}
 ?>
<body>

</body>
</html>