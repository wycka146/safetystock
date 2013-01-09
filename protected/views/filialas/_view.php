<?php
/* @var $this FilialasController */
/* @var $data Filialas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('filialas_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->filialas_id), array('view', 'id'=>$data->filialas_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pavadinimas')); ?>:</b>
	<?php echo CHtml::encode($data->pavadinimas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adresas')); ?>:</b>
	<?php echo CHtml::encode($data->adresas); ?>
	<br />


</div>