<?php

use Dahunicorn\Controller\SiteController as FallbackCtrl;

if (isset($_GET["r"])) {
	$route = $_GET["r"];
	if (strpos($route,"/") === FALSE)
		list($controller, $action) = array($route, "index");
	else list($controller, $action) = explode("/", $route);

	$controller = "\\Dahunicorn\\Controller\\".ucfirst($controller)."Controller";
	$c = new $controller();
	$c->$action();
} else {
	$c = new FallbackCtrl();
	$c->index();
}
