<?php

namespace Dahunicorn\Controller;

/**
 * Controlleur gérant toutes les actions liées à un lieu.
 */
class LieuController extends Controller
{
    public function index() {
        $this->render("index");
    }



    public function view_fiche(){
    	$this->render("fiche");
    }

    public function addReserve(){
    	//$this->render("fiche");
    	if (isset(parameters()["nbpersonnes"]) ) {

    		$d = typelieu::findAllSelect("idlieu=2 and idtype=1");//parameters()['res_id']
print_r($d);
			//$reserv = new T_e_reserv_pho();
			$d->typelieu_quantite_estimee = $d->typelieu_quantite_estimee + parameters()["nbpersonnes"];
			//$reserv->pho_url = "images/".time();

			// $nom = $reserv->pho_url;
			// $resultat = move_uploaded_file($_FILES['pho_urlf']['tmp_name'],$nom);

			// $message = "Votre photo a été correctement ajouté";
			// header("Location: ?r=message_succes_erreur/redirect&message=".$message);

    	}
    	else {
    		//$this->render("add_resto");
    	}
    }

    public function seachLieu(){

    }

}
