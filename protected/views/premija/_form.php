<?php
/* @var $this PremijaController */
/* @var $model Premija */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'premija-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'vartotojas'); ?>
		<?php echo $form->dropDownList($model,'vartotojas', $model->getUserOptions()); ?>
		<?php echo $form->error($model,'vartotojas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'komentaras'); ?>
		<?php echo $form->textArea($model,'komentaras',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'komentaras'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->