<?php
/* @var $this UzsakymoBusenaController */
/* @var $model UzsakymoBusena */

$this->breadcrumbs=array(
	'Uzsakymo Busenas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List UzsakymoBusena', 'url'=>array('index')),
	array('label'=>'Manage UzsakymoBusena', 'url'=>array('admin')),
);
?>

<h1>Create UzsakymoBusena</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>