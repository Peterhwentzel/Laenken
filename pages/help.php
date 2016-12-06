<aside id="sidebar" data-show="false">
	<div id="sidebar-handle">
		<span id="sidebar-handle-icon-left" class="glyphicon glyphicon-chevron-left"></span>
		<span id="sidebar-handle-icon-right" class="glyphicon glyphicon-chevron-right"></span>
	</div>
	<div id="sidebar-content">
		<a href="?page=index" class="btn btn-default btn-lg col-xs-12 btn-type1">Forside</a>
		<a href="?page=addict" class="btn btn-default btn-lg col-xs-12 btn-type1">Misbruger</a>
		<a href="?page=relative" class="btn btn-default btn-lg col-xs-12 btn-type1">Pårørende</a>
	</div>
</aside>

<div id="content" class="container">
	<!--<img src="images/.jpg" id="page-img"/>-->
	<div class="text">
		<h3>HJÆLP</h3>
		<p><b>Her finder du hjælp</b><br />
		Det kan være svært at vide, hvornår man
		passerer grænsen mellem almindeligt og
		overdrevent alkoholforbrug.
		De følgende tegn bør du især være
		opmærksom på:</p>
		<ul>
			<li><p>Hotline <a href="tel:39455544">39455544</a></p></li>
			<li><p>Din lokale <a href="http://www.laenken.dk/laenkens-ambulatorier-og-raadgivninger">ambulatorium</a></p></li>
			<li><p>Din lokale <a href="http://forening.laenken.dk/lokalforeninger">Lænkeforening</a></p></li>
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