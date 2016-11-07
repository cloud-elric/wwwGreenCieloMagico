<?php

$this->title = 'Usuarios';
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>


<!-- .usuarios -->
<div class="usuarios">
	
	<!-- .usuarios-globo -->
	<img src="<?=Url::base()?>/webAssets/images/screen-the/globo.png" alt="Globo" class="usuarios-globo">

	<!-- .usuarios-header -->
	<div class="usuarios-header">
		<img class="cielo-magico" src="<?=Url::base()?>/webAssets/images/cielo-magico.png" alt="Cielo Másgico">
		<img class="suenos-compartir" src="<?=Url::base()?>/webAssets/images/suenos-para-compartir.png" alt="Sueños para Compartir">
	</div>
	<!-- end - .usuarios-header -->

	<!-- .usuarios-contenido -->
	<div class="usuarios-contenido">


		<!-- <div class="puntuacion-cont-tabla">

			<div class="puntuacion-cont-tabla-head">
				<div class="puntuacion-cont-tabla-head-td">Nombre</div>
				<div class="puntuacion-cont-tabla-head-td">Correo</div>
				<div class="puntuacion-cont-tabla-head-td">C.P.</div>
				<div class="puntuacion-cont-tabla-head-td">Telefono</div>
				<div class="puntuacion-cont-tabla-head-td">Fecha de creacion</div>
				<div class="puntuacion-cont-tabla-head-td">Fecha de nacimiento</div>
				<div class="puntuacion-cont-tabla-head-td">Codigo ganador</div>
				<div class="puntuacion-cont-tabla-head-td">Premio</div>
			</div>

			<div class="puntuacion-cont-tabla-body">
				
				
				<div class="puntuacion-cont-tabla-body-tr">
					<div class="puntuacion-cont-tabla-body-td">HUMBERTO ANTONIO</div>
					<div class="puntuacion-cont-tabla-body-td">cloudelric74@gmail.com</div>
					<div class="puntuacion-cont-tabla-body-td">53230</div>
					<div class="puntuacion-cont-tabla-body-td">5534440014</div>

					<div class="puntuacion-cont-tabla-body-td">04/11/2016 14:42</div>

					<div class="puntuacion-cont-tabla-body-td">16/07/1990 00:00</div>

					<div class="puntuacion-cont-tabla-body-td">b03254557d</div>

					<div class="puntuacion-cont-tabla-body-td">2X1 Paga tu primer noche y te regalamos la segunda en Fiesta Americana *Hoteles Participantes</div>
				</div>	
				
			</div>

		</div>
		
	</div>-->
	<!-- end - .usuarios-contenido -->

	<!-- .usuarios-btn-exportar -->
	<button class="btn usuarios-btn-exportar ladda-button js-btn-exportar" data-style="zoom-out"><span class="ladda-label">Exportar</span></button>

	
</div>
<!-- end - .usuarios -->