<aside id="sidebar" data-show="false">
	<div id="sidebar-handle">
		<span id="sidebar-handle-icon-left" class="glyphicon glyphicon-chevron-left"></span>
		<span id="sidebar-handle-icon-right" class="glyphicon glyphicon-chevron-right"></span>
	</div>
	<div id="sidebar-content">
		<a href="?page=index" class="btn btn-default btn-lg col-xs-12 btn-type1">Forside</a>
		<a href="?page=addict" class="btn btn-default btn-lg col-xs-12 btn-type1">Misbruger</a>
		<a href="?page=Saadanstarterbehandlingen" class="btn btn-default btn-lg col-xs-12 btn-type1">Sådan starter behandlingen</a>
		<a href="?page=Alkoholbehandlingen" class="btn btn-default btn-lg col-xs-12 btn-type1">Alkoholbehandlingen</a>
		<a href="?page=Behandlingsforlob" class="btn btn-default btn-lg col-xs-12 btn-type1">Behandlingsforløb</a>
		<a href="?page=help" class="btn btn-default btn-lg col-xs-12 btn-type1">Hjælp</a>
	</div>
</aside>

<div id="content" class="container">
	<div class="text">
		<h3>Hvorfor søge hjælp?</h3>
		<p><b>hvad, hvorfor, hvornår..?</b><br>
		Det kan være svært at vide, hvornår man passerer grænsen mellem almindeligt og overdrevent alkoholforbrug.</p>

		<p>De følgende tegn bør du især være opmærksom på:</p>
		<ul>
			<li><p>Flere har sagt, de synes, du drikker for meget</p></li>
			<li><p>Du har svigtet vigtige aftaler på grund af alkohol</p></li>
			<li><p>Du har haft sygedage på grund af tømmermænd</p></li>
			<li><p>Du skal drikke mere end tidligere for at blive påvirket</p></li>
			<li><p>Svækket evne til at styre indtagelsen, standse eller nedsætte brugen af alkohol</p></li>
			<li><p>Du oplever uimodståelig trang til at drikke</p></li>
		</ul>
		<!--<img src="images/.jpg" id="page-img"/>-->
</div>
<script>
$(function() {
	$("#sidebar-handle").on("click", function(){
		$("#sidebar").attr("data-show", !($("#sidebar").attr("data-show") == "true"));
	});
});
</script>
