
<?php  
//Un modificador de acceso permite establecer si los atributos y funciones de nuestras clases pueden ser publicos (public) o privados (private), cuando no definimos un modificador de acceso este lenguaje de programacion por defecto lo agrega en publico tanto en los atributos como en las funciones, estos modificadores de acceso lo que hacen es encapsular los atributos o metodos en caso de que se ponga el private y no sera accedido por un miembro que no sea de esa clase




include("Persona.class.php");
$sujeto=new Persona("Aron Ortiz",23,"Amaguaña"); //aqui en los parentesis se llenan los valores para el metodo construcctor de la clase Persona
print($sujeto->name);
print("<br>");
$sujeto->despedir();



?>
