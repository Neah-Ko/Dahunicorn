<?php

namespace Dahunicorn\Controller;

$data = NULL;

class Controller {
	public function render($view, $d=null) {
		global $data;
		global $erreur;
		include_once PUBLIC_DIR."/view/header.php";
		$controller = get_class($this);
		$model = substr($controller, 0, strpos($controller, "Controller"));
		$data = $d;
		include_once PUBLIC_DIR."/view/".strtolower($model)."/".$view.".php";
		include_once PUBLIC_DIR."/view/footer.php";
	}
}
