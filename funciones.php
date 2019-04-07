<?php

include('./dbPDO/BaseDatos.php');
include ('./dbPDO/DBMySQL.php');
include ('./Autobuses.php');
require('./dbPDO/Validation.php');


/*Si vengo de dar de alta un bus*/
if(isset($_POST["alta"])){
    validaAltaAutobus();
//    altaAutobus();
}

/*Si vengo de editar un bus*/
if(isset($_POST["editar"])){
    editarAutobus();
}

/*Si vengo de borrar un bus*/
if(isset($_GET["borrar"])){
    borrarAutobus();
}

function menu($numero){
    $class1='';$class2='';$class3='';$class4='';$class5='';
    switch ($numero){
        case 1:
            $class1='active';
            break;
        case 2:
            $class2='active';
            break;
        case 3:
            $class3='active';
            break;
        case 4:
            $class4='active';
            break;
        case 5:
            $class5='active';
            break;
    }

    $menu = '<li><a href="index.php" class="'.$class1.'">Inicio</a></li>
			<li><a href="alta_autobuses.php" class="'.$class2.'">Alta autobuses</a></li>
			<li><a href="ver_autobuses.php" class="'.$class3.'">Ver autobuses</a></li>
			<li><a href="alta_conductores.php" class="'.$class4.'">Alta conductores</a></li>
			<li><a href="ver_conductores.php" class="'.$class5.'">Ver conductores</a></li>';
    return $menu;
}

function conexionBD($consulta){
	$dbLocal = new DBMySQL('localhost','root','',3306,'bus','mysql');
	$dbLocal->setQuery($consulta);
	return $dbLocal;
}

function validaAltaAutobus(){

    $validacion = new Validation();

    // Error de nombre
        $nombre = $_POST['Nombre'];
        $error_nombre = $validacion->ValidaTexto($nombre, false, false, true, 'Nombre requerido');


    // Error de color
        $color = $_POST['Color'];
        $error_color = $validacion->ValidaTexto($color, false, false, true, 'Color requerido');


    // Error de capacidad
        $capacidad = $_POST['Capacidad'];
        $error_capacidad = $validacion->ValidaTexto($capacidad, false, false, true, 'Color requerido');

    $res='';

    if($error_nombre==1 && $error_color==1 && $error_capacidad==1 ){
        altaAutobus($nombre,$color,$capacidad);
    }

    if ($error_nombre==1){
        $res.='0';
    }else{
        $res.='1';
    }
    if ($error_color==1){
        $res.='0';
    }else{
        $res.='1';
    }
    if ($error_capacidad==1){
        $res.='0';
    }else{
        $res.='1';
    }
    header('Location:alta_autobuses.php?error='.$res);

}

function altaAutobus($nombre,$color,$capacidad){
    $autobus = new Autobuses($nombre,$color,$capacidad);
    $consulta = $autobus->darDeAlta();
    conexionBD($consulta);
    header('Location:ver_autobuses.php');
}


function verAutobuses(){
	$consulta = 'SELECT * from autobuses';
	$db = conexionBD($consulta);
	$resultado = '';
    while ($donnees = $db->queryToArray()){
		$resultado .= '<h3>Nombre : <span>'.$donnees['Nombre'].'</span>
                            <a href="editar_autobuses.php?id='.$donnees['ID'].'" class="editar">
                               <img src="./images/editar.png">
                            </a>
                        </h3>';
		$resultado .= '<h4>Color : <span>'.$donnees['Color'].'</span></h4>';
		$resultado .= '<h4>Capacidad : <span>'.$donnees['Capacidad'].'</span></h4>';
	}
	
	return $resultado;
}

function cargarAutobusEditar($id){
    $consulta = "SELECT * FROM autobuses WHERE ID='$id'";
    $db = conexionBD($consulta);
    while ($donnees = $db->queryToArray()) {
        $nombre = $donnees['Nombre'];
        $color = $donnees['Color'];
        $capacidad = $donnees['Capacidad'];
    }
    $resultado=Array($nombre,$color,$capacidad);
    return $resultado;
}


function editarAutobus(){
    $id = htmlentities($_POST['id']);
    $nombre = htmlentities($_POST["Nombre"]);
    $color = htmlentities($_POST["Color"]);
    $capacidad = htmlentities($_POST["Capacidad"]);

    $consulta = "UPDATE autobuses 
                 SET Nombre='$nombre',Color='$color',Capacidad='$capacidad'
                 WHERE ID='$id'";

    conexionBD($consulta);
    header('Location:ver_autobuses.php');
}

function borrarAutobus(){
    $id = htmlentities($_GET['borrar']);
    $consulta = "DELETE FROM autobuses 
                 WHERE ID='$id'";

    conexionBD($consulta);
    header('Location:ver_autobuses.php');

}


?>