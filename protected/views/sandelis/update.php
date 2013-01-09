<?php
/* @var $this SandelisController */
/* @var $model Sandelis */

$this->breadcrumbs=array(
	'Sandelises'=>array('index'),
	$model->sandelio_id=>array('view','id'=>$model->sandelio_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sandelis', 'url'=>array('index')),
	array('label'=>'Create Sandelis', 'url'=>array('create')),
	array('label'=>'View Sandelis', 'url'=>array('view', 'id'=>$model->sandelio_id)),
	array('label'=>'Manage Sandelis', 'url'=>array('admin')),
);
?>

<h1>Update Sandelis <?php echo $model->sandelio_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>