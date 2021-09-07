<?php  

//Las clases se crean en archivos aparte y par crear objetos de una clase en PHP se debe poner primero la palabra include() y dentro del parentesis ponemos el nombnre del archivo que contiene la clase a la cual queremos hacer objetos luego ponemos ".class" y luego ".php"
   	   
include("POO.class.php");

//Para crear un objeto debemos hacerlo como si fuera una variable, ponemos el nombre de ese obeto y luego la palabra new y a aldon poenmos el nombre de la clase

$ferrari=new Automovil();

//Para poder llamar e imprimir a un atributo de una clase se hace de la siguiete forma: poniendo el nombre del objeto y con una flecha a lado ubicamos al atributo que queremos llamar

print($ferrari->color);
print("<br>");
print($ferrari->precio);
   	   
//Para poder llamar e imprimir a un atributo de una clase se hace de la siguiete forma : poniendo el nombre de la funcion y con una flecha a lado ubicamos el nombre de la funcion que queremos llamar
echo "<br>";
$ferrari->acelerar();
echo "<br>";
$ferrari->frenar();

?>