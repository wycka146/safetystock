<?php
/* @var $this SandelisController */
/* @var $model Sandelis */

$this->breadcrumbs=array(
	'Sandelises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sandelis', 'url'=>array('index')),
	array('label'=>'Manage Sandelis', 'url'=>array('admin')),
);
?>

<h1>Create Sandelis</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>