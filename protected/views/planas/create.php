<?php
/* @var $this PlanasController */
/* @var $model Planas */

$this->breadcrumbs=array(
	'Planases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Planas', 'url'=>array('index')),
	array('label'=>'Manage Planas', 'url'=>array('admin')),
);
?>

<h1>Create Planas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>