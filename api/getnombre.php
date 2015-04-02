
<?php

include '../conexion/conexion.php';

$datos = mysql_query("SELECT * FROM registro;", $conexion)or die('No se pudieron mostrar!!!');
$arreglo = array();

while ($reg = mysql_fetch_assoc($datos)) {
	$arreglo[] =  array_map('utf8_encode', $reg);
	# code...
}

echo json_encode($arreglo);





?>
