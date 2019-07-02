<?php
require "./config/Route.php";
require "./controllers/HomeController.php";

$route = new Route();
$home = new Homecontroller();

$route->register($home, "GET");

$route->find($_GET["controller"]);

?>