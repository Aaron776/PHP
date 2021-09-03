<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php  

//La matriz Get lo que hace es obtener y alamcenar los datos que enviemos atraves de las variables que mandemos por enlaces,el método GET envía los datos usando la URL

//El metodo Post permite recibir los datos de todos los campos del formulario,el método POST los envía de forma que no podemos verlos (en un segundo plano u "ocultos" al usuario).

//El metodo request lo que hace es englobar toda la informacion que mandemos atraves de los Post y Get, es una tabla asociativa que reagrupa los métodos $_GET, $_POST y $_COOKIE

//Tanto GET como POST son métodos de envío de la información de los formularios válidos y ampliamente utilizados. Cada método tiene sus ventajas y sus inconvenientes y no se puede decir que uno sea mejor que otro. Elegir entre un método y otro depende de la aplicación concreta que se esté desarrollando y es algo que dentro de las empresas de desarrollos web suelen decidir los encargados del diseño de las aplicaciones.


print($_POST['correo']);
print("<br>");
print($_POST['mensaje']);




?>
<body>

</body>
</html>