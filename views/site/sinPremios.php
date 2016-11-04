<?php

/* @var $this yii\web\View */

$this->title = 'Bienvenido';
use yii\helpers\Url;

?>


<!-- .principal -->
<div class="principal">
	
	<!-- .principal-header -->
	<div class="principal-header">
		<img class="cielo-magico" src="<?=Url::base()?>/webAssets/images/cielo-magico.png" alt="Cielo Másgico">
		<img class="suenos-compartir" src="<?=Url::base()?>/webAssets/images/suenos-para-compartir.png" alt="Sueños para Compartir">
	</div>
	<!-- end - .principal-header -->

	<!-- .principal-texto -->
	<div class="principal-texto">
		<p>
			Juega y gana descuentos, entradas gratis, vuelos, cortesías en tus próximas vacaciones...
		</p>
	</div>
	<!-- end - .principal-texto -->

	<!-- .principal-globo -->
	<img class="principal-globo" src="<?=Url::base()?>/webAssets/images/principal/globo.png" alt="Globo">
	
	<h3 class="principal-sin-premios-disponibles">Sin premios Disponibles</h3>

</div>
<!-- end - .principal -->