<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
 <?php $form = ActiveForm::begin(['id' => 'registro-form', 'options' => ['class' => 'form-login']]); ?>

			<?= $form->field($usuario, 'txt_nombre',['options'=>['class'=>'animated']])->textInput(['autofocus' => true]) -> label(false) -> textInput(["placeholder" => "Nombre"])?>
	
			<?= $form->field($usuario, 'txt_apellido_paterno',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "Apellido paterno", "class"=>"input-short animateds"])?>
			
			<?= $form->field($usuario, 'fch_nacimiento',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "Edad", "class"=>"input-short animateds", 'maxlength'=>3])?>
	
			<?= $form->field($usuario, 'tel_numero_celular',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "Número celular", 'maxlength'=>10])?>
			
			<?= $form->field($usuario, 'txt_cp',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "C. P.", 'maxlength'=>5])?>
		
			<?= $form->field($usuario, 'txt_email',['options'=>['class'=>'animated']]) -> label(false) -> textInput(["placeholder" => "Email"])?>
			
			<?= Html::submitButton('<span class="ladda-label">Registrar</span>', ['id'=>'js-submit-form', 'class' => 'btn btn-primary js-btn-registrar ladda-button animated', 'name' => 'contact-button', 'data-style'=>'zoom-out'])?>

<p id="message-error"></p>


<?php ActiveForm::end(); ?>