<h1>404 : not found</h1>
<div class="perdu">Vous êtes perdus ? Vous n'êtes pas les seuls. De nombreux migrants ont perdu leur habitat à cause de la guerre, et ils ont besoin de votre aide.</div>
<div class="dons">De nombreux organismes humanitaires acceptent une participation monétaire pour aider les plus démunis. Parmi eux, vous pouvez trouver Médecins Sans Frontières, connus pour leurs actions au travers du globe. N'hésitez pas à <a href="https://soutenir.msf.fr/b/mon-don">faire un don</a> pour les aider.</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script>
    $.ajax({
        url: "easterEgg.php",
        success: function(data) {
            console.log(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
			console.log(errorThrown);
		}
    });
</script>