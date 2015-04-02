<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de personas Registradas</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"	></script>
</head>
<body>

	<header>
		<h1>Listado de Personas Registradas</h1>
	</header>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Comentario</th>
			</tr>
		</thead>
		<tbody>
			<?php 

			/*
			$handler = curl_init("http://localhost/aprendiendogit/api/getlist.php");  
			//$response = curl_exec ($handler);  
			 
			$arreglo = array();
			//$arreglo=json_decode($response); 
			echo $arreglo=json_decode(curl_exec ($handler)); 
			
			curl_close($handler); 

			foreach($arreglo as $row) { 
				echo "<tr>"; 
					echo "<td>$row[id]</td>"; 
					echo "<td>$row[nombre]</td>";  
					echo "<td>$row[email]</td>";  
					echo "<td>$row[comentario]</td>";  
				echo "</tr>";  
			}
			*/

			$data = file_get_contents("http://localhost/gitinit/aprendiendogit/api/getlist.php");
			$products = json_decode($data, true);

			foreach ($products as $row) {
			   echo "<tr>"; 
					echo "<td>$row[id]</td>"; 
					echo "<td>$row[nombre]</td>";  
					echo "<td>$row[email]</td>";  
					echo "<td>$row[comentario]</td>";  
				echo "</tr>"; 
			}
			?>
		</tbody>

	</table>
	<footer>
		<h3>All Rigth reserverd ;) </h3>
		

	</footer>
</body>
</html>