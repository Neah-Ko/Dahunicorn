<form action="./" metho="post">
	<p>
	<label for="siren">Identifiant SIREN : </label>
	<input type="text" id="siren" name="siren" required>
	</p><p>
	<label for="nom">Nom : </label>
	<input type="text" id="nom" name="nom" required>
	</p><p>
	<label for="tel">Téléphonne : </label>
	<input type="text" id="tel" name="tel" required>
	</p><p>
	<label for="email">Email : </label>
	<input type="email" id="email" name="email" required>
	</p><p>
	<label for="desc">Description : </label>
	<textarea name="desc" id="desc"></textarea>
	</p><p>
	<label for="mdp">Mot de passe : </label>
	<input type="password" id="mdp" name="mdp" required>
	</p><p>
	<label for="mdp_con">Confirmation : </label>
	<input type="password" id="mdp_con" name="mdp_con" required>
	</p><p>
	<label for="adr_rue">Rue : </label>
	<input type="text" id="adr_rue" name="adr_rue" required>
	</p><p>
	<label for="adr_comp">Complément : </label>
	<input type="text" id="adr_comp" name="adr_comp">
	</p><p>
	<label for="adr_cp">Code postal : </label>
	<input type="text" id="adr_cp" name="adr_cp" required>
	</p><p>
	<label for="adr_vil">Ville : </label>
	<input type="text" id="adr_vil" name="adr_vil" required>
	</p>
	<input type="submit" name="enregistrer" value="Enregistrer" >
</form>