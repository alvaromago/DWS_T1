<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<title>Ejemplo PHP</title>
</head>

<body>
	<h1>Ejemplo PHP</h1>
	<p>Este es un ejemplo de página con código PHP.</p>

	<?php
	// Comentario de una línea
	# También comentario de una línea
	/* Comentario de varias lineas */
	echo "<p>Esto es un <b>texto escrito</b> en PHP.</p>";
	// Como nombrar variables
	$x = 0;
	$X;
	$_x;
	$x = '0';
	$cad1 = "Hola, tienes $x puntos<br>"; // Este si muestra el contenido
	$cad2 = 'Hola, tienes $x puntos<br>'; // Este no
	echo $cad1;
	echo $cad2;
	// Arrays
	$array1 = array(
		"clave1" => "valor1",
		"clave2" => "valor2"
	); // Forma primivita, no utilizar

	$array2 = [
		"clave1" => "valor1",
		"clave2" => "valor2"
	];

	$diaSemana = [];
	$diaSemana[6] = "Domingo";
	$diaSemana[3] = "Jueves";
	$diaSemana[] = "Lunes"; // Lo mete en la primera posición vacía que encuentre

	$datosPersonales['Nombre'] = "Alvaro";
	$datosPersonales['Sexo'] = "Hombre";
	$datosPersonales['Telefono'] = "635924643";

	// Funciones
	function sumar($param1, $param2)
	{
		$result = $param1 + $param2;
		return $result;
	}
	echo "El resultado de la suma es: " . sumar(4, 5) . "<br><br>";

	foreach ($_SERVER as $key => $valor) {
		echo "SERVER[$key] = $valor<br>";
	}


	?>
</body>

</html>