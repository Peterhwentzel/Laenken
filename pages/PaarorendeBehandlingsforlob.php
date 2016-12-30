<?php
	include("includes/sidemenuPaarorende.php");
?>

<style>
/*

.behandling-left img {
	float:left;
}
.behandling-right img {
	float:left;
}
*/

.behandlings-row {
	width:100%;
}
.behandlings-row > * {
	float:left;
	height:200px;
	width:calc(100% - 172px);
}
.behandlings-row ul li p {
	margin:0;
}
.behandlings-row > .behandling-number {
	font-family: Verdana;
	font-size: 60px;
	color:#eb6751;
	font-weight:600;
	width:40px;
}

@media (max-width: 450px) {
	.behandlings-row {
		position:relative;
		margin-bottom:20px;
	}
	.behandlings-row > .behandling-image-right,
	.behandlings-row > .behandling-image-left {
		display:none;
	}
	.behandlings-row > .behandling-number {
		position: absolute;
		top: 0;
		left: 0;
	}
	.behandlings-row > * {
		float:initial;
		height:auto;
		width:calc(100% - 52px);
		position: relative;
		top: 17px;
		left: 40px;
	}
}
.behandlings-row > .behandling-image-right {
	float:right;
}
.behandlings-row > .behandling-image-right,
.behandlings-row > .behandling-image-left {
	width:122px!important;
}

.ul-title {
	margin: 0 0 0 25px;
}
</style>

<div id="content" class="container">
	
	<div class="text">
		<h3>Et typisk behandlingsforløb</h3>
		<div class="behandlings-row behandling-left">
			<div class="behandling-image-right ">
				<img src="images/_bottle.png" />
			</div>
			<div class="behandling-number">1</div>
			<div class="">
				<p class="ul-title"><b>1. Besøg</b></p>
				<ul>
					<li><p>Samtale med en alkoholbehandler eller læge</p></li>
					<li><p>Abstinensbehandling og/eller anden medicinsk behandling opstartes efter behov</p></li>
				</ul>
			</div>
		</div>
		<div class="behandlings-row behandling-right">
			<div class="behandling-number">2</div>
			<div class="">
				<p class="ul-title"><b>1. Måned af behandling</b></p>
				<ul>
					<li><p>Ca. 3 individuelle samtaler - herunder tilbud om samtale hos ambulatoriets læge </p></li>
				</ul>
			</div>
			<div class="behandling-image-right ">
				<img src="images/_doctor.png" />
			</div>
		</div>
		<div class="behandlings-row behandling-left">
			<div class="behandling-image-right ">
				<img src="images/_community.png" />
			</div>
			<div class="behandling-number">3</div>
			<div class="">
				<p class="ul-title"><b>2.-6. måned af behandlingen</b></p>
				<ul>
					<li><p>Individuelle samtaler hos alkoholbeholder ca. hver 14. dag, evt med hjemmetræningsopgaver</p></li>
					<li><p>Undervisning og evt. gruppebehandling</p></li>
					<li><p>Tilbud om inddragelse af familie og pårørende</p></li>
				</ul>
			</div>
		</div>
		<div class="behandlings-row behandling-right">
			<div class="behandling-number">4</div>
			<div class="">
				<p class="ul-title"><b>Efterbehandling</b></p>
				<ul>
					<li><p>Individuelle samtaler hos alkoholbehandler ca. hver 2.-4. måned, evt. med hjemmetræningsopgaver. Varighed af efterbehandligen er forskellig fra person til person, men vil typisk være afsluttet inden for et år</p></li>
				</ul>
			</div>
			<div class="behandling-image-right ">
				<img src="images/_speechBubble.png" />
			</div>
		</div>
	</div>
</div> 