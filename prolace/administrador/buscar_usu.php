<?php
session_start();

echo "Bienvenidos";
$nombre=$_SESSION['id'];
echo 'vairable es :____'.$nombre;
echo '<a href="../index.html">salir</a>';
  if(!isset($nombre)){
  header('location:../index.html');
    error_reporting(0);
    die();
  }


?>
<?php 
 
include 'conexion1.php';?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
<title>Buscar aspirante</title>
<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />


  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a href="panel_control.html"><img class="main-logo" src="img/notification/prolase.png" alt="IMG-LOGO" width="75" height="60"></a>
        <a class="navbar-brand" href="panel_control.html">Prolase</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
           
            <li class="nav-item active">
              <a class="nav-link" href="panel_control.php">Panel de control <span class="sr-only">(current)</span></a>
            </li>  
                     
          </ul>
         
        </div>
      </nav>
    </header>

    <!-- Begin page content -->

<div class="container">
 <h4 class="mt-5">Buscar Usuario</h4>
 <hr>

<div class="row">
  <div class="col-12 col-md-12">
<!-- Contenido -->   



<ul class="list-group">
  <li class="list-group-item">
<form method="post">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Nombre</label>
      <input required name="PalabraClave" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese palabra clave">  
      <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
    </div>
   
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Consultar</button>
      <a href="panel_control.php" onclick="alert('Consulta cancelada');"class="btn btn-primary mb-2">Cancelar</a>
    </div>
  </div>
</form>
  </li>

</ul>


<?php
 
if(!empty($_POST))
{
      $aKeyword = explode(" ", $_POST['PalabraClave']);
      $query ="SELECT * FROM usuario WHERE id_usuario like '%" . $aKeyword[0] . "%' OR email like '%" . $aKeyword[0] . "%'";
      
     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " OR email like '%" . $aKeyword[$i] . "%'";
        }
      }
     
     $result = $db->query($query);
     echo "<br>Has buscado la palabra clave:<b> ". $_POST['PalabraClave']."</b>";
                     
     if(mysqli_num_rows($result) > 0) {
        $row_count=0;
        echo "<br><br><center>Usuario encontrado</center> ";
        echo "<br><br><center>El administrador   ha realizado  una busqueda</center> ";
        echo "<br><table class='table table-striped'>";
        $id="Id";
     $usuario="Usuario";
     $email="Email";
     echo "<tr><td>".$id." </td><td>". $usuario . "</td><td>". $email."</td></tr>";     

        While($row = $result->fetch_assoc()) {   
            $row_count++;                         
            echo "<tr><td>".$row['id_usuario']." </td><td>". $row['user'] . "</td><td>". $row['email'] . "</td></tr>";
            
        }
        echo "</table>";
	
    }
    else {
      echo"<center>";
        echo "<br>Usuario no encontrado";
        echo "<br>Se ha realizado  una busqueda de usuario";
		    echo"</center>";
    }
}
 
?>



<!-- Fin Contenido --> 
</div>
</div><!-- Fin row -->
</div><!-- Fin container -->
    <footer class="footer">
      <div class="container">
        <span class="text-muted"><p>Derechos reservados <a href="panel_control.html" target="_blank">Prolase</a></p></span>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    </body>
</html>