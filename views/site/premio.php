<?php

$this->title = 'Premio';
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use app\models\Constantes;

$premio = $usuarioPremio->idPremio;

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
		<?php if($premio->id_premio==Constantes::ENTRADA || $premio->id_premio==Constantes::VUELO){?>
			<h4>Haz ganado un <?=$premio->txt_nombre?></h4>
		<?php }else{?>
			<h4>Haz ganado un <a class="launch-modal" href='javascript:void(0);'><?=$premio->txt_nombre?></a></h4>
		<?php }?>	
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

<!-- .modal-->
<div id="modal-premio" 
	class="modal">
	<!-- .modal-content -->
	<div class="modal-content" style="max-width: 95%">
		<!-- .modal-header -->
		<div class="modal-header">
			<span class="close" id="modal-premio-close">×</span>
			<h2>Premio</h2>
		</div>
		<!-- end - .modal-header -->


		<!-- .modal-body -->
		<div class="modal-body" style="padding:0;">
		
			<img style="width: 100%" src="<?=Url::base().'/webAssets/images/premios/'.$premio->id_premio.'.png'?>"/>
			
			<?php if($premio->id_premio == Constantes::DESAYUNO || $premio->id_premio == Constantes::DESCUENTO_40 || $premio->id_premio == Constantes::DOS_X_UNO){?>
				<img style="width: 100%" src="<?=Url::base().'/webAssets/images/premios/'.$premio->id_premio.'2.png'?>"/>
			<?php }?>
		</div>
		<!-- end - .modal-body -->

	</div>
	<!-- end - .modal-content -->
</div>
<!-- end - .modal -->
