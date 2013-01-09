<?php
/* @var $this PlanasController */
/* @var $model Planas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'planas_id'); ?>
		<?php echo $form->textField($model,'planas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filialas'); ?>
		<?php echo $form->textField($model,'filialas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prekiu_patikros_daznis'); ?>
		<?php echo $form->textField($model,'prekiu_patikros_daznis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uzsakymo_kiekio_pokytis'); ?>
		<?php echo $form->textField($model,'uzsakymo_kiekio_pokytis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'aptarnavimo_lygis'); ?>
		<?php echo $form->textField($model,'aptarnavimo_lygis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'galiojimo_laikas'); ?>
		<?php echo $form->textField($model,'galiojimo_laikas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->