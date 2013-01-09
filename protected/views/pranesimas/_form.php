<?php
/* @var $this PranesimasController */
/* @var $model Pranesimas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pranesimas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Laukeliai su <span class="required">*</span> yra privalomi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'gavejas'); ?>
		<?php echo $form->dropDownList($model,'gavejas', Vartotojas::getVartotojasOptions()); ?>
		<?php echo $form->error($model,'gavejas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pranesimo_tipas'); ?>
		<?php echo $form->dropDownList($model,'pranesimo_tipas', PranesimoTipas::getTipasOptions()); ?>
		<?php echo $form->error($model,'pranesimo_tipas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tekstas'); ?>
		<?php echo $form->textArea($model,'tekstas',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'tekstas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->