<?php
/* @var $this StatistikaController */
/* @var $model Statistika */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'statistika_id'); ?>
		<?php echo $form->textField($model,'statistika_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'uzklausu_skaicius'); ?>
		<?php echo $form->textField($model,'uzklausu_skaicius'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'operaciju_skaicius'); ?>
		<?php echo $form->textField($model,'operaciju_skaicius'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pardavimu_skaicius'); ?>
		<?php echo $form->textField($model,'pardavimu_skaicius'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prisijungimu_skaicius'); ?>
		<?php echo $form->textField($model,'prisijungimu_skaicius'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->