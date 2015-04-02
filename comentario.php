<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<title>Registro</title>
</head>
<body>
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
	$mensaje = '<h4>Hemos recibido tu comentario. Gracias!!!</h4>';

}else{

	$mensaje = '<h4>Datos no se pudieron guardar!!!</h4>';
}

?>


<script type="text/javascript">
// <![CDATA[
window.onload = function() {
    
    $('#myModal').modal('show');

    }
</script>




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registro!!!</h4>
      </div>
      <div class="modal-body">
      <?php
     	 echo $mensaje;
      ?>
 		
      </div>
      <div class="modal-footer">
      <a href="index.php" class="btn btn-info">Cerrar</a>
      
      </div>
    </div>
  </div>
</div>





</body>
</html>


