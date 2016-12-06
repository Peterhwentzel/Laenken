<aside id="sidebar" data-show="false">
	<div id="sidebar-handle">
		<span id="sidebar-handle-icon-left" class="glyphicon glyphicon-chevron-left"></span>
		<span id="sidebar-handle-icon-right" class="glyphicon glyphicon-chevron-right"></span>
	</div>
	<div id="sidebar-content">
		<a href="?page=index" class="btn btn-default btn-lg col-xs-12 btn-type1">Forside</a>
        <a href="?page=Misbruger" class="btn btn-default btn-lg col-xs-12 btn-type1">Misbruger</a>
		<a href="?page=Hvorforsogehjaelp" class="btn btn-default btn-lg col-xs-12 btn-type1">Hvorfor søge hjælp?</a>
		<a href="?page=Saadanstarterbehandlingen" class="btn btn-default btn-lg col-xs-12 btn-type1">Sådan starter behandlingen</a>
		<a href="?page=Alkoholbehandlingen" class="btn btn-default btn-lg col-xs-12 btn-type1">Alkoholbehandlingen</a>
		<a href="?page=Behandlingsforlob" class="btn btn-default btn-lg col-xs-12 btn-type1">Behandlingsforløb</a>
		<a href="?page=MisbrugerKontakt" class="btn btn-default btn-lg col-xs-12 btn-type1">Kontakt</a>
	</div>
</aside>

<div id="content" class="container">
	<!--<img src="images/.jpg" id="page-img"/>-->
	<div class="text">
		<h3>Samvær, støtte og netværkient</h3>
		<p>		
        Som et muligt supplement til behandlingen har du mulighed for støtte og socialt samvær i den tilknyttede, lokale Lænkeforening, der har lokaler sammen med ambulatoriet. Lænkeforeningen er frivillige brugere eller pårørende, der alle har haft alkoholproblemer tæt inde på livet. Kontaktpersoner i Lænkeforeningen er uddannet til at støtte dig, hvis du har brug for det – også udenfor ambulatoriets åbningstid.</p>
                                
        <p>Din familie og nærmeste pårørende kan også inddrages i alkoholbehandlingen, så I sammen kan tale om de problematikker, I oplever i hverdagen.</p>
                                
        <p>Har du som drikkende børn under 18 år, vil du automatisk blive tilbudt en særlig familieorienteret behandling.</p>
	</div>
</div>
<script>
$(function() {
	$("#sidebar-handle").on("click", function(){
		$("#sidebar").attr("data-show", !($("#sidebar").attr("data-show") == "true"));
	});
});
</script>
