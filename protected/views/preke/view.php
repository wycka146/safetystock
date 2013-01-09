<?php
/* @var $this PrekeController */
/* @var $model Preke */

$this->breadcrumbs=array(
	'Prekes'=>array('index'),
	$model->preke_id,
);

$this->menu=array(
	array('label'=>'List Preke', 'url'=>array('index')),
	array('label'=>'Create Preke', 'url'=>array('create')),
	array('label'=>'Update Preke', 'url'=>array('update', 'id'=>$model->preke_id)),
	array('label'=>'Delete Preke', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->preke_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Preke', 'url'=>array('admin')),
);
?>

<h1>View Preke #<?php echo $model->preke_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'preke_id',
		'pavadinimas',
		'kaina',
		'atsargu_kiekis',
	),
)); ?>
