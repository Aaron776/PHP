<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php 
//En esta pagina la direccion que mandemos pasara a esta pagina y luego la redireccionaremos y lo hacemos mediante la funcion header() y entre parentesis debemos poner dos parametros, el primero debe ser un string llamado Location: y luego poenmos la direccion de la pagina que queremos ir

// Si a lado de location ponemos una direccion web no importa que direccion ingresemos en nuestro html siempre nos dirigiremos a la pagina web que puse a lado de Location

header("Location: https://www.youtube.com/");
//Ahora si queremos dirigirnos a la direccion web que ingresamos en nuestro html lo que debemos hacer es alamcenar la direccion enviada con la funcion Request o Post y ponerle a aldo de Location

header("Location: https://$_REQUEST[web]");


//Se puede obtener el valor que mandemos mediante la matriz REQUEST pero eso es opcional 



 ?>
<body>

</body>
</html>