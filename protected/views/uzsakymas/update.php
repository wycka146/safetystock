<?php
/* @var $this UzsakymasController */
/* @var $model Uzsakymas */

$this->breadcrumbs=array(
	'Uzsakymases'=>array('index'),
	$model->uzsakymas_id=>array('view','id'=>$model->uzsakymas_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Uzsakymas', 'url'=>array('index')),
	array('label'=>'Create Uzsakymas', 'url'=>array('create')),
	array('label'=>'View Uzsakymas', 'url'=>array('view', 'id'=>$model->uzsakymas_id)),
	array('label'=>'Manage Uzsakymas', 'url'=>array('admin')),
);
?>

<h1>Update Uzsakymas <?php echo $model->uzsakymas_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>