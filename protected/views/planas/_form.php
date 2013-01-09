<?php
/* @var $this PlanasController */
/* @var $model Planas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'planas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'filialas'); ?>
		<?php echo $form->dropDownList($model,'filialas', Filialas::getFilialasOptions()); ?>
		<?php echo $form->error($model,'filialas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prekiu_patikros_daznis'); ?>
		<?php echo $form->textField($model,'prekiu_patikros_daznis'); ?>
		<?php echo $form->error($model,'prekiu_patikros_daznis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uzsakymo_kiekio_pokytis'); ?>
		<?php echo $form->textField($model,'uzsakymo_kiekio_pokytis'); ?>
		<?php echo $form->error($model,'uzsakymo_kiekio_pokytis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aptarnavimo_lygis'); ?>
		<?php echo $form->textField($model,'aptarnavimo_lygis'); ?>
		<?php echo $form->error($model,'aptarnavimo_lygis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'galiojimo_laikas'); ?>
		<?php echo $form->textField($model,'galiojimo_laikas'); ?>
		<?php echo $form->error($model,'galiojimo_laikas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->