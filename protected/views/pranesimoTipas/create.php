<?php
/* @var $this PranesimoTipasController */
/* @var $model PranesimoTipas */

$this->breadcrumbs=array(
	'Pranesimo Tipases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PranesimoTipas', 'url'=>array('index')),
	array('label'=>'Manage PranesimoTipas', 'url'=>array('admin')),
);
?>

<h1>Create PranesimoTipas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>