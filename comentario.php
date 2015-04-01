<?php 
require("conexion/conexion.php");
/*
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$comentario = $_POST['comentario'];
echo $nombre.' '.$correo.' '.$comentario;
*/


if($_POST['nombre'] !== null && $_POST['email'] !== null  && $_POST['comentario'] !== null){
	mysql_query ("INSERT INTO registro (`nombre`, `email`, `comentario`) VALUES ('$_POST[nombre]', '$_POST[email]', '$_POST[comentario]') ");
	echo '<h4>Hemos recibido tu comentario. Gracias!!!</h4>';

}else{

	echo '<h4>Datos no se pudieron guardar!!!</h4>';
}

?>