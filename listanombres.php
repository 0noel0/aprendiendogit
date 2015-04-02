<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>Lista de Nombres</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="icon" type="image/png" href="img/favicon.png" />
	  	<link rel="stylesheet" href="css/bootstrap.min.css">
	  	<script src="js/jquery.min.js"></script>
	  	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	
	<h1>Lista de Nombres</h1>
	<table class="table table-striped">	
		<thead>
			<tr>
				<th>
					ID
				</th>
				<th>
					NOMBRE DEL FULANO
				</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				$datos = file_get_contents("http://localhost/aprendiendogit/api/getnombres.php");
				$arreglo = json_decode($datos, true);

				foreach ($arreglo as $row) {
					echo "<tr>";
						echo "<td>$row[id]</td>";
						echo "<td>$row[nombre]</td>";
					echo "</tr>";
				}
			 ?>	
		</tbody>
	</table>
</body>
</html>