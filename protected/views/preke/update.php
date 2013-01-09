<?php
/* @var $this PrekeController */
/* @var $model Preke */

$this->breadcrumbs=array(
	'Prekes'=>array('index'),
	$model->preke_id=>array('view','id'=>$model->preke_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Preke', 'url'=>array('index')),
	array('label'=>'Create Preke', 'url'=>array('create')),
	array('label'=>'View Preke', 'url'=>array('view', 'id'=>$model->preke_id)),
	array('label'=>'Manage Preke', 'url'=>array('admin')),
);
?>

<h1>Update Preke <?php echo $model->preke_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>