<?php
/* @var $this UzsakymoBusenaController */
/* @var $data UzsakymoBusena */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('busena_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->busena_id), array('view', 'id'=>$data->busena_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pavadinimas')); ?>:</b>
	<?php echo CHtml::encode($data->pavadinimas); ?>
	<br />


</div>