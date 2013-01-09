<?php
/* @var $this SandelisController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sandelises',
);

$this->menu=array(
	array('label'=>'Create Sandelis', 'url'=>array('create')),
	array('label'=>'Manage Sandelis', 'url'=>array('admin')),
);
?>

<h1>Sandelises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
