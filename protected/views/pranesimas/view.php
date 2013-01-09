<?php
/* @var $this PranesimasController */
/* @var $model Pranesimas */

$this->breadcrumbs=array(
	'Pranesimases'=>array('index'),
	$model->pranesimas_id,
);

$this->menu=array(
	array('label'=>'List Pranesimas', 'url'=>array('index')),
	array('label'=>'Create Pranesimas', 'url'=>array('create')),
	array('label'=>'Update Pranesimas', 'url'=>array('update', 'id'=>$model->pranesimas_id)),
	array('label'=>'Delete Pranesimas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pranesimas_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pranesimas', 'url'=>array('admin')),
);
?>

<h1>View Pranesimas #<?php echo $model->pranesimas_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'pranesimas_id',
		'gavejas',
		'autorius',
		'pranesimo_tipas',
		'tekstas',
		'laikas',
		'ar_perskaitytas',
	),
)); ?>
