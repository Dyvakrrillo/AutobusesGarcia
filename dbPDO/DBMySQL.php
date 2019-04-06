<?php

class DBMySQL extends BaseDatos{

	protected $conexion;
	protected $reponse;

	public function __construct($server,$user,$pass,$port=3306,$db,$tipo){
		parent::__construct($server,$user,$pass,$port,$db,'mysql');

        try{
        		$this->conexion =  new PDO('mysql:host='.$server.';dbname='.$db.';charset=utf8',$user,$pass);
        }catch (Exception $e){
        	die('Erreur : '.$e->getMessage());
        }

	}

	public function setQuery($query){
		$this->reponse = $this->conexion->query($query);
	}

	public function getResponse(){
		return $this->reponse;
	}

	public function queryToArray(){
        return $this->reponse->fetch();
}

	public function verConfiguracion(){
		parent::verConfiguracion();
	}

	public function consulta($consulta){

		$this->conexion($this->server,$this->user,$this->db,$this->port);
		$this->setQuery($consulta);
	}

    public function __destruct(){
        $this->reponse->closeCursor();
    }

}

?>