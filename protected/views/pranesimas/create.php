<?php
/* @var $this PranesimasController */
/* @var $model Pranesimas */

$this->breadcrumbs=array(
	'Pranesimases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pranesimas', 'url'=>array('index')),
	array('label'=>'Manage Pranesimas', 'url'=>array('admin')),
);
?>

<h1>Create Pranesimas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>