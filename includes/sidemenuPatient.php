<aside id="sidebar" data-show="false">
	<div id="sidebar-handle">
		<span id="sidebar-handle-icon-left" class="glyphicon glyphicon-chevron-left"></span>
		<span id="sidebar-handle-icon-right" class="glyphicon glyphicon-chevron-right"></span>
	</div>
	<div id="sidebar-content">
		<?php
			$links = [
				'index' => 'Forside',
				'Patient' => 'Patient',
				'PatientHvorforsogehjaelp' => 'Hvorfor søge hjælp?',
				'PatientSaadanstarterbehandlingen' => 'Sådan starter behandlingen',
				'PatientAlkoholbehandlingen' => 'Alkoholbehandlingen',
				'PatientBehandlingsforlob' => 'Behandlingsforløb',
				'PatientSamvaerstotteognetvaerk' => 'Samvær, støtte og netværk',
				'PatientNyttigelinks' => 'Nyttige links',
				'PatientKontakt' => 'Kontakt'
			];
			foreach($links as $key => $link) {
				$style = $page == $key ? 'style="display:none;"' : '';
				echo '<a href="?page='.$key.'" class="btn btn-default btn-lg col-xs-12 btn-type1" data-key="'.$key.'" '.$style.'>'.$link.'</a>';
			}
		?>
		<img src="images/logo.svg" class="image" />
	</div>
</aside>

<style>
@media (min-width: 768px) {
	#sidebar-handle {
		display:none;
	}
	#sidebar {
		left:0;
	}
	#content,
	#desktop-footer,
	#desktop-header {
		padding-left:280px;
	}
	a[data-key="PatientNyttigelinks"] {
		display:none;
	}
}
</style>
<script>
$(function() {
	$("#sidebar-handle").on("click", function(){
		$("#sidebar").attr("data-show", !($("#sidebar").attr("data-show") == "true"));
	});
});
</script>