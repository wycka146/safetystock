<?php
/* @var $this PlanasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Planases',
);

$this->menu=array(
	array('label'=>'Create Planas', 'url'=>array('create')),
	array('label'=>'Manage Planas', 'url'=>array('admin')),
);
?>

<h1>Planases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
