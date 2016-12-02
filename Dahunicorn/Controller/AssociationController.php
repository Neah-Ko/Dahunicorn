<?php
namespace Dahunicorn\Controller;

/**
 * Controlleur gérant l'authentification (login, register...)
 */
class AssociationController extends Controller
{
	public function Register() {
		if(isset($_POST['enregistrer']) 
			&& $_POST['enregistrer'] == 'Enregistrer') {
			if(isset($_POST['siren']) && !empty($_POST['siren']) && isset($_POST['nom']) && !empty($_POST['nom'])
				&& isset($_POST['tel']) && !empty($_POST['tel']) && isset($_POST['email']) && !empty($_POST['email'])
				&& isset($_POST['desc']) && !empty($_POST['desc']) && isset($_POST['mdp']) && !empty($_POST['mdp'])
				&& isset($_POST['mdp_con']) && !empty($_POST['mdp_con']) && isset($_POST['adr_rue']) && !empty($_POST['adr_rue'])
				&& isset($_POST['adr_cp']) && !empty($_POST['adr_cp']) && isset($_POST['adr_vil']) && !empty($_POST['adr_vil'])) {
				if($_POST['mdp'] == $_POST['mdp_con']) {
					$assoc = new Association();
					$assoc->association_siren = $_POST['siren'];
					$assoc->association_tel = $_POST['tel'];
					$assoc->association_nom = $_POST['nom'];
					$assoc->association_description = $_POST['desc'];
					$assoc->association_mail = $_POST['email'];
					$assoc->association_rue = $_POST['adr_rue'];
					$assoc->association_complement = $_POST['adr_comp'];
					$assoc->association_cp = $_POST['adr_cp'];
					$assoc->association_ville = $_POST['adr_vil'];
					header("Location: ./?r=Site");
				} else {
					$erreur = "Les mots de passes sont différents";
				}
			} else {
				$erreur = "L'un des champs est vide";
			}
		}
		$this->render("create");
	}

}