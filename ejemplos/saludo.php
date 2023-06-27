<?php
	$TittlePage = "Curso de PHP";
	$nombre = "Dennis";
	//Se puede usar un acumulador cuando se trata de enteros $edad++
	$edad = 30;
	$esProgramador = false;
	$nombre = "Martin";
	//Aqui php renderiza en html e imprime el texto con las variables.
	echo "Bienvenido " . $nombre . "<br>" . "Tu edad es : " . $edad . " años";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Forma extensa 
	<title><?php echo $TittlePage; ?></title> -->
	
	<!-- Forma comprimida --> 
	<title><?=$TittlePage?></title>
</head>
<body>
	
	<br/>
	Hola mundo de PHP
	<br/>
	<a href="index.php">Volver a la pagina INICIO</a>
	

</body>
</html>
