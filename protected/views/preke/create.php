<?php
/* @var $this PrekeController */
/* @var $model Preke */

$this->breadcrumbs=array(
	'Prekes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Preke', 'url'=>array('index')),
	array('label'=>'Manage Preke', 'url'=>array('admin')),
);
?>

<h1>Create Preke</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>