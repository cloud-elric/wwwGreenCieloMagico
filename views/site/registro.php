<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
 <?php $form = ActiveForm::begin(['id' => 'registro-form','options' => [ 
				'enctype' => 'multipart/form-data' 
		],
 		
		'layout' => 'horizontal',
		'fieldConfig' => [ 
				'template' => "{input}\n{label}\n{error}",
				'horizontalCssClasses' => [ 
						'error' => 'mdl-textfield__error' 
				],
				'labelOptions' => [ 
						'class' => 'mdl-textfield__label ' 
				],
				'options' => [ 
						'class' => 'input-field col s12 m6' 
				] 
		],
		'errorCssClass' => 'invalid' ]); ?>

			<?= $form->field($usuario, 'txt_nombre', ['options'=>['class'=>'input-field col s12'], ['template'=>'{input}{label}']])->textInput(['autofocus' => true])-> textInput(["placeholder" => "Nombre"])?>
	
			<?= $form->field($usuario, 'txt_apellido_paterno',['options'=>['class'=>'animated']]) -> textInput(["placeholder" => "Apellido paterno", "class"=>"input-short animateds"])?>
			
			<?= $form->field($usuario, 'fch_nacimiento',['options'=>['class'=>'animated']])-> textInput(["placeholder" => "Fecha de nacimiento", "class"=>"input-short animateds"])?>
	
			<?= $form->field($usuario, 'tel_numero_celular',['options'=>['class'=>'animated']])-> textInput(["placeholder" => "Número celular", 'maxlength'=>10])?>
			
			<?= $form->field($usuario, 'txt_cp',['options'=>['class'=>'animated']]) -> textInput(["placeholder" => "C. P.", 'maxlength'=>5])?>
		
			<?= $form->field($usuario, 'txt_email',['options'=>['class'=>'animated']]) -> textInput(["placeholder" => "Email"])?>
			
			<?= $form->field($premio, 'txt_token') -> label(false) ->hiddenInput()?>
			
			<?= Html::submitButton('<span class="ladda-label">Registrar</span>', ['id'=>'js-submit-form', 'class' => 'btn btn-primary js-btn-registrar ladda-button animated', 'name' => 'contact-button', 'data-style'=>'zoom-out'])?>

<p id="message-error"></p>


<?php ActiveForm::end(); ?>