<?php

/**
*@author Muchamad Galih Anggara
*/

class Layout{
	private $_content;
	private $_sections = array();
	private $_layoutName;
	private $_items = array();
	private $_states;
	
	/**
	* @param string layoutName
	*/
	public function __construct($layoutName){
		$this->_layoutName = $layoutName;
		$this->_states = include "../states/index.php";
	}

	public function addItem($name, $value){
		$this->_items[$name] = $value;
	}
	
	public function getItem($name){
		return $this->_items[$name];
	}
	
	public function content($callback = null, $itemName = null){
		if($callback == null){
			return $this->_content;
		}else{
			$this->_getContent(null, $callback, $itemName);
		}
	}
	
	public function section($name, $callback = null, $itemName = null){
		if($callback == null){
			return $this->_sections[$name]; 
		}else{
			$this->_getContent($name, $callback, $itemName);
		}
	}
	
	private function _getContent($name = null, $callback, $itemName = null){
		ob_start();
		
		$callback(($itemName != null ? $this->_items[$itemName] : $this->_items));
		if($name != null){
			$this->_sections[$name] = ob_get_contents();
		}else{
			$this->_content = ob_get_contents();
		}
		ob_end_clean();
	}
	
	public function render(){
		include $this->_layoutName.".php";
	}
	
	public function addStateToItems($stateKey, $itemKey = null){
		$this->addItem((($itemKey != null) ? $itemKey : $stateKey), $this->_states["$stateKey"]());
	}
	
	public function fetch($endPoint){
		return $this->_states["fetch"]($endPoint);
	}
}
?>