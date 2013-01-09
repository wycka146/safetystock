<?php
/* @var $this FilialasController */
/* @var $model Filialas */

$this->breadcrumbs=array(
	'Filialases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Filialas', 'url'=>array('index')),
	array('label'=>'Manage Filialas', 'url'=>array('admin')),
);
?>

<h1>Create Filialas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>