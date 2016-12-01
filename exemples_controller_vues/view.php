<?php
	$montri = $globOption[0];
	$page = $globOption[1];
	$langue = $globOption[2];
	$isProfil = $globOption[3];
	$aucunAvisProfil = null;
	if(isset($globOption[5])){
		$aucunAvisProfil = $globOption[5];
	}

	if($isProfil == 'isProfil'){
		$route = 'T_e_abonne_abo/viewProfil&abo_id='.$globOption[4];
	}
	else{
		$route = 'T_e_avis_avi/view';
	}

?>
<div class="divH2">

	<h2>Avis restaurant</h2>

</div>


<div class="divTriGlob">
	<div class="divTriAvis">
		<form>
			<label for="tri">Trier par : </label>
			<select name="tri" onChange="location.href=''+this.options[this.selectedIndex].value+'';">
		        <option <?php if($montri==3) echo "selected='selected'"; ?> value='?r=<?php echo $route; ?>&id=<?php echo parameters()['id']; ?>&montri=3&page=1&langue=<?php echo $langue; ?>'>Récent</option>
		        <option <?php if($montri==1) echo "selected='selected'"; ?> value='?r=<?php echo $route; ?>&id=<?php echo parameters()['id']; ?>&montri=1&page=1&langue=<?php echo $langue; ?>'>Note croissante</option>
		        <option <?php if($montri==2) echo "selected='selected'" ?> value='?r=<?php echo $route; ?>&id=<?php echo parameters()['id']; ?>&montri=2&page=1&langue=<?php echo $langue; ?>'>Note décroissante</option>
		    </select>

		</form>
	</div>

	<div class="divTriAvis">
		<form>
			<label for="langue">Langue : </label>
			<select name="langue" onChange="location.href=''+this.options[this.selectedIndex].value+'';">
		        <option <?php if($langue=='Toutes') echo "selected='selected'"; ?> value='?r=<?php echo $route; ?>&id=<?php echo parameters()['id']; ?>&montri=<?php echo $montri; ?>&page=1&langue=Toutes'>Toutes</option>
		        <option <?php if($langue=='French') echo "selected='selected'"; ?> value='?r=<?php echo $route; ?>&id=<?php echo parameters()['id']; ?>&montri=<?php echo $montri; ?>&page=1&langue=French'>French</option>
		        <option <?php if($langue=='English') echo "selected='selected'"; ?> value='?r=<?php echo $route; ?>&id=<?php echo parameters()['id']; ?>&montri=<?php echo $montri; ?>&page=1&langue=English'>English</option>
		    </select>

		</form>
	</div>
</div>

