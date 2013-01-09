<?php
/* @var $this PlanasController */
/* @var $model Planas */

$this->breadcrumbs=array(
	'Planases'=>array('index'),
	$model->planas_id=>array('view','id'=>$model->planas_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Planas', 'url'=>array('index')),
	array('label'=>'Create Planas', 'url'=>array('create')),
	array('label'=>'View Planas', 'url'=>array('view', 'id'=>$model->planas_id)),
	array('label'=>'Manage Planas', 'url'=>array('admin')),
);
?>

<h1>Update Planas <?php echo $model->planas_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>