<?php
/* @var $this VartotojasController */
/* @var $model Vartotojas */

$this->breadcrumbs=array(
	'Vartotojases'=>array('index'),
	$model->vartotojas_id,
);

$this->menu=array(
	array('label'=>'List Vartotojas', 'url'=>array('index')),
	array('label'=>'Create Vartotojas', 'url'=>array('create')),
	array('label'=>'Update Vartotojas', 'url'=>array('update', 'id'=>$model->vartotojas_id)),
	array('label'=>'Delete Vartotojas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->vartotojas_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vartotojas', 'url'=>array('admin')),
);
?>

<h1>View Vartotojas #<?php echo $model->vartotojas_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'vartotojas_id',
		'prisijungimas',
		'slaptazodis',
		'vardas',
		'pavarde',
		'role',
		'telefono_numeris',
		'epastas',
	),
)); ?>
