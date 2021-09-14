<?php 
//La inicializacion de atributos se da cuando creamos el metodo constructor y dentro de los parentesis ponemos los atributos o variable que queremos inicializar y estas no tienen nada que ver con los otros atributos que antes definimos,luego procedemos a inicializar las variables con la palabra this, cuando ponemos un metodo constructor con variables debemos inicializar las variables cuando creemos el objeto caso contrario no funcionara

include("Persona.class.php");
$sujeto1=new Persona("Andres Quilca",23,"El Valle de los Chillos");

print($sujeto1->name);
echo "<br>";
echo $sujeto1->direccion;
 ?>