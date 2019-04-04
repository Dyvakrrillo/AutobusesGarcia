<?php
class BaseDatos{
	protected $server;
	protected $user;
	protected $pass;
	protected $port;
	protected $db;
	public $tipo;

	public function __construct($server,$user,$pass,$port,$db,$tipo){
		$this->server = $server;
		$this->user = $user;
		$this->pass = $pass;
		$this->port = $port;
		$this->db = $db;
		$this->tipo = $tipo;
	}

	public function verConfiguracion(){
		echo $this->server.':'.$this->port.'</br>';
		echo $this->user.'</br>';
		echo $this->db.'</br>';
		echo $this->tipo.'</br>';
	}

}

?>
