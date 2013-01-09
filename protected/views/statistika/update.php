<?php
/* @var $this StatistikaController */
/* @var $model Statistika */

$this->breadcrumbs=array(
	'Statistikas'=>array('index'),
	$model->statistika_id=>array('view','id'=>$model->statistika_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Statistika', 'url'=>array('index')),
	array('label'=>'Create Statistika', 'url'=>array('create')),
	array('label'=>'View Statistika', 'url'=>array('view', 'id'=>$model->statistika_id)),
	array('label'=>'Manage Statistika', 'url'=>array('admin')),
);
?>

<h1>Update Statistika <?php echo $model->statistika_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>