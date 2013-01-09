<?php
/* @var $this StatistikaController */
/* @var $data Statistika */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('statistika_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->statistika_id), array('view', 'id'=>$data->statistika_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uzklausu_skaicius')); ?>:</b>
	<?php echo CHtml::encode($data->uzklausu_skaicius); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('operaciju_skaicius')); ?>:</b>
	<?php echo CHtml::encode($data->operaciju_skaicius); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pardavimu_skaicius')); ?>:</b>
	<?php echo CHtml::encode($data->pardavimu_skaicius); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prisijungimu_skaicius')); ?>:</b>
	<?php echo CHtml::encode($data->prisijungimu_skaicius); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />


</div>