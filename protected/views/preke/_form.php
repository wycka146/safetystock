<?php
/* @var $this PrekeController */
/* @var $model Preke */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'preke-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pavadinimas'); ?>
		<?php echo $form->textField($model,'pavadinimas',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'pavadinimas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kaina'); ?>
		<?php echo $form->textField($model,'kaina',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'kaina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'atsargu_kiekis'); ?>
		<?php echo $form->textField($model,'atsargu_kiekis'); ?>
		<?php echo $form->error($model,'atsargu_kiekis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->