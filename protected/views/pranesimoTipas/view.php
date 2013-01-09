<?php
/* @var $this PranesimoTipasController */
/* @var $model PranesimoTipas */

$this->breadcrumbs=array(
	'Pranesimo Tipases'=>array('index'),
	$model->tipas_id,
);

$this->menu=array(
	array('label'=>'List PranesimoTipas', 'url'=>array('index')),
	array('label'=>'Create PranesimoTipas', 'url'=>array('create')),
	array('label'=>'Update PranesimoTipas', 'url'=>array('update', 'id'=>$model->tipas_id)),
	array('label'=>'Delete PranesimoTipas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->tipas_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PranesimoTipas', 'url'=>array('admin')),
);
?>

<h1>View PranesimoTipas #<?php echo $model->tipas_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'tipas_id',
		'pavadinimas',
	),
)); ?>
