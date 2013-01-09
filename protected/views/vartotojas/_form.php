<?php
/* @var $this VartotojasController */
/* @var $model Vartotojas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vartotojas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'prisijungimas'); ?>
		<?php echo $form->textField($model,'prisijungimas',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'prisijungimas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slaptazodis'); ?>
		<?php echo $form->textField($model,'slaptazodis',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'slaptazodis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vardas'); ?>
		<?php echo $form->textField($model,'vardas',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'vardas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pavarde'); ?>
		<?php echo $form->textField($model,'pavarde',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'pavarde'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->dropDownList($model,'role', $model->getRoleOptions()); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono_numeris'); ?>
		<?php echo $form->textField($model,'telefono_numeris',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'telefono_numeris'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'epastas'); ?>
		<?php echo $form->textField($model,'epastas',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'epastas'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->