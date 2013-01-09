<?php
/* @var $this PranesimoTipasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pranesimo Tipases',
);

$this->menu=array(
	array('label'=>'Create PranesimoTipas', 'url'=>array('create')),
	array('label'=>'Manage PranesimoTipas', 'url'=>array('admin')),
);
?>

<h1>Pranesimo Tipases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
