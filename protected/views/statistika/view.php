<?php
/* @var $this StatistikaController */
/* @var $model Statistika */

$this->breadcrumbs=array(
	'Statistikas'=>array('index'),
	$model->statistika_id,
);

$this->menu=array(
	array('label'=>'List Statistika', 'url'=>array('index')),
	array('label'=>'Create Statistika', 'url'=>array('create')),
	array('label'=>'Update Statistika', 'url'=>array('update', 'id'=>$model->statistika_id)),
	array('label'=>'Delete Statistika', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->statistika_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Statistika', 'url'=>array('admin')),
);
?>

<h1>View Statistika #<?php echo $model->statistika_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'statistika_id',
		'uzklausu_skaicius',
		'operaciju_skaicius',
		'pardavimu_skaicius',
		'prisijungimu_skaicius',
		'data',
	),
)); ?>
