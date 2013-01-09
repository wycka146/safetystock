<?php
/* @var $this UzsakymoBusenaController */
/* @var $model UzsakymoBusena */

$this->breadcrumbs=array(
	'Uzsakymo Busenas'=>array('index'),
	$model->busena_id=>array('view','id'=>$model->busena_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UzsakymoBusena', 'url'=>array('index')),
	array('label'=>'Create UzsakymoBusena', 'url'=>array('create')),
	array('label'=>'View UzsakymoBusena', 'url'=>array('view', 'id'=>$model->busena_id)),
	array('label'=>'Manage UzsakymoBusena', 'url'=>array('admin')),
);
?>

<h1>Update UzsakymoBusena <?php echo $model->busena_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>