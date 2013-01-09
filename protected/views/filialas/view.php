<?php
/* @var $this FilialasController */
/* @var $model Filialas */

$this->breadcrumbs=array(
	'Filialases'=>array('index'),
	$model->filialas_id,
);

$this->menu=array(
	array('label'=>'List Filialas', 'url'=>array('index')),
	array('label'=>'Create Filialas', 'url'=>array('create')),
	array('label'=>'Update Filialas', 'url'=>array('update', 'id'=>$model->filialas_id)),
	array('label'=>'Delete Filialas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->filialas_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Filialas', 'url'=>array('admin')),
);
?>

<h1>View Filialas #<?php echo $model->filialas_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'filialas_id',
		'pavadinimas',
		'adresas',
	),
)); ?>
