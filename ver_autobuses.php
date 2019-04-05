<?php
	include('funciones.php');
    $menu = menu(3);
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
		<ul>
			<?php echo $menu ?>
		</ul>
	</nav>
	
	<section>
		<?php echo $resultado ?>
	</section>

	<article id="ver_autobuses">
		<img src="./images/autobus.png" alt="Autobuses">
	</article>

	<div class="nuevobus">
		<a href="alta_autobuses.php"><img src="./images/nuevobus.png" alt="Dar de alta autobus"></a>
	</div>

</body>
</html>