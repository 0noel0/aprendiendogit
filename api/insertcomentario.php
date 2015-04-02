
<?php

include '../conexion/conexion.php';

$nombre = $_REQUEST['NOMBRE'];
$email = $_REQUEST['EMAIL'];
$comentario = $_REQUEST['COMENTARIO'];

$resultado = mysql_query("INSERT INTO registro (nombre, email, comentario)value('$nombre', '$email','$comentario')") or die('No se pudieron guardar los datos');

mysql_close();





?>

