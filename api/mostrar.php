<!DOCTYPE html>
<html>
<head>
	<title>Mostrar datos</title>
	<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="icon" type="image/png" href="img/favicon.png" />
		  <link rel="stylesheet" href="css/bootstrap.min.css">
		  <script src="js/jquery.min.js"></script>
  		<script src="js/bootstrap.min.js"></script>
</head>
<body>
<h1>lista de datos de comentarios </h1>

<table class="table">
	<th>Nombre</th>
	<th>Correo</th>
	<th>Comentario</th>

	
	<?php
		$respuesta = file_get_contents('http://localhost/gitinit/aprendiendogit/api/getnombre.php');
		$arreglo = json_decode($respuesta, true);

		foreach ($arreglo as $dat) {
			echo '<tr>';
			echo '<td class="success">'.$dat['nombre'].'</td>';
			echo '<td>'.$dat['email'].'</td>';
			echo '<td>'.$dat['comentario'].'</td>';


			echo '</tr>';
			# code...
		}

	?>

	
	

</table>

</body>
</html>