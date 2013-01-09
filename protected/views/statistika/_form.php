<?php
/* @var $this StatistikaController */
/* @var $model Statistika */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'statistika-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'uzklausu_skaicius'); ?>
		<?php echo $form->textField($model,'uzklausu_skaicius'); ?>
		<?php echo $form->error($model,'uzklausu_skaicius'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'operaciju_skaicius'); ?>
		<?php echo $form->textField($model,'operaciju_skaicius'); ?>
		<?php echo $form->error($model,'operaciju_skaicius'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pardavimu_skaicius'); ?>
		<?php echo $form->textField($model,'pardavimu_skaicius'); ?>
		<?php echo $form->error($model,'pardavimu_skaicius'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prisijungimu_skaicius'); ?>
		<?php echo $form->textField($model,'prisijungimu_skaicius'); ?>
		<?php echo $form->error($model,'prisijungimu_skaicius'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->