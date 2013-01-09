<?php
/* @var $this PrekeController */
/* @var $data Preke */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('preke_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->preke_id), array('view', 'id'=>$data->preke_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pavadinimas')); ?>:</b>
	<?php echo CHtml::encode($data->pavadinimas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kaina')); ?>:</b>
	<?php echo CHtml::encode($data->kaina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atsargu_kiekis')); ?>:</b>
	<?php echo CHtml::encode($data->atsargu_kiekis); ?>
	<br />


</div>