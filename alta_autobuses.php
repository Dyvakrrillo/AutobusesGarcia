<?php
include('funciones.php');
$menu = menu(2);


//Gestion de errores de validacion
$error_nombre='';
$error_color='';
$error_capacidad='';

if(isset($_GET['error'])){
    $error_nombre = substr($_GET['error'],0,1) ;
    $error_color = substr($_GET['error'],1,1) ;
    $error_capacidad = substr($_GET['error'],2,1) ;
}

if(isset($error_nombre) && $error_nombre==1){
    $error_nombre = 'Nombre requerido';
}
if(isset($error_color) && $error_color==1){
    $error_color = 'Color requerido';
}
if(isset($error_capacidad) && $error_capacidad==1){
    $error_capacidad = 'Capacidad requerido';
}

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
    <label for="Nombre">Nombre </label><div class="required"><?php echo $error_nombre?></div>
    <input type="text" name="Nombre" id="Nombre">


    <label for="Color">Color </label><div class="required"><?php echo $error_color?></div>
    <input type="text" name="Color" id="Color">


    <label for="Capacidad">Capacidad </label><div class="required"><?php echo $error_capacidad?></div>
    <input type="text" name="Capacidad" id="Capacidad">


    <input type="submit" value="Dar de alta" name="alta">

    <div class="clearfix"></div>

</form>

<article id="autobus">
    <img src="./images/autobus.png" alt="Autobuses">
</article>


</body>
</html>