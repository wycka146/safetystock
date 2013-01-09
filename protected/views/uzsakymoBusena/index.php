<?php
/* @var $this UzsakymoBusenaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uzsakymo Busenas',
);

$this->menu=array(
	array('label'=>'Create UzsakymoBusena', 'url'=>array('create')),
	array('label'=>'Manage UzsakymoBusena', 'url'=>array('admin')),
);
?>

<h1>Uzsakymo Busenas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
