<?php
include('funciones.php');
$menu = menu(2);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Alta Autobuses</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <h1><img src="./images/logo.png" alt="Logo"></h1>
    <h2>Alta Autobuses</h2>
</header>

<nav>
    <ul>
        <?php echo $menu ?>
    </ul>
</nav>

<form method="post" action="funciones.php">
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre">

    <label for="Color">Color</label>
    <input type="text" name="Color" id="Color">

    <label for="Capacidad">Capacidad</label>
    <input type="text" name="Capacidad" id="Capacidad">

    <input type="submit" value="Dar de alta" name="alta">

    <div class="clearfix"></div>

</form>

<article id="autobus">
    <img src="./images/autobus.png" alt="Autobuses">
</article>


</body>
</html>