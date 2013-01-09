<?php
/* @var $this FilialasController */
/* @var $model Filialas */

$this->breadcrumbs=array(
	'Filialases'=>array('index'),
	$model->filialas_id=>array('view','id'=>$model->filialas_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Filialas', 'url'=>array('index')),
	array('label'=>'Create Filialas', 'url'=>array('create')),
	array('label'=>'View Filialas', 'url'=>array('view', 'id'=>$model->filialas_id)),
	array('label'=>'Manage Filialas', 'url'=>array('admin')),
);
?>

<h1>Update Filialas <?php echo $model->filialas_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>