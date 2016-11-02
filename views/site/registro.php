<?php

$this->title = 'Registro';
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>


<!-- .screen-two -->
<div class="screen-two">

	<!-- .screen-two-header -->
	<div class="screen-two-header">
		<img class="cielo-magico" src="<?=Url::base()?>/webAssets/images/cielo-magico.png" alt="Cielo Másgico">
		<img class="suenos-compartir" src="<?=Url::base()?>/webAssets/images/suenos-para-compartir.png" alt="Sueños para Compartir">
	</div>
	<!-- end - .screen-two-header -->

	<!-- .screen-two-cont -->
	<div class="screen-two-cont">


		<?php $form = ActiveForm::begin(['id' => 'registro-form', 'options' => [ 
			'class' => 'form-registro' 
		],

		'layout' => 'horizontal',
		'fieldConfig' => [ 
			'template' => "{label}\n{input}\n{error}",
			'horizontalCssClasses' => [ 
				'error' => 'mdl-textfield__error col-sm-offset-4 col-xs-12 col-sm-8' 
				],
			'labelOptions' => [ 
				'class' => 'col-xs-12 col-sm-4' 
			],
			'options' => [
				'class' => 'form-group animated' 
			] 
		],
		'errorCssClass' => 'invalid' ]); ?>

			<?= $form->field($usuario, 'txt_nombre', ['options'=>['class'=>'form-group animated']])->textInput(['autofocus' => true])-> textInput(["placeholder" => "Nombre" , "class"=>"col-xs-12 col-sm-8"])?>

			<?= $form->field($usuario, 'txt_apellido_paterno',['options'=>['class'=>'form-group animated']]) -> textInput(["placeholder" => "Apellido paterno", "class"=>"col-xs-12 col-sm-8"])?>

			<?= $form->field($usuario, 'fch_nacimiento',['options'=>['class'=>'form-group animated']])-> textInput(["placeholder" => "Fecha de nacimiento", "class"=>"col-xs-12 col-sm-8"])?>

			<?= $form->field($usuario, 'tel_numero_celular',['options'=>['class'=>'form-group animated']])-> textInput(["placeholder" => "Número celular", 'maxlength'=>10, "class"=>"col-xs-12 col-sm-8"])?>

			<?= $form->field($usuario, 'txt_cp',['options'=>['class'=>'form-group animated']]) -> textInput(["placeholder" => "C. P.", 'maxlength'=>5, "class"=>"col-xs-12 col-sm-8"])?>

			<?= $form->field($usuario, 'txt_email',['options'=>['class'=>'form-group animated']]) -> textInput(["placeholder" => "Email", "class"=>"col-xs-12 col-sm-8"])?>

			<?= $form->field($premio, 'txt_token') -> label(false) ->hiddenInput()?>
			
			<div class="form-group col-sm-offset-1 col-xs-12 col-sm-11 animated">
				<ul class="list">
					<li class="list__item">
						<label class="label--checkbox">
								
							<div class="label--checkbox-row">
								<div class="label--checkbox-row-col">
									<input type="checkbox" id="checkbox" class="checkbox">
								</div>
								<div class="label--checkbox-row-col">
									He le ído y acepto Avisos de Privacidad
								</div>
							</div>
						</label>
					</li>
				</ul>
			</div>

			<div class="form-group col-sm-offset-4 col-xs-12 col-sm-8 animated">
				<?= Html::submitButton('<span class="ladda-label">Envía</span>', ['id'=>'js-submit-form', 'class' => 'btn btn-registrar js-btn-registrar ladda-button', 'name' => 'contact-button', 'data-style'=>'zoom-out'])?>
			</div>

			<p id="message-error"></p>


		<?php ActiveForm::end(); ?>


	</div>
	<!-- end - .screen-two-cont -->

</div>
<!-- end - .screen-two -->