<?php
/* @var $this NaujienaController */
/* @var $model Naujiena */

$this->breadcrumbs=array(
	'Naujienas'=>array('index'),
	$model->naujiena_id,
);

$this->menu=array(
	array('label'=>'List Naujiena', 'url'=>array('index')),
	array('label'=>'Create Naujiena', 'url'=>array('create')),
	array('label'=>'Update Naujiena', 'url'=>array('update', 'id'=>$model->naujiena_id)),
	array('label'=>'Delete Naujiena', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->naujiena_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Naujiena', 'url'=>array('admin')),
);
?>

<h1>View Naujiena #<?php echo $model->naujiena_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'naujiena_id',
		'pavadinimas',
		'autorius',
		'tekstas',
		'laikas',
	),
)); ?>
