<?php
/* @var $this VartotojasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vartotojases',
);

?>

<h1>Vartotojų ataskaita</h1>

<table>
	<tr>
		<th>ID</th>
		<th>Prisijungimas</th>
		<th>Vardas</th>
		<th>Pavarde</th>
		<th>Role</th>
		<th>E-pastas</th>
	</tr>
<?php foreach($dataProvider->getData() as $vartotojas): ?>
	<tr>
		<td><?php echo $vartotojas->vartotojas_id; ?></td>
		<td><?php echo $vartotojas->prisijungimas; ?></td>
		<td><?php echo $vartotojas->vardas; ?></td>
		<td><?php echo $vartotojas->pavarde; ?></td>
		<td><?php echo $vartotojas->role; ?></td>
		<td><?php echo $vartotojas->epastas; ?></td>
	</tr>
<?php endforeach;?>
</table>
<p style="padding: 10px 0;">Viso vartotojų: <?php echo $dataProvider->itemCount;?></p>