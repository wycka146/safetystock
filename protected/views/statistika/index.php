<?php
/* @var $this StatistikaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Statistikas',
);

$this->menu=array(
	array('label'=>'Create Statistika', 'url'=>array('create')),
	array('label'=>'Manage Statistika', 'url'=>array('admin')),
);
?>

<h1>Statistikas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
