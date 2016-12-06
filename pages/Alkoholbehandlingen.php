<aside id="sidebar" data-show="false">
	<div id="sidebar-handle">
		<span id="sidebar-handle-icon-left" class="glyphicon glyphicon-chevron-left"></span>
		<span id="sidebar-handle-icon-right" class="glyphicon glyphicon-chevron-right"></span>
	</div>
	<div id="sidebar-content">
		<a href="?page=index" class="btn btn-default btn-lg col-xs-12 btn-type1">Forside</a>
        <a href="?page=addict" class="btn btn-default btn-lg col-xs-12 btn-type1">Misbruger</a>
		<a href="?page=Hvorforsogehjaelp" class="btn btn-default btn-lg col-xs-12 btn-type1">Hvorfor søge hjælp?</a>
		<a href="?page=Saadanstarterbehandlingen" class="btn btn-default btn-lg col-xs-12 btn-type1">Sådan starter behandlingen</a>
        <a href="?page=Behandlingsforlob" class="btn btn-default btn-lg col-xs-12 btn-type1">Behandlingsforløb</a>
		<a href="?page=help" class="btn btn-default btn-lg col-xs-12 btn-type1">Hjælp</a>
	</div>
</aside>

<div id="content" class="container">
	<!--<img src="images/.jpg" id="page-img"/>-->
	<div class="text">
		<h3>Alkoholbehandlingen</h3>
		<p>Din behandling skræddersys i et samarbejde mellem dig og din alkoholbehandler, og I sætter sammen målet for behandlingen. Som led i behandlingen tilbydes parsamtaler og familieorienteret alkoholbehandling, hvor der er mulighed for at børnene kan være med som en del af behandlingsforløbet.</p>
	</div>
</div>
<script>
$(function() {
	$("#sidebar-handle").on("click", function(){
		$("#sidebar").attr("data-show", !($("#sidebar").attr("data-show") == "true"));
	});
});
</script>

