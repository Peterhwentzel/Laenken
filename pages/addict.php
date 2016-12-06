<aside id="sidebar" data-show="false">
	<div id="sidebar-handle">
		<span id="sidebar-handle-icon-left" class="glyphicon glyphicon-chevron-left"></span>
		<span id="sidebar-handle-icon-right" class="glyphicon glyphicon-chevron-right"></span>
	</div>
	<div id="sidebar-content">
		<a href="?page=index" class="btn btn-default btn-lg col-xs-12 btn-type1">Forside</a>
		<a href="?page=Hvorforsogehjaelp" class="btn btn-default btn-lg col-xs-12 btn-type1">Hvorfor søge hjælp?</a>
		<a href="?page=Saadanstarterbehandlingen" class="btn btn-default btn-lg col-xs-12 btn-type1">Sådan starter behandlingen</a>
		<a href="?page=Alkoholbehandlingen" class="btn btn-default btn-lg col-xs-12 btn-type1">Alkoholbehandlingen</a>
		<a href="?page=Behandlingsforlob" class="btn btn-default btn-lg col-xs-12 btn-type1">Behandlingsforløb</a>
		<a href="?page=Alkoholbehandlingen" class="btn btn-default btn-lg col-xs-12 btn-type1"></a>
		<a href="?page=help" class="btn btn-default btn-lg col-xs-12 btn-type1">Hjælp</a>
	</div>
</aside>

<div id="content" class="container">
	<!--<img src="images/.jpg" id="page-img"/>-->
	<div class="text">
		<h3>Patient</h3>
		<p><b>Vores tilbud…</b><br>
		<ul>
			<li><p>Er gratis</p></li>
			<li><p>Kræver ingen henvisning. Du kan henvende dig direkte på et af vores ambulatorier</p></li>
			<li><p>Har ingen ventetid</p></li>
			<li><p>Kan foregå anonymt</p></li>
			<li><p>Foregår ambulant uden indlæggelse, så du kan passe dine daglige gøremål</p></li>
			<li><p>Giver mulighed for behandling, hvor din familie og nærmeste pårørende inddrages sammen med dig</p></li>
			<li><p>Giver mulighed for ekstra støtte fra vores store netværk af frivillige i Landsforeningen Lænken, både under og efter et behandlingsforløb</p></li>
			<li><p>Er til dig, der overvejer at nedsætte dit forbrug af alkohol</p></li>
			<li><p>Er til dig, der vil bryde din afhængighed</p></li>
			<li><p>Er til dig, der helt vil stoppe med at drikke </p></li>
		</ul>
		<h3>LÆNKE-AMBULATORIERNE</h3>
		<p>
		Lænke-ambulatorierne har over 50 års erfaring. Behandlingen varetages af læger, sygeplejersker, socialrådgivere, pædagoger og psykologer, med uddannelse særlig kompetence inden for alkoholbehandling. I både den samtalebaserede og medicinske behandling benyttes metoder med veldokumenteret effekt. Samtalerne i behandlingen bygger primært på kognitiv adfærdsterapi. Her er målet, at du bliver i stand til at ændre de tanke- og handlemønstre, der opretholder et problematisk forbrug af alkohol.
		</p>
	</div>
</div>
<script>
$(function() {
	$("#sidebar-handle").on("click", function(){
		$("#sidebar").attr("data-show", !($("#sidebar").attr("data-show") == "true"));
	});
});
</script>
