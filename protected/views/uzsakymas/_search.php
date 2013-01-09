<?php
/* @var $this UzsakymasController */
/* @var $model Uzsakymas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'uzsakymas_id'); ?>
		<?php echo $form->textField($model,'uzsakymas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'preke'); ?>
		<?php echo $form->textField($model,'preke'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'filialas'); ?>
		<?php echo $form->textField($model,'filialas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vartotojas'); ?>
		<?php echo $form->textField($model,'vartotojas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'busena'); ?>
		<?php echo $form->textField($model,'busena'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kiekis'); ?>
		<?php echo $form->textField($model,'kiekis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prioritetas'); ?>
		<?php echo $form->textField($model,'prioritetas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->