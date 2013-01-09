<?php
/* @var $this PranesimoTipasController */
/* @var $data PranesimoTipas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipas_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tipas_id), array('view', 'id'=>$data->tipas_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pavadinimas')); ?>:</b>
	<?php echo CHtml::encode($data->pavadinimas); ?>
	<br />


</div>