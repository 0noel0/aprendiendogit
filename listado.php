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
<body>

<div class="container">
  <div class="jumbotron" style="background: url('img/misifu.jpg') no-repeat center center; background-size: 100%;">
    <h1 style="color: white;">Comenta sobre Gatos :D !</h1>      
    <p style="color: black;">Esta página fue creada con la intencion de aprender a usar Git con multiples desarrolladores...</p>      
   	<a href="template.php" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-pencil"></span> Comentar</a>

  </div>

  <ul class="nav nav-tabs">
    <li class="active"><a href="#">Comentarios</a></li>
  </ul>

  <div class="row">
  	<h1>Lista de Comentarios a Gatos :D </h1>
   <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Comentario</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $data = file_get_contents("http://localhost/aprendiendogit/api/getlist.php");
      $products = json_decode($data, true);

      foreach ($products as $row) {
         echo "<tr>"; 
          echo "<td>$row[id]</td>"; 
          echo "<td>$row[nombre]</td>";  
          echo "<td>$row[email]</td>";  
          echo "<td>$row[comentario]</td>";  
        echo "</tr>"; 
      }
      ?>
    </tbody>

  </table>
  <footer>

  </footer>
</div>

</body>
</html>
