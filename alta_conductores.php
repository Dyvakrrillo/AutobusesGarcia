<?php
	include('funciones.php');
	$resultado = verAutobuses();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ver Autobuses</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1><img src="./images/logo.png" alt="Logo"></h1>
		<h2>Ver Autobuses</h2>
	</header>

	<nav>
		
	</nav>
	
	<section>
		<?php echo $resultado ?>
	</section>

	<article id="ver_autobuses">
		<img src="./images/autobus.png" alt="Autobuses">
	</article>
</body>
</html>