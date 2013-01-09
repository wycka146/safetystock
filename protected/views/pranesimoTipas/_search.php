<?php
/* @var $this PranesimoTipasController */
/* @var $model PranesimoTipas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'tipas_id'); ?>
		<?php echo $form->textField($model,'tipas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pavadinimas'); ?>
		<?php echo $form->textField($model,'pavadinimas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->