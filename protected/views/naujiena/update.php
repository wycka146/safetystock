<?php
/* @var $this NaujienaController */
/* @var $model Naujiena */

$this->breadcrumbs=array(
	'Naujienas'=>array('index'),
	$model->naujiena_id=>array('view','id'=>$model->naujiena_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Naujiena', 'url'=>array('index')),
	array('label'=>'Create Naujiena', 'url'=>array('create')),
	array('label'=>'View Naujiena', 'url'=>array('view', 'id'=>$model->naujiena_id)),
	array('label'=>'Manage Naujiena', 'url'=>array('admin')),
);
?>

<h1>Update Naujiena <?php echo $model->naujiena_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>