<?php 
	include '../conexion/conexion.php';

	$registro=mysql_query("SELECT id, nombre FROM registro;", $conexion)
	or die(json_encode('Problemas con el select'));

	$filas=array();

	while ($reg=mysql_fetch_assoc($registro)) {
		$filas[]=array_map('utf8_encode', $reg);
	}

	echo json_encode($filas);

	mysql_close();


 ?>