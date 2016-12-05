<aside id="sidebar" data-show="false">
	<div id="sidebar-handle">
		<span id="sidebar-handle-icon-left" class="glyphicon glyphicon-chevron-left"></span>
		<span id="sidebar-handle-icon-right" class="glyphicon glyphicon-chevron-right"></span>
	</div>
	<div id="sidebar-content">
		<a href="?page=index" class="btn btn-default btn-lg col-xs-12 btn-type1">Forside</a>
		<a href="?page=addict" class="btn btn-default btn-lg col-xs-12 btn-type1">Misbruger</a>
		<a href="?page=subPageAddict1" class="btn btn-default btn-lg col-xs-12 btn-type1">Et liv uden?</a>
		<a href="?page=help" class="btn btn-default btn-lg col-xs-12 btn-type1">Hjælp</a>
		<a href="?page=help" class="btn btn-default btn-lg col-xs-12 btn-type2">Hjælp</a>
	</div>
</aside>

<div id="content" class="container">
	<img src="images/img2.jpg" id="page-img"/>
	<div class="text">
		<h3>Nulla sed tortor quam</h3>
		<p><b>blandit orci?</b><br />
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultrices orci velit, at egestas risus placerat vitae. Vestibulum ut ligula hendrerit, 
		pellentesque tortor congue, blandit orci.</p>

		<p><b>Lorem Porem</b><br />
		Etiam eleifend ut felis id ornare. Duis accumsan lacinia ex, sed egestas nibh blandit eget. Proin eu ex eros. Vivamus tincidunt augue et sapien pharetra congue. 
		In luctus venenatis sem porttitor maximus. Ut pretium gravida velit, vitae eleifend massa varius eu. Suspendisse faucibus luctus augue, ut maximus ante. Curabitur accumsan eget turpis quis viverra.</p>
</div>
<script>
$(function() {
	$("#sidebar-handle").on("click", function(){
		$("#sidebar").attr("data-show", !($("#sidebar").attr("data-show") == "true"));
	});
});
</script>