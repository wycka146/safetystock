<?php
/* @var $this UzsakymasController */
/* @var $model Uzsakymas */

$this->breadcrumbs=array(
	'Uzsakymases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Uzsakymas', 'url'=>array('index')),
	array('label'=>'Manage Uzsakymas', 'url'=>array('admin')),
);
?>

<h1>Create Uzsakymas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>