<?php
	
	if($isProfil != 'isProfil' || $aucunAvisProfil!='aucunAvis'){

		$compt=1;

		foreach ($data as $globkey => $globvalue) {

			if($compt<=$page*5 && $compt>($page-1)*5){
			 ?>
				<div class="unAffichage">

					<h3 class='titre_avis'><?php echo $globvalue['$avi']['avi_titre'];?></h3>

					<?php
					if ($globvalue['$pho'] != null) {
						echo "<img classe='imgAvis' src='".$globvalue['$pho']."'/>";
					}
					?>
					<table class="myTable">
						<tr class="myTr">
						<?php
							if($isProfil != 'isProfil'){
								?>
								<td class="myTdGauche">Auteur : </td>
								<td class="myTdDroite"><?php echo $globvalue['$abo']->abo_pseudo; ?>

								<input type="button" name="voirProfil" value="Voir profil" onclick="window.open(href='?r=T_e_abonne_abo/viewProfil&abo_id=<?php echo $globvalue['$abo']->abo_id; ?>&id=<?php echo $globvalue['$abo']->abo_id; ?>')" class="myButtonLien">
								<?php 
								}
								else{
									?>
									<td class="myTdGauche">Restaurant : </td>
									<td class="myTdDroite"><a href="?r=Search/view&res_id=<?php echo $globvalue['$res'][0]['res_id']; ?>"><?php echo $globvalue['$res'][0]['res_nom']; ?></a></td>
									<?php
								}
								?>
							</td>
						</tr>
						<tr class="myTr">
							<td class="myTdGauche">Langue : </td>
							<td class="myTdDroite"><?php echo $globvalue['$avi']['avi_langue']; ?></td>
						</tr>
						<tr class="myTr">
							<td class="myTdGauche">Nb votes utiles : </td>
							<td class="myTdDroite"><?php echo $globvalue['$uti']; ?></td>
						</tr>
						<tr class="myTr">
							<td class="myTdGauche">Plats conseillés : </td>
							<td class="myTdDroite"><?php echo $globvalue['$avi']['avi_platsconseilles']; ?></td>
						</tr>
						<tr class="myTr">
							<td class="myTdGauche">Type de repas : </td>
							<td class="myTdDroite"><?php echo $globvalue['$rep']->rep_libelle; ?></td>
						</tr>
						<tr class="myTr">
							<td class="myTdGauche">Note globale : </td>
							<td class="myTdDroite"><?php echo $globvalue['$avi']['avi_noteglobale']; ?> /5</td>
						</tr>
						<tr class="myTr">
							<td class="myTdGauche">Date : </td>
							<td class="myTdDroite"><?php echo $globvalue['$avi']['avi_date']; ?></td>
						</tr>
						<tr class="myTr">
							<td class="myTdGauche">Période de visite : </td>
							<td class="myTdDroite"><?php echo $globvalue['$per']->per_mois."/".$globvalue['$per']->per_annee; ?></td>
						</tr>
						<tr class="myTr">
							<td class="myTdGauche">Avis : </td>
							<td class="myTdDroite"><?php echo $globvalue['$avi']['avi_detail']; ?></td>
						</tr>

						<?php
						if($globvalue['$nar'] != null){
							foreach ($globvalue['$nar'] as $keyNAR => $valueNAR) {
								?>
								<tr class="myTr"><td class="myTdGauche"><?php echo $keyNAR." : "; ?></td><td class="myTdDroite"><?php echo $valueNAR ?> /5</td></tr>
								<?php
							}
						}
						?>
						<?php
						if($globvalue['$req'] != null){
							foreach ($globvalue['$req'] as $keyQUE => $valueQUE) {
								?>
								<tr class="myTr"><td class="myTdGauche"><?php echo $keyQUE." : "; ?></td><td class="myTdDroite"><?php echo $valueQUE ?></td></tr>
								<?php
							}
						}
						if(isset($globvalue['$avi']['avi_reponserestaurateur'])){
						?>
						<tr class="myTr">
							<td class="myTdGauche">Réponse restaurateur : </td>
							<td class="myTdDroite"><?php echo $globvalue['$avi']['avi_reponserestaurateur']; ?></td>
						</tr>
						<?php
					}
					?>	
					</table>
					<br/><br/>	
					<?php

					if(isset($_SESSION['rsr_connecte_id'])){
						$res = new T_e_restaurant_res(parameters()['id']);

						if($_SESSION['rsr_connecte_id'] == $res->rsr_id->rsr_id ){
							if($globvalue['$avi']['avi_reponserestaurateur'] == null){
								?>
		               				<input type="button" name="repavis" value="Répondre" onclick="window.open(href='?r=T_e_avis_avi/repaff&id=<?php echo $globvalue['$avi']['avi_id']; ?>')" class="myButtonLien">
								<?php
							}
							else{
								?>
		               				<input type="button" name="repavis" value="Modifier réponse" onclick="window.open(href='?r=T_e_avis_avi/repaff&id=<?php echo $globvalue['$avi']['avi_id']; ?>')" class="myButtonLien">
								<?php
							}
						}
					}
					?>
				</div>

				<?php
			}//end if bonne page (page <= 5 avis)
			$compt++;
		}//end foreach affichage

		?>
		<div class="page">
			<input type="button" name="numpage" value="<< First page" onclick="location.href='?r=<?php echo $route; ?>&montri=<?php echo $montri; ?>&id=<?php echo parameters()['id']; ?>&page=1&langue=<?php echo $langue; ?>'"  class="myButtonUnselected">
			<?php
			
			for ($i=1; $i <= ceil(($compt-1)/5); $i++) { 
				
				if($i == $page){
					?>
					<input type="button" name="numpage" value="<?php echo $i; ?>" onclick="location.href='?r=<?php echo $route; ?>&montri=<?php echo $montri; ?>&id=<?php echo parameters()['id']; ?>&page=<?php echo $i; ?>&langue=<?php echo $langue; ?>'" class="myButtonSelected">
					<?php
				}
				else if ( ($i >= $page-2 && $i <= $page+2) || ($page<=2 && $i<=5) || ($page>=(ceil(($compt-1)/5)-2) && $i>=(ceil(($compt-1)/5)-4) ) ) {
					?>
					<input type="button" name="numpage" value="<?php echo $i; ?>" onclick="location.href='?r=<?php echo $route; ?>&montri=<?php echo $montri; ?>&id=<?php echo parameters()['id']; ?>&page=<?php echo $i; ?>&langue=<?php echo $langue; ?>'" class="myButtonUnselected">
				<?php
				}
			}
			?>
			<input type="button" name="numpage" value="Last page >>" onclick="location.href='?r=<?php echo $route; ?>&montri=<?php echo $montri; ?>&id=<?php echo parameters()['id']; ?>&page=<?php echo ceil(($compt-1)/5); ?>&langue=<?php echo $langue; ?>'" class="myButtonUnselected">
		</div>


		<?php

	}
	else{
		?>
		<p class="unAffichage">Aucun avis à afficher</p>
		<?php
	}

?>
