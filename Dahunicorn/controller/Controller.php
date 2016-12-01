<?php

namespace Dahunicorn\Controller;

$data = NULL;

class Controller {
	public function render($view, $d=null) {
		global $data;
		global $erreur;
		include_once PUBLIC_DIR."/view/header.php";
		$controller = get_class($this);
		$model_str = substr($controller, 0, strrpos($controller, "Controller"));
		$model_arr = explode("\\", $model_str);
		$model = $model_arr[ count( $model_arr ) - 1 ];
		$data = $d;
		include_once PUBLIC_DIR."/view/".strtolower($model)."/".$view.".php";
		include_once PUBLIC_DIR."/view/footer.php";
	}
}
