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
		<a href="?page=Alkoholbehandlingen" class="btn btn-default btn-lg col-xs-12 btn-type1">Alkoholbehandlingen</a>
		<a href="?page=help" class="btn btn-default btn-lg col-xs-12 btn-type1">Hjælp</a>
	</div>
</aside>

<div id="content" class="container">
	<!--<img src="images/.jpg" id="page-img"/>-->
	<div class="text">
		<h3>Behandlingsforløb</h3>
		<ul>
			<li><p></p></li>
			<li><p></p></li>
			<li><p></p></li>
			<li><p></p></li>
			<li><p></p></li>
		</ul>
	</div>
</div>
<script>
$(function() {
	$("#sidebar-handle").on("click", function(){
		$("#sidebar").attr("data-show", !($("#sidebar").attr("data-show") == "true"));
	});
});
</script>

