<?php 
$conexion = mysql_connect('127.0.0.1', 'root', '1001') or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';

mysql_select_db('gitinit') or die('No se pudo seleccionar la base de datos');



?>
