<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $titulo; ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
	<h3>Ejemplo formularios</h3>
	<form class="form-group" action="<?php echo site_url('index/client') ?>" method="post">
		<label for="nombre">Nombre</label>
		<input class="form-control" type="text" name="nombre" value="" placeholder="Ingrese el nombre" required>
		<label for="password">Password</label>
		<input class="form-control" type="password" name="password" value="" placeholder="Ingrese el password" required>
		<button class="btn btn-primary" type="submit">Boton Guardar</button>
	</form>
	<hr>
	<table class="table table-hover table-striped">
		<thead>
			<th></th>
			<th></th>
			<th></th>
		</thead>
		<tbody>
			<?php foreach ($resultados as $row): ?>
				<tr>
					<td><?php echo $row->idusuario; ?></td>
					<td><?php echo $row->usuario; ?></td>
					<td><?php echo $row->pass; ?></td>
				</tr>
			<?php endforeach ?>
		</tbody>
		<tfoot>
			<th></th>
			<th></th>
			<th></th>
		</tfoot>
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>