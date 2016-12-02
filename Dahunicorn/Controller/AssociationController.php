<?php
namespace Dahunicorn\Controller;

/**
 * Controlleur gérant l'authentification (login, register...)
 */
class AssociationController extends Controller
{
	public function Register() {
		$this->render("create");
		if(isset($_POST['enregistrer']) 
			&& $_POST['enregistrer'] == 'Enregistrer') {
			echo("Bravo !");
		}
	}

}