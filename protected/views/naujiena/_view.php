<?php
/* @var $this NaujienaController */
/* @var $data Naujiena */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('naujiena_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->naujiena_id), array('view', 'id'=>$data->naujiena_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pavadinimas')); ?>:</b>
	<?php echo CHtml::encode($data->pavadinimas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autorius')); ?>:</b>
	<?php echo CHtml::encode($data->autorius); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tekstas')); ?>:</b>
	<?php echo CHtml::encode($data->tekstas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('laikas')); ?>:</b>
	<?php echo CHtml::encode($data->laikas); ?>
	<br />


</div>