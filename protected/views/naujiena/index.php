<?php
/* @var $this NaujienaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Naujienas',
);

$this->menu=array(
	array('label'=>'Create Naujiena', 'url'=>array('create')),
	array('label'=>'Manage Naujiena', 'url'=>array('admin')),
);
?>

<h2 class="section-title">Naujienos</h2>

<?php foreach($dataProvider->getData() as $naujiena): ?>
<div class="news-post">
    <h2 class="title"><?php echo $naujiena->pavadinimas; ?></h2>
    <ul class="meta clearfix">
        <li>Autorius: <?php echo Vartotojas::model()->findByPk($naujiena->autorius)->prisijungimas; ?></li>
        <li>Data: 2012 12 14</li>
    </ul>
    <p><?php echo $naujiena->tekstas; ?></p>
</div>
<?php endforeach; ?>