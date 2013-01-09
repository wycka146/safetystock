<?php
/* @var $this PranesimoTipasController */
/* @var $model PranesimoTipas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pranesimo-tipas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'pavadinimas'); ?>
		<?php echo $form->textField($model,'pavadinimas',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pavadinimas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->