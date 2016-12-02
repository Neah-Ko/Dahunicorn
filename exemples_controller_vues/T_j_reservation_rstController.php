<?php

class T_j_reservation_rstController extends Controller {

	public function reserver() {

		if(isset(parameters()['res_id']) && isset(parameters()['phr_plage'])){
			
			$res = new T_e_restaurant_res(parameters()['res_id']);
			$abo = new T_e_abonne_abo($_SESSION['abo_connecte_id']);
			$to = $abo->abo_mel;
			$objet = "Confirmation réservation";
			$message = "Votre réservation pour le restaurant ".$res->res_nom." à ".parameters()['phr_plage']." a bien été enregistrée.\r\nNous vous souhaitons une agréable expérience.\r\nL'équipe TripAdvisor";
			$header = "From: \"TripAdvisor\"<TripAdvisor_no-reply@tripadvisor.fr>";

			$boo = mail($to, $objet, $message, $header);

			$message = "Réservation effectuée. Vous recevrez un mail de confirmation de votre réservation";
			header("Location: ?r=message_succes_erreur/redirect&message=".$message);
		}
		else if(isset(parameters()['res_id'])){
			$dat = T_j_reservation_rst::findAllSelect("res_id=".parameters()['res_id']);
			$this->render("reserver", $dat);
		}
		else{
			$message = "Erreur lors du chargement de la page, veuillez réessayer";
			header("Location: ?r=message_succes_erreur/redirect&message=".$message);
		}

	}









}