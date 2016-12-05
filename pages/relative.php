<aside id="sidebar" data-show="false">
	<div id="sidebar-handle">
		<span id="sidebar-handle-icon-left" class="glyphicon glyphicon-chevron-left"></span>
		<span id="sidebar-handle-icon-right" class="glyphicon glyphicon-chevron-right"></span>
	</div>
	<div id="sidebar-content">
		<a href="?page=index" class="btn btn-default btn-lg col-xs-12 btn-type1">Forside</a>
		<a href="?page=subPageRelative1" class="btn btn-default btn-lg col-xs-12 btn-type1">Du er ikke alene</a>
		<a href="?page=subPageRelative2" class="btn btn-default btn-lg col-xs-12 btn-type1">Andre som dig</a>
		<a href="?page=help" class="btn btn-default btn-lg col-xs-12 btn-type1">Hjælp</a>
		<a href="?page=help" class="btn btn-default btn-lg col-xs-12 btn-type2">Hjælp</a>
	</div>
</aside>

<div id="content" class="container">
	<div class="bigImage"></div>
	<div class="text">
		<h3>Som pårørende er der Hjælp</h3>
		<p><b>Hvad kan du gøre?</b><br />
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices orci velit, at egestas risus placerat vitae. Vestibulum ut ligula hendrerit, 
		pellentesque tortor congue, blandit orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet massa sed est ullamcorper vehicula accumsan eget erat.:</p>
		<ul>
			<li><p>Mauris condimentum mattis mollis.</p></li>
			<li><p>Aliquam nec justo dolor.</p></li>
			<li><p>Sed ac risus volutpat, placerat ipsum eu, aliquam dolor.</p></li>
			<li><p>Sed tempus magna elit, quis posuere ante consequat nec</p></li>
			<li><p>Nulla sed tortor quam. Suspendisse vitae cursus enim.</p></li>
			<li><p> Nunc aliquet et orci sit amet pellentesque.</p></li>
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