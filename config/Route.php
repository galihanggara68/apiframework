<?php

class Route{
	private $controllers = [];
	
	public function __construct(){
		
	}
	
	public function register($controller, $method){
		array_push($this->controllers, ["controller" => $controller, "method" => $method]);
	}
	
	public function find($controllerName){
		foreach($this->controllers as $controller){
			if(get_class($controller["controller"]) === $controllerName){
				if($controller["method"] === $_SERVER["REQUEST_METHOD"]){
					$request = null;
					switch($_SERVER['REQUEST_METHOD']){
						case 'GET': $request = &$_GET; break;
						case 'POST': $request = &$_POST; break;
					}
					$fnName = $_GET["method"];
					$controller["controller"]->$fnName($request);
				}
			}
		}
	}
}

?>