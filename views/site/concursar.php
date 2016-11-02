<?php

/* @var $this yii\web\View */

$this->title = 'Concursar';
use yii\helpers\Url;

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

<!-- .screen-one -->
<div class="screen-one">
	
	<!-- .screen-one-header -->
	<div class="screen-one-header">
		<div class="screen-one-header-logos">
			<img class="cielo-magico" src="<?=Url::base()?>/webAssets/images/cielo-magico.png" alt="Cielo Másgico">
			<img class="suenos-compartir" src="<?=Url::base()?>/webAssets/images/suenos-para-compartir.png" alt="Sueños para Compartir">
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
		<div class="screen-one-globos-item">
			<img class="cielo-magico" src="<?=Url::base()?>/webAssets/images/screen-one/globo-1.png" alt="Globo 1">
		</div>
		<div class="screen-one-globos-item">
			<img class="cielo-magico" src="<?=Url::base()?>/webAssets/images/screen-one/globo-2.png" alt="Globo 2">
		</div>
		<div class="screen-one-globos-item">
			<img class="cielo-magico" src="<?=Url::base()?>/webAssets/images/screen-one/globo-3.png" alt="Globo 3">
		</div>
	</div>
	<!-- end - .screen-one-globos -->

	<!-- .screen-one-btn-canjea-premio -->
	<button class="btn screen-one-btn-canjea-premio">Canjea tu premio</button>
	<!-- end - .screen-one-btn-canjea-premio -->
	
</div>
<!-- end - .screen-one -->

<?php 



foreach($premios as $premio){
	echo $premio->txt_nombre."<br><br><br>";
}

?>


 <?php 
 $premioSeleccionado->txt_token = 'prem13f8a18f30991042ae86aaf2dee0c06e5818ee2971dc3'; 
 $form = ActiveForm::begin(['id' => 'item-form', 'options' => ['class' => '']]); ?>

			<?= $form->field($premioSeleccionado, 'txt_token')->hiddenInput() -> label(false)?>
	
			
			<?= Html::submitButton('<span class="ladda-label">Registrar</span>', ['id'=>'js-submit-form', 'class' => 'btn btn-primary js-btn-registrar ladda-button animated', 'name' => 'contact-button', 'data-style'=>'zoom-out'])?>


<?php ActiveForm::end(); ?>

