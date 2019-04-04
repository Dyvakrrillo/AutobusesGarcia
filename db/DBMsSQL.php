<?php

class DBMsSQL extends BaseDatos{

	protected $conexion;

	public function __construct($server,$user,$pass,$port=3306,$db,$tipo){
		parent::__construct($server,$user,$pass,$port,$db,'mssql');
		$this->conexion = mssql_connect($this->server.';'.$this->port,$this->user,$this->pass);

		mssql_select_db($this->db);
	}


	public function setQuery($query){
		//$query = mysql_real_escape_string($query);
		return $this->idConsulta = mssql_query($query);
	}

	public function queryToArray(){
		return mssql_fetch_assoc($this->idConsulta);
	}

	public funtion __destruct(){
		mssql_close($this->conexion);
	}

	public funtion verConfiguracion(){
		parent::verConfiguracion();
	}

	public function consulta($consulta){
		
		$this->conexion('localhost','root','bus',3306);
		$this->setQuery($consulta);
	}
}

?>