<?php
/* @var $this PremijaController */
/* @var $data Premija */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('premija_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->premija_id), array('view', 'id'=>$data->premija_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vartotojas')); ?>:</b>
	<?php echo CHtml::encode($data->vartotojas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('komentaras')); ?>:</b>
	<?php echo CHtml::encode($data->komentaras); ?>
	<br />


</div>