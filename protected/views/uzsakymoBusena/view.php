<?php
/* @var $this UzsakymoBusenaController */
/* @var $model UzsakymoBusena */

$this->breadcrumbs=array(
	'Uzsakymo Busenas'=>array('index'),
	$model->busena_id,
);

$this->menu=array(
	array('label'=>'List UzsakymoBusena', 'url'=>array('index')),
	array('label'=>'Create UzsakymoBusena', 'url'=>array('create')),
	array('label'=>'Update UzsakymoBusena', 'url'=>array('update', 'id'=>$model->busena_id)),
	array('label'=>'Delete UzsakymoBusena', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->busena_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UzsakymoBusena', 'url'=>array('admin')),
);
?>

<h1>View UzsakymoBusena #<?php echo $model->busena_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'busena_id',
		'pavadinimas',
	),
)); ?>
