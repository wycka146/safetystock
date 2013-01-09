<?php
/* @var $this PranesimasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pranesimases',
);

$this->menu=array(
	array('label'=>'Create Pranesimas', 'url'=>array('create')),
	array('label'=>'Manage Pranesimas', 'url'=>array('admin')),
);
?>

<h2 class="section-title">Asmeniniai pranesimai</h2>

<a class="rasyti-nauja-pranesima" href="<?php echo $this->createUrl('pranesimas/create'); ?>">Rašyti naują</a>

<?php foreach($dataProvider->getData() as $pranesimas): ?>
<div class="pranesimas <?php echo PranesimoTipas::getTipasClass($pranesimas->pranesimo_tipas);?>">
    <h2>Žinutė nuo: <span class="autorius"> <?php echo Vartotojas::model()->findByPk($pranesimas->autorius)->prisijungimas; ?></span>, gauta <span class="data"><?php echo $pranesimas->laikas;?></span> <span class="tipas">(<?php echo PranesimoTipas::model()->findByPk($pranesimas->pranesimo_tipas)->pavadinimas; ?>)</span></h2>
    <p class="dsfzinute">
    	<?php echo $pranesimas->tekstas; ?>
    </p>
    <?php 
	echo CHtml::link(CHtml::encode('Trinti'), array('image/delete', 'id'=>$pranesimas->pranesimas_id),
		array(
			'submit'=>array('pranesimas/delete', 'id'=>$pranesimas->pranesimas_id),
			'class' => 'trinti','confirm'=>'Tikrai norite istrinti pranesima?'
 		)
	);
?>
</div>

<?php endforeach; ?>

