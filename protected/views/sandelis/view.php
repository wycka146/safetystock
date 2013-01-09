<?php
/* @var $this SandelisController */
/* @var $model Sandelis */

$this->breadcrumbs=array(
	'Sandelises'=>array('index'),
	$model->sandelio_id,
);

$this->menu=array(
	array('label'=>'List Sandelis', 'url'=>array('index')),
	array('label'=>'Create Sandelis', 'url'=>array('create')),
	array('label'=>'Update Sandelis', 'url'=>array('update', 'id'=>$model->sandelio_id)),
	array('label'=>'Delete Sandelis', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sandelio_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sandelis', 'url'=>array('admin')),
);
?>

<h1>View Sandelis #<?php echo $model->sandelio_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sandelio_id',
		'pavadinimas',
		'adresas',
	),
)); ?>
