<?php
/* @var $this PremijaController */
/* @var $model Premija */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'premija_id'); ?>
		<?php echo $form->textField($model,'premija_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vartotojas'); ?>
		<?php echo $form->textField($model,'vartotojas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'komentaras'); ?>
		<?php echo $form->textArea($model,'komentaras',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->