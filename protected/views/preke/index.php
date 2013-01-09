<?php
/* @var $this PrekeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prekes',
);

$this->menu=array(
	array('label'=>'Create Preke', 'url'=>array('create')),
	array('label'=>'Manage Preke', 'url'=>array('admin')),
);
?>

<h1>Prekes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
