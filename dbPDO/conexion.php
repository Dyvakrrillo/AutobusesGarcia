<?php
include('BaseDatos.php');
include ('DBMySQL.php');

//$prueba = new BaseDatos('localhost','root','',3306,'bus','mysql');
//$prueba->verConfiguracion();

$dbLocal = new DBMySQL('localhost','root','',3306,'bus','mysql');
$dbLocal->setQuery('SELECT * from autobuses');
$dbLocal->verConfiguracion();

echo '<pre>';
print_r($dbLocal->queryToArray());
echo '</pre>';


/*
try{
	// On se connecte a mysql 
	$dbLocal = new PDO('mysql:host=localhost;dbname=bus;charset=utf8','root','');	

}catch (Exception $e){
	die('Erreur : '.$e->getMessage());
}

// On recupere le contenu de la table
$reponse = $dbLocal->query('SELECT * from autobuses');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Bus</strong> : <?php echo $donnees['Nombre']; ?><br />
    Color : <?php echo $donnees['Color']; ?>, Capacidad : <?php echo $donnees['Capacidad']; ?><br />

<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
*/


?>