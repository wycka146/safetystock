<?php
/* @var $this PranesimasController */
/* @var $model Pranesimas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'pranesimas_id'); ?>
		<?php echo $form->textField($model,'pranesimas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gavejas'); ?>
		<?php echo $form->textField($model,'gavejas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'autorius'); ?>
		<?php echo $form->textField($model,'autorius'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pranesimo_tipas'); ?>
		<?php echo $form->textField($model,'pranesimo_tipas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tekstas'); ?>
		<?php echo $form->textArea($model,'tekstas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laikas'); ?>
		<?php echo $form->textField($model,'laikas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ar_perskaitytas'); ?>
		<?php echo $form->textField($model,'ar_perskaitytas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->