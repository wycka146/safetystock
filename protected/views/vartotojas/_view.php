<?php
/* @var $this VartotojasController */
/* @var $data Vartotojas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('vartotojas_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->vartotojas_id), array('view', 'id'=>$data->vartotojas_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prisijungimas')); ?>:</b>
	<?php echo CHtml::encode($data->prisijungimas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slaptazodis')); ?>:</b>
	<?php echo CHtml::encode($data->slaptazodis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vardas')); ?>:</b>
	<?php echo CHtml::encode($data->vardas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pavarde')); ?>:</b>
	<?php echo CHtml::encode($data->pavarde); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('role')); ?>:</b>
	<?php echo CHtml::encode($data->role); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono_numeris')); ?>:</b>
	<?php echo CHtml::encode($data->telefono_numeris); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('epastas')); ?>:</b>
	<?php echo CHtml::encode($data->epastas); ?>
	<br />

	*/ ?>

</div>