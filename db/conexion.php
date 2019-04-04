<?php
include('BaseDatos.php');
include ('DBMySQL.php');

//$prueba = new BaseDatos('localhost','root','',3306,'bus','mysql');
//$prueba->verConfiguracion();

$dbLocal = new DBMySQL('localhost','root','',3306,'bus');
//$dbLocal->setQuery('SELECT * from autobuses');
$dbLocal->verConfiguracion();

echo '<pre>';
print_r($dbLocal->queryToArray());
echo '</pre>';
?>