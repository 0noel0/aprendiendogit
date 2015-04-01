<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aprendiedo git con github</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"	></script>
     <script src="js/jquery.min.js"	></script>
   
</head>
<body>
	<h1>REPOSITORIO INICIAL</h1>
	<img class="img-responsive img-circle" width="600" height="200" src="http://i.tuselva.com/2015/01/20-datos-curiosos-que-no-sab%C3%ADas-de-los-gatos.jpg">
	<h3>Hola git init </h3>

	<p>Aprendiendo he instalando git hub en un servidor personal en la nube</p>


	<h1>Dejar comentarios a Gatos !!!</h1>

<form  class ='form-horizontal' action="comentario.php" method="post" name="formulario">

<div class="form-group">


<div class="form-group">
	<label class='col-sm-2 control-label' for="nombre1">Nombre</label>
		<div class="col-sm-6">
    		<input name='nombre' type="text" class="form-control" id="nombre1" placeholder="Nombre">
    	</div>
  </div>

  <div class="form-group">
    <label for="correo1" class='col-sm-2 control-label'>Correo</label>
     <div class="col-sm-6">
    <input type="email" name='email' class="form-control" id="correo1" placeholder="Correo Electronico">
    </div>	
  </div>

  <div class="form-group">
    <label for="textarea1" class='col-sm-2 control-label'>Comentario</label>
	<div class="col-sm-6">
    	<textarea name='comentario' class="form-control" rows="3"></textarea>
  </div>
 </div>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

  <button type="submit" class="btn btn-primary"> <i class='glyphicon glyphicon-bookmark'></i>Comentar</button>

  </div>
  </div>

</form>










	


	
</body>
</html>