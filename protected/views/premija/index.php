<?php
/* @var $this PremijaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Premijas',
);

$this->menu=array(
	array('label'=>'Create Premija', 'url'=>array('create')),
	array('label'=>'Manage Premija', 'url'=>array('admin')),
);
?>

<h1>Premijas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
