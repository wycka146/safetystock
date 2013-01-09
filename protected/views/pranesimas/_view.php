<?php
/* @var $this PranesimasController */
/* @var $data Pranesimas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('pranesimas_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pranesimas_id), array('view', 'id'=>$data->pranesimas_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gavejas')); ?>:</b>
	<?php echo CHtml::encode($data->gavejas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autorius')); ?>:</b>
	<?php echo CHtml::encode($data->autorius); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pranesimo_tipas')); ?>:</b>
	<?php echo CHtml::encode($data->pranesimo_tipas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tekstas')); ?>:</b>
	<?php echo CHtml::encode($data->tekstas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laikas')); ?>:</b>
	<?php echo CHtml::encode($data->laikas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ar_perskaitytas')); ?>:</b>
	<?php echo CHtml::encode($data->ar_perskaitytas); ?>
	<br />


</div>