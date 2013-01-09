<?php
/* @var $this VartotojasController */
/* @var $model Vartotojas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'vartotojas_id'); ?>
		<?php echo $form->textField($model,'vartotojas_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'prisijungimas'); ?>
		<?php echo $form->textField($model,'prisijungimas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'slaptazodis'); ?>
		<?php echo $form->textField($model,'slaptazodis',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vardas'); ?>
		<?php echo $form->textField($model,'vardas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pavarde'); ?>
		<?php echo $form->textField($model,'pavarde',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'role'); ?>
		<?php echo $form->textField($model,'role',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono_numeris'); ?>
		<?php echo $form->textField($model,'telefono_numeris',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'epastas'); ?>
		<?php echo $form->textField($model,'epastas',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->