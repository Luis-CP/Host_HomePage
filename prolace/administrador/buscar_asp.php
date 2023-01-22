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

<?php include 'conexion1.php';?>
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
      <a href="panel_control.php"><img class="main-logo" src="img/notification/prolase.png" alt="IMG-LOGO" width="75" height="60"></a>

        <a class="navbar-brand" href="panel_control.php">Prolase</a>
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
 <h4 class="mt-5">Buscar postulación</h4>
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
       <a class="btn btn-primary mb-2" href="panel_control.php" >Cancelar</a> 
    </div>
  </div>
</form>
  </li>

</ul>


<?php
 
if(!empty($_POST))
{
      $aKeyword = explode(" ", $_POST['PalabraClave']);
      $query ="SELECT * FROM postulacion_aspirante WHERE id_aspirante like '%" . $aKeyword[0] . "%' OR cargo_postulacion  like '%" . $aKeyword[0] . "%'";
      
     for($i = 1; $i < count($aKeyword); $i++) {
        if(!empty($aKeyword[$i])) {
            $query .= " OR apellido_aspi like '%" . $aKeyword[$i] . "%'";
        }
      }
     
     $result = $db->query($query);
     echo "<br>Has buscado la palabra clave:<b> ". $_POST['PalabraClave']."</b>";
     echo "<br><table class='table table-striped'>";
     $nombre="id_aspirante";
     $id="id_postulacion";
     $apellido="cargo_postulacion";
     $edad="lugar_postulacion";
     $email="Años de experiencia";
     $cargo="Area_conocimiento";

     $exp="estado_postulacion";
    
     echo "<tr><td>".$id." </td><td>". $nombre . "</td><td>". $apellido. "</td><td>". $edad."</td><td>".$email ."</td><td>". $cargo."</td><td>". $exp."</td></tr>";     
     if(mysqli_num_rows($result) > 0) {
        $row_count=0;

        echo "<br><br>Postulante encontrado";
    
       
        While($row = $result->fetch_assoc()) {   
            $row_count++;                         
            echo "<tr></td><td>". $row['id_postulacion'] . "</td><td>". $row['id_aspirante'] . "</td><td>". $row['cargo_postulacion']."</td><td>". $row['lugar_postulacion']."</td><td>". $row['aniosExperiencia_postulacion']."</td><td>". $row['area_conocimiento']."</td><td>". $row['estado_postulacion']."</td></tr>";
        }
        echo "</table>";
	
    }
    else {
        echo "<br>Aspirante no encontrado";
		
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