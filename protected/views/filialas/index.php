<?php
/* @var $this FilialasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Filialases',
);

$this->menu=array(
	array('label'=>'Create Filialas', 'url'=>array('create')),
	array('label'=>'Manage Filialas', 'url'=>array('admin')),
);
?>

<h1>Filialases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
