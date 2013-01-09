<?php
/* @var $this VartotojasController */
/* @var $model Vartotojas */

$this->breadcrumbs=array(
	'Vartotojases'=>array('index'),
	$model->vartotojas_id=>array('view','id'=>$model->vartotojas_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vartotojas', 'url'=>array('index')),
	array('label'=>'Create Vartotojas', 'url'=>array('create')),
	array('label'=>'View Vartotojas', 'url'=>array('view', 'id'=>$model->vartotojas_id)),
	array('label'=>'Manage Vartotojas', 'url'=>array('admin')),
);
?>

<h1>Update Vartotojas <?php echo $model->vartotojas_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>