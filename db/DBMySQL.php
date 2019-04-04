<?php

class DBMySQL extends BaseDatos{

	protected $conexion;

	public function __construct($server,$user,$pass,$port=3306,$db,$tipo){
		parent::__construct($server,$user,$pass,$port,$db,'mysql');
		$this->conexion = mysql_connect($this->server.';'.$this->port,$this->user,$this->pass);

		mysql_select_db($this->db);
	}


	public function setQuery($query){
		//$query = mysql_real_escape_string($query);
		return $this->idConsulta = mysql_query($query);
	}

	public function queryToArray(){
		return mysql_fetch_assoc($this->idConsulta);
	}

	public function __destruct(){
		mysql_close($this->conexion);
	}

	public function verConfiguracion(){
		parent::verConfiguracion();
	}

	public function consulta($consulta){
		
		$this->conexion('localhost','root','bus',3306);
		$this->setQuery($consulta);
	}
}

?>