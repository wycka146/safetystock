<?php
/* @var $this UzsakymasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Uzsakymases',
);

$this->menu=array(
	array('label'=>'Create Uzsakymas', 'url'=>array('create')),
	array('label'=>'Manage Uzsakymas', 'url'=>array('admin')),
);
?>

<h1>Užsakymų ataskaita</h1>

<table>
	<tr>
		<th>ID</th>
		<th>Preke</th>
		<th>Filialas</th>
		<th>Užsakymo kūrėjas</th>
		<th>Kiekis</th>
		<th>Prioritetas</th>
		<th>Būsena</th>
	</tr>
<?php foreach($dataProvider->getData() as $uzsakymas): ?>
	<tr>
		<td><?php echo $uzsakymas->uzsakymas_id; ?></td>
		<td><?php echo $uzsakymas->preke0->pavadinimas; ?></td>
		<td><?php echo $uzsakymas->filialas0->pavadinimas; ?></td>
		<td><?php echo $uzsakymas->vartotojas0->prisijungimas; ?></td>
		<td><?php echo $uzsakymas->kiekis; ?></td>
		<td><?php echo $uzsakymas->prioritetas; ?></td>
		<td><?php echo $uzsakymas->busena0->pavadinimas; ?></td>
	</tr>
<?php endforeach;?>
</table>
<p style="padding: 10px 0;">Viso užsakymų: <?php echo $dataProvider->itemCount;?></p>
<p style="padding: 10px 0;">Nepatvirtintų užsakymų: <?php echo Uzsakymas::model()->countByAttributes(array('busena'=>1));?></p>
<p style="padding: 10px 0;">Įvykdytų užsakymų: <?php echo Uzsakymas::model()->countByAttributes(array('busena'=>3));?></p>