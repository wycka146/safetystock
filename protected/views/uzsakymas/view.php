<?php
/* @var $this UzsakymasController */
/* @var $model Uzsakymas */

$this->breadcrumbs=array(
	'Uzsakymases'=>array('index'),
	$model->uzsakymas_id,
);

$this->menu=array(
	array('label'=>'List Uzsakymas', 'url'=>array('index')),
	array('label'=>'Create Uzsakymas', 'url'=>array('create')),
	array('label'=>'Update Uzsakymas', 'url'=>array('update', 'id'=>$model->uzsakymas_id)),
	array('label'=>'Delete Uzsakymas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->uzsakymas_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Uzsakymas', 'url'=>array('admin')),
);
?>

<h1>View Uzsakymas #<?php echo $model->uzsakymas_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'uzsakymas_id',
		'preke',
		'filialas',
		'vartotojas',
		'busena',
		'kiekis',
		'prioritetas',
	),
)); ?>
