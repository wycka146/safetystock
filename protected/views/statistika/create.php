<?php
/* @var $this StatistikaController */
/* @var $model Statistika */

$this->breadcrumbs=array(
	'Statistikas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Statistika', 'url'=>array('index')),
	array('label'=>'Manage Statistika', 'url'=>array('admin')),
);
?>

<h1>Create Statistika</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>