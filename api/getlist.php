<?php 
	include '../conexion/conexion.php';

	$registros=mysql_query("SELECT * FROM registro ", $conexion) or
    die(json_encode($respuesta));

    $filas=array();
	while ($reg=mysql_fetch_assoc($registros))
	{
	   $filas[]=array_map('utf8_encode', $reg);
	}

	echo json_encode($filas);
 ?>