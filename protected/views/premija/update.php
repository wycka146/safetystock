<?php
/* @var $this PremijaController */
/* @var $model Premija */

$this->breadcrumbs=array(
	'Premijas'=>array('index'),
	$model->premija_id=>array('view','id'=>$model->premija_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Premija', 'url'=>array('index')),
	array('label'=>'Create Premija', 'url'=>array('create')),
	array('label'=>'View Premija', 'url'=>array('view', 'id'=>$model->premija_id)),
	array('label'=>'Manage Premija', 'url'=>array('admin')),
);
?>

<h1>Update Premija <?php echo $model->premija_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>