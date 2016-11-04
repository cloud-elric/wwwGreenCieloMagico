<?php

$this->title = 'Premio';
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>


<!-- .screen-the -->
<div class="screen-the">
	
	<!-- .screen-the-globo -->
	<img src="<?=Url::base()?>/webAssets/images/screen-the/globo.png" alt="Globo" class="screen-the-globo">

	<!-- .screen-the-header -->
	<div class="screen-the-header">
		<img class="cielo-magico" src="<?=Url::base()?>/webAssets/images/cielo-magico.png" alt="Cielo Másgico">
		<img class="suenos-compartir" src="<?=Url::base()?>/webAssets/images/suenos-para-compartir.png" alt="Sueños para Compartir">
	</div>
	<!-- end - .screen-the-header -->

	<!-- .screen-the-contenido -->
	<div class="screen-the-contenido">
		<h3>¡Felicidades!</h3>
		<h4>Haz ganado un <?=$usuarioPremio->idPremio->txt_nombre?></h4>
		
		<!-- .screen-the-contenido-codigo -->
		<div class="screen-the-contenido-codigo">
			<span>Código</span>
			<p><?=$usuarioPremio->txt_codigo?></p>
		</div>
		<!-- end - .screen-the-contenido-codigo -->
	</div>
	<!-- end - .screen-the-contenido -->
	
	<!-- .screen-the-foooter -->
	<div class="screen-the-foooter">
		
		<!-- .screen-the-foooter-facebook -->
		<a class="screen-the-foooter-facebook" href="http://www.facebook.com/ParticipaGanaOficial" target="_blank">
			<i class="ion ion-social-facebook"></i>
			<span>ParticipaGana</span>
		</a>
		<!-- end - .screen-the-foooter-facebook -->

		<!-- .screen-the-foooter-nota -->
		<div class="screen-the-foooter-nota">
			<p>
				Recuerda canjearlo en el evento con esta pantalla (llévala en tu celular o puedes imprimirla) con una identificación oficial.
			</p>
		</div>
		<!-- end - .screen-the-foooter-nota -->

	</div>
	<!-- end - .screen-the-foooter -->

</div>
<!-- end - .screen-the -->