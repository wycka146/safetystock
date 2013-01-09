<?php
/* @var $this SandelisController */
/* @var $data Sandelis */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sandelio_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sandelio_id), array('view', 'id'=>$data->sandelio_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pavadinimas')); ?>:</b>
	<?php echo CHtml::encode($data->pavadinimas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adresas')); ?>:</b>
	<?php echo CHtml::encode($data->adresas); ?>
	<br />


</div>