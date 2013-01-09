<?php
/* @var $this PlanasController */
/* @var $model Planas */

$this->breadcrumbs=array(
	'Planases'=>array('index'),
	$model->planas_id,
);

$this->menu=array(
	array('label'=>'List Planas', 'url'=>array('index')),
	array('label'=>'Create Planas', 'url'=>array('create')),
	array('label'=>'Update Planas', 'url'=>array('update', 'id'=>$model->planas_id)),
	array('label'=>'Delete Planas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->planas_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Planas', 'url'=>array('admin')),
);
?>

<h1>View Planas #<?php echo $model->planas_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'planas_id',
		'filialas',
		'prekiu_patikros_daznis',
		'uzsakymo_kiekio_pokytis',
		'aptarnavimo_lygis',
		'galiojimo_laikas',
	),
)); ?>
