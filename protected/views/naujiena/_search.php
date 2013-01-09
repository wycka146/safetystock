<?php
/* @var $this NaujienaController */
/* @var $model Naujiena */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'naujiena_id'); ?>
		<?php echo $form->textField($model,'naujiena_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pavadinimas'); ?>
		<?php echo $form->textField($model,'pavadinimas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'autorius'); ?>
		<?php echo $form->textField($model,'autorius'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tekstas'); ?>
		<?php echo $form->textArea($model,'tekstas',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'laikas'); ?>
		<?php echo $form->textField($model,'laikas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->