<?php

/* @var $this yii\web\View */
$this->title = 'Concursar';
use yii\helpers\Url;

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<?php
$premioSeleccionado->txt_token = 'prem13f8a18f30991042ae86aaf2dee0c06e5818ee2971dc3';
$form = ActiveForm::begin ( [ 
		'id' => 'item-form',
		'options' => [ 
				'class' => '' 
		] 
] );
?>

			<?= $form->field($premioSeleccionado, 'txt_token')->hiddenInput() -> label(false)?>


<!-- .screen-one -->
<div class="screen-one">

	<!-- .screen-one-header -->
	<div class="screen-one-header">
		<div class="screen-one-header-logos">
			<img class="cielo-magico"
				src="<?=Url::base()?>/webAssets/images/cielo-magico.png"
				alt="Cielo Másgico"> <img class="suenos-compartir"
				src="<?=Url::base()?>/webAssets/images/suenos-para-compartir.png"
				alt="Sueños para Compartir">
		</div>
		<div class="screen-one-header-mecanica">
			<h2>Mecánica:</h2>
			<ol>
				<li>Elije tu globo (dale clic)</li>
				<li>Al Instante verás lo que has ganado</li>
				<li>Llena el registro</li>
				<li>Recibe tu respuesta vía SMS con tu regalo</li>
				<li>¡Nos vemos en el Cielo Magico!</li>
			</ol>
		</div>
	</div>
	<!-- end - .screen-one-header -->

	<!-- .screen-one-globos -->
	<div class="screen-one-globos">
		
		<?php
		$index = 1;
		$colores = ['#009de4','#ff48c6', '#cdf421'];
		foreach ( $premios as $premio ) {
			// echo $premio->txt_nombre."<br><br><br>";
			?>
		
		<div class="screen-one-globos-item content">
			<img class="cielo-magico cielo-magico-ballon-<?=$index?> js-balloon"
				data-color="<?=$colores[$index-1]?>"
				data-token="<?=$premio->txt_token?>"
				src="<?=Url::base()?>/webAssets/images/screen-one/globo-<?=$index?>.png"
				alt="Globo <?=$index?>">
			<div id="dummy_debris" class="debris"></div>
		</div>
		<?php
			$index ++;
		}
		?>
	</div>
	<!-- end - .screen-one-globos -->

</div>
<!-- end - .screen-one -->




<!-- .modal -->
<div id="modal-consursar" class="modal modal-consursar">

	<!-- .modal-content -->
	<div class="modal-content">

		<!-- .modal-header -->
		<!-- <div class="modal-header">
			<span class="close" id="modal-consursar-close">×</span>
			<h2>Términos y condiciones</h2>
		</div> -->
		<!-- end - .modal-header -->

		<!-- .modal-body -->
		<div class="modal-body">
			
			<h3>¡Felicidades! <span>Haz ganado</span></h4>

			<h2>Pluma dorada para BOOK'S</h2>

			<!-- .screen-one-btn-canjea-premio -->
			<?= Html::submitButton('<span class="ladda-label">Canjea tu premio</span>', ['id'=>'js-canjea-tu-premio', 'class' => 'btn screen-one-btn-canjea-premio ladda-button', 'data-style'=>'zoom-out'])?>
			<!-- end - .screen-one-btn-canjea-premio -->

		</div>
		<!-- end - .modal-body -->

	</div>
	<!-- end - .modal-content -->

</div>
<!-- end - .modal -->

<?php ActiveForm::end(); ?>

