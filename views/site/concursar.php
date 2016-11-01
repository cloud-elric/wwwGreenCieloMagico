<?php 

use yii\widgets\ActiveForm;
use yii\helpers\Html;

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