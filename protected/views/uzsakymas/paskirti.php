<?php
/* @var $this VartotojoUzsakymasController */
/* @var $model VartotojoUzsakymas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vartotojo-uzsakymas-paskirti-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Laukeliai su <span class="required">*</span> yra privalomi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'vartotojas'); ?>
		<?php echo $form->dropDownList($model,'vartotojas', Vartotojas::getDarbuotojasOptions()); ?>
		<?php echo $form->error($model,'vartotojas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uzsakymas'); ?>
		<?php echo $form->dropDownList($model,'uzsakymas', Uzsakymas::getNepatvirtintasOptions()); ?>
		<?php echo $form->error($model,'uzsakymas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->