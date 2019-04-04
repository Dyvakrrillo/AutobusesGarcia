<?php

include('./dbPDO/BaseDatos.php');
include ('./dbPDO/DBMySQL.php');


function conexionBD($consulta){
	$dbLocal = new DBMySQL('localhost','root','',3306,'bus','mysql');
	$dbLocal->setQuery($consulta);
	return $dbLocal;
}

function verAutobuses(){
	$consulta = 'SELECT * from autobuses';
	$db = conexionBD($consulta);
	$reponse = $db->getResponse();
	
	$resultado = '';
	while ($donnees = $reponse->fetch()){
		$resultado .= '<h3>Nombre : <span>'.$donnees['Nombre'].'</span><a href="editar_autobuses.php?id='.$donnees['ID'].'" class="editar"><img src="./images/editar.png"></a></h3>';
		$resultado .= '<h4>Color : <span>'.$donnees['Color'].'</span></h4>';
		$resultado .= '<h4>Capacidad : <span>'.$donnees['Capacidad'].'</span></h4>';
	}
	
	return $resultado;
}

function menu(){
	$menu = '<li><a href="index.php">Inicio</a></li>
			<li><a href="alta_autobuses.php">Alta autobuses</a></li>
			<li><a href="ver_autobuses.php">Ver autobuses</a></li>
			<li><a href="alta_conductores.php">Alta conductores</a></li>
			<li><a href="ver_conductores.php">Ver conductores</a></li>';
	return $menu;
}



?>