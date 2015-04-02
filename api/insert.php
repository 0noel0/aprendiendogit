
<?php 
	include '../conexion/conexion.php';

	$nombre=$_REQUEST['NOMBRE'];
	$email=$_REQUEST['EMAIL'];
	$comentario=$_REQUEST['COMENTARIO'];

	$resultado=mysql_query("INSERT INTO aprendiendogit.registro (id, nombre, email, comentario) VALUES (NULL, '$nombre', '$email', '$comentario');", $conexion )
	or die (json_encdoe("Problemas al insertar"));

    mysql_close($conexion);
 ?>

