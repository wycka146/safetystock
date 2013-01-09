<?php
/* @var $this UzsakymasController */
/* @var $model Uzsakymas */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'uzsakymas-form',
		'enableAjaxValidation'=>false,
	)); ?>

	<p class="note">Laukeliai su <span class="required">*</span> yra privalomi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'preke'); ?>
		<?php echo $form->dropDownList($model,'preke', Preke::getPrekeOptions()); ?>
		<?php echo $form->error($model,'preke'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'filialas'); ?>
		<?php echo $form->dropDownList($model,'filialas', Filialas::getFilialasOptions()); ?>
		<?php echo $form->error($model,'filialas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'busena'); ?>
		<?php echo $form->dropDownList($model,'busena', UzsakymoBusena::getUzsakymoBusenaOptions()); ?>
		<?php echo $form->error($model,'busena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kiekis'); ?>
		<?php echo $form->textField($model,'kiekis'); ?>
		<?php echo $form->error($model,'kiekis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prioritetas'); ?>
		<?php echo $form->dropDownList($model,'prioritetas', Uzsakymas::getPriorityOptions()); ?>
		<?php echo $form->error($model,'prioritetas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->