<?php
/* @var $this StatistikaController */
/* @var $model Statistika */

$this->breadcrumbs=array(
	'Statistikas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Statistika', 'url'=>array('index')),
	array('label'=>'Create Statistika', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('statistika-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Statistikas</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'statistika-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'statistika_id',
		'uzklausu_skaicius',
		'operaciju_skaicius',
		'pardavimu_skaicius',
		'prisijungimu_skaicius',
		'data',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
