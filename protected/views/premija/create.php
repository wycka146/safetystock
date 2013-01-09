<?php
/* @var $this PremijaController */
/* @var $model Premija */

$this->breadcrumbs=array(
	'Premijas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Premija', 'url'=>array('index')),
	array('label'=>'Manage Premija', 'url'=>array('admin')),
);
?>

<h1>Create Premija</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>