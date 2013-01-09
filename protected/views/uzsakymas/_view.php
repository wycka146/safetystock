<?php
/* @var $this UzsakymasController */
/* @var $data Uzsakymas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('uzsakymas_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->uzsakymas_id), array('view', 'id'=>$data->uzsakymas_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('preke')); ?>:</b>
	<?php echo CHtml::encode($data->preke); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filialas')); ?>:</b>
	<?php echo CHtml::encode($data->filialas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vartotojas')); ?>:</b>
	<?php echo CHtml::encode($data->vartotojas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('busena')); ?>:</b>
	<?php echo CHtml::encode($data->busena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kiekis')); ?>:</b>
	<?php echo CHtml::encode($data->kiekis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prioritetas')); ?>:</b>
	<?php echo CHtml::encode($data->prioritetas); ?>
	<br />


</div>