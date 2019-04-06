<?php
    include('funciones.php');

    $menu = menu('');

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }else{
        header('Location:ver_autobuses.php');
    }
    $resultado = cargarAutobusEditar($id);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Autobuses</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
    <h1><img src="./images/logo.png" alt="Logo"></h1>
    <h2>Editar Autobus</h2>
</header>

<nav>
    <ul>
        <?php echo $menu ?>
    </ul>
</nav>

<form method="post" action="funciones.php">
    <label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre" value="<?php echo $resultado[0]?>">

    <label for="Color">Color</label>
    <input type="text" name="Color" id="Color" value="<?php echo $resultado[1]?>">

    <label for="Capacidad">Capacidad</label>
    <input type="text" name="Capacidad" id="Capacidad" value="<?php echo $resultado[2]?>">

    <input type="submit" value="Guardar" name="editar" class="boton_editar">
    <a href="funciones.php?borrar=<?php echo $id?>" class="borrar">Eliminar</a>

    <div class="clearfix"></div>

</form>

<article id="ver_autobuses">
    <img src="./images/autobus.png" alt="Autobuses">
</article>


</body>
</html>