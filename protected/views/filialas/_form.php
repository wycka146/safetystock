<?php
/* @var $this FilialasController */
/* @var $model Filialas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'filialas-form',
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
		<?php echo $form->labelEx($model,'adresas'); ?>
		<?php echo $form->textField($model,'adresas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'adresas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->