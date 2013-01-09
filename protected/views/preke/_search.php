<?php
/* @var $this PrekeController */
/* @var $model Preke */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'preke_id'); ?>
		<?php echo $form->textField($model,'preke_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pavadinimas'); ?>
		<?php echo $form->textField($model,'pavadinimas',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kaina'); ?>
		<?php echo $form->textField($model,'kaina',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'atsargu_kiekis'); ?>
		<?php echo $form->textField($model,'atsargu_kiekis'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->