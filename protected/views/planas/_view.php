<?php
/* @var $this PlanasController */
/* @var $data Planas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('planas_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->planas_id), array('view', 'id'=>$data->planas_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filialas')); ?>:</b>
	<?php echo CHtml::encode($data->filialas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prekiu_patikros_daznis')); ?>:</b>
	<?php echo CHtml::encode($data->prekiu_patikros_daznis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uzsakymo_kiekio_pokytis')); ?>:</b>
	<?php echo CHtml::encode($data->uzsakymo_kiekio_pokytis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aptarnavimo_lygis')); ?>:</b>
	<?php echo CHtml::encode($data->aptarnavimo_lygis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('galiojimo_laikas')); ?>:</b>
	<?php echo CHtml::encode($data->galiojimo_laikas); ?>
	<br />


</div>