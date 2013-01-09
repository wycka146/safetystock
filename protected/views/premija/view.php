<?php
/* @var $this PremijaController */
/* @var $model Premija */

$this->breadcrumbs=array(
	'Premijas'=>array('index'),
	$model->premija_id,
);

$this->menu=array(
	array('label'=>'List Premija', 'url'=>array('index')),
	array('label'=>'Create Premija', 'url'=>array('create')),
	array('label'=>'Update Premija', 'url'=>array('update', 'id'=>$model->premija_id)),
	array('label'=>'Delete Premija', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->premija_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Premija', 'url'=>array('admin')),
);
?>

<h1>View Premija #<?php echo $model->premija_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'premija_id',
		'vartotojas',
		'komentaras',
	),
)); ?>
