<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<?php  

//El switch-case lo que nos permite es evaluar una variable y dependiendo de los valores que pueda tener podremos hacer una accion u otra

//En el parentesis a lado sel switch poenmos la variable que queremos evaluar, a lado de la opcion case ponemos el valor que esperamos obtener para hacer unas ciertas intruccion y la parte default lo que no dice es que si no cumple con ninguno de los case hara otra accion y se cortara el switch case

switch ($numero=22) {
	case '23':
		print("El numero es 23");
		break;
	case '22':
		print("El numero es 22");
		break;
	default:
		print("El numero no pertence a esta seccion");
		break;
	}

	echo "<br>";


	

     $nombre="Raul";
	switch ($nombre) {
		case 'Raul':
			echo "Si eres Raul";
			break;
		
		default:
			echo "No eres Raul definitivamente";
			break;
	}

echo "<br>";

									//Switch Case con Html usando el metodo Post o REQUEST para recibir informacion

		$calificacion=$_REQUEST['calificacion'];

		switch ($calificacion) {
			case 0:
				print("Perdio el semestre");
				break;
			case 1:
				print("Perdio el semestre");
				break;
			case 2:
				print("Perdio el semestre");
				break;
			case 3:
				print("Perdio el semestre");
				break;
			case 4:
				print("Se quedo a supletorio");
				break;
			case 5:
				print("Se quedo a supletorio");
				break;
			case 6:
				print("Se quedo a supletorio");
				break;
			case 7:
				print("Paso el semestre");
				break;
			case 8:
				print("Paso el semestre");
				break;
			case 9:
				print("Paso el semestre con credenciales");
				break;
			case 10:
				print("Paso el semestre de forma excelente");
				break;
			
			default:
				print("Digite bien la calificacion");
				break;
		}






?>
<body>

</body>
</html>