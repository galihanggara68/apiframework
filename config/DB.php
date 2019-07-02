<?php

class Connector {
	private $_con;
	
	public function __construct(){
		$this->_con = new mysqli("localhost", "root", "", "penjualan");
	}
	
	public function getConnection(){
		return $this->_con;
	}
}

?>