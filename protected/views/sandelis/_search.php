<?php
/* @var $this SandelisController */
/* @var $model Sandelis */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'sandelio_id'); ?>
		<?php echo $form->textField($model,'sandelio_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pavadinimas'); ?>
		<?php echo $form->textField($model,'pavadinimas',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'adresas'); ?>
		<?php echo $form->textField($model,'adresas',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->