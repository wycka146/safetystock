<?php
/* @var $this PrekeSandelyjeController */
/* @var $model PrekeSandelyje */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'preke-sandelyje-paskirti-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Laukeliai su <span class="required">*</span> yra privalomi.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'preke'); ?>
		<?php echo $form->dropDownList($model,'preke', Preke::getPrekeOptions()); ?>
		<?php echo $form->error($model,'preke'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sandelis'); ?>
		<?php echo $form->dropDownList($model,'sandelis', Sandelis::getSandelisOptions()); ?>
		<?php echo $form->error($model,'sandelis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kiekis'); ?>
		<?php echo $form->textField($model,'kiekis'); ?>
		<?php echo $form->error($model,'kiekis'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->