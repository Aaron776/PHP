<?php  

$mensaje="Hoy quiero aprender";

// Metodo strlen(): es para saber la longitud o cantidad de caracteres de una cadena o string, en el aprentresis ponemos la variable que contiene al string o la cadena directamente

print(strlen($mensaje));
echo "<br>";
print(strlen("Hola"));

echo "<br>";

//Metodo strtoupper():	Devuelve la cadena en mayúsculas
print(strtoupper($mensaje));
echo "<br>";
//Metodo strtolower():	Devuelve la cadena en minúsculas
print(strtolower($mensaje));
echo "<br>";

//Metodo str_word_count():Estye metodo devuelvo la cantidad de palabras que tiene la cadena
print(str_word_count($mensaje));
echo "<br>";

//Metodo strrev(): Este metodo permite dar la vuelta a la cadena o al string
print(strrev($mensaje));
echo "<br>";

//Metodo trim(): Devuelve la misma cadena pero eliminando los espacios del principio y el final
print(trim($mensaje));
echo "<br>";

//Metodo strpos(): este metodo nos devuelve la posicion o indice de donde se encuentra la palabra o caracter que estamos buscando dentro de esa cadena, en el parentesis ponemos dos argumentos el primero es ala cadena donde queremos buscar y el segundo parametro ponemos la palabra o caracter que queremos buscar u obtner su posicion
print(strpos($mensaje,"Hoy"));
echo "<br>";


// Metodo str_replace():Este metodo permite remplzar una plabara por otra dentro de una cadena, en el partentesis ponemos tres argumento el primero es la palabra que va hacer reemplzada de la cadena, el segundo argumento sera la plabara que queremos poner dentro de la cadena y el tercer argumento sera la cadena en donde se realizara la aacion
print(str_replace("Hoy","Jose",$mensaje));
echo "<br>";

?> 