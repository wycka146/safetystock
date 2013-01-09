<?php
/* @var $this VartotojasController */
/* @var $model Vartotojas */

$this->breadcrumbs=array(
	'Vartotojases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vartotojas', 'url'=>array('index')),
	array('label'=>'Manage Vartotojas', 'url'=>array('admin')),
);
?>

<h1>Create Vartotojas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>