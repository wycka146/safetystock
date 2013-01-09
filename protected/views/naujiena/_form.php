<?php
/* @var $this NaujienaController */
/* @var $model Naujiena */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'naujiena-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pavadinimas'); ?>
		<?php echo $form->textField($model,'pavadinimas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'pavadinimas'); ?>
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