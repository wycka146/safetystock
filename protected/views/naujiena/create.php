<?php
/* @var $this NaujienaController */
/* @var $model Naujiena */

$this->breadcrumbs=array(
	'Naujienas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Naujiena', 'url'=>array('index')),
	array('label'=>'Manage Naujiena', 'url'=>array('admin')),
);
?>

<h1>Create Naujiena</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>