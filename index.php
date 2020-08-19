<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	    include 'conexion.php';

	    $sel = $con->query('SELECT * FROM personas');


	?>
	<table border="5">
		<caption>Registro de productos</caption>
		<thead>
			<tr>
				<th>#</th>
				<th>nombre productos</th>
				<th>precio</th>
				<th>fecha de vencimiento</th>
				<th>descripcion</th>
				<th>stock</th>
				<th>fecha de registro</th>
			</tr>
		</thead>
		<tbody>
			<?php 

            while ($var = $sel->fetch_assoc() ){
            ?>
			<tr>
				<td><?php echo $var['idproducto']; ?></td>
				<td><?php echo $var['nombreproducto']; ?></td>
				<td><?php echo $var['precio'] ?></td>
				<td><?php echo $var['fechadevencimiento'] ?></td>
				<td><?php echo $var['descripcion'] ?></td>
				<td><?php echo $var['stock'] ?></td>
				<td><?php echo $var['fechaderegistro'] ?></td>
			</tr>
		<?php } ?>
			<tr>
				<td>1</td>
				<td>queso</td>
				<td>10.00</td>
				<td>05/12/2020</td>
				<td>apestoso</td>
				<td>ninguno</td>
				<td>02/10/2020</td>
			</tr>
			<tr>
				<td>2</td>
				<td>jugo</td>
				<td>5.00</td>
				<td>02/08/2013</td>
				<td>toxico</td>
				<td>s/n</td>
				<td>07/08/2013</td>
			</tr>
			<tr>
				<td>3</td>
				<td>pollo</td>
				<td>30.00</td>
				<td>10/10/2020</td>
				<td>afresco</td>
				<td>s/n</td>
				<td>10/10/2020</td>
			</tr>
			<tr>
				<td>4</td>
				<td>jamon</td>
				<td>3.50</td>
				<td>10/20/2030</td>
				<td>cocido</td>
				<td>s/n</td>
				<td>08/08/2020</td>
			</tr>
		</tbody>
	</table>	
</body>
</html>