<?php
/* @var $this PranesimasController */
/* @var $model Pranesimas */

$this->breadcrumbs=array(
	'Pranesimases'=>array('index'),
	$model->pranesimas_id=>array('view','id'=>$model->pranesimas_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pranesimas', 'url'=>array('index')),
	array('label'=>'Create Pranesimas', 'url'=>array('create')),
	array('label'=>'View Pranesimas', 'url'=>array('view', 'id'=>$model->pranesimas_id)),
	array('label'=>'Manage Pranesimas', 'url'=>array('admin')),
);
?>

<h1>Update Pranesimas <?php echo $model->pranesimas_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>