<?php
/* @var $this PranesimoTipasController */
/* @var $model PranesimoTipas */

$this->breadcrumbs=array(
	'Pranesimo Tipases'=>array('index'),
	$model->tipas_id=>array('view','id'=>$model->tipas_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PranesimoTipas', 'url'=>array('index')),
	array('label'=>'Create PranesimoTipas', 'url'=>array('create')),
	array('label'=>'View PranesimoTipas', 'url'=>array('view', 'id'=>$model->tipas_id)),
	array('label'=>'Manage PranesimoTipas', 'url'=>array('admin')),
);
?>

<h1>Update PranesimoTipas <?php echo $model->tipas_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>