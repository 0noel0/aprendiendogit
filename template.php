<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aprendiendo Git</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="img/favicon.png" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body style="background: url('img/fondo.jpg') no-repeat center center; background-size: cover; background-attachment:fixed;">

<div class="container">
  <div class="jumbotron" style="background: url('img/misifu.jpg') no-repeat center center; background-size: 100%;">
    <h1 style="color: white;">Comenta sobre Gatos :D !</h1>      
    <p style="color: black;">Esta página fue creada con la intencion de aprender a usar Git con multiples desarrolladores...</p>      
    <a href="listado.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-search"></span> Ver comentarios</a>
  </div>

  <ul class="nav nav-tabs">
    <li class="active"><a href="#">Bienvenido</a></li>
  </ul>

  <div class="row">
    <h1>Dejar comentarios a Gatos !!!</h1>

    <form  class ='form-horizontal' action="comentario.php" method="post" name="formulario">


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
</div>

</body>
</html>
