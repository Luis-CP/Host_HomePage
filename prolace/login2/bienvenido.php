
<?php
session_start();
 
$id_aspirante1=$_SESSION['id_aspirante'];
if(!isset($id_aspirante1)){
	header('location:../index.html');
		error_reporting(0);
		die();
	}
 

?>

<!DOCTYPE>
<html>
<head>
 


 
  <title>Postulación del aspirante</title>
  <meta charset="UTF-8">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/prolase.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/login/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/login/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/login/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/login/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/login/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/login/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/login/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/login/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util1.css">
  <link rel="stylesheet" type="text/css" href="css/main1.css">
<!--===============================================================================================-->
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bienvenido  al sistema:<?php echo ''.$id_aspirante1; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="btn btn-outline-primary my-2 my-sm-0" href="resultados.php">Descargar resultados de postulación</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
     
	<a class="btn btn-outline-primary my-2 my-sm-0" href="salir.php">  Salir</a>
    </form>
  </div>
</nav>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(images/bg-011.jpg);">
          <span class="login100-form-title-1">
       Postulación del aspirante
          </span>
        </div>

        <form action="../login2/guardarpost.php"  method="post" class="login100-form validate-form">
          <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
            <span  >Cedula:</span>
            <input required class="input100" type="number" name="id_aspirante"  value="<?php echo''.$id_aspirante1; ?>">
  
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate = "Password is required">
            <span  >Cargo de postulación:</span>
			<select   required class="input100" name="cargo_postulacion">
			<option>
              Empacador
			</option>
			<option>
              Recepcionista de productos lacteos
			</option>
		 
			
			</select>
            <span class="focus-input100"></span>
		  </div>
		  <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span  >Lugar de postulación:</span>
			<select  required  class="input100" name="lugar_postulacion">
			<option>
             Latacunga-Mulalo
			</option>
		 
			
			</select>
            <span class="focus-input100"></span>
		  </div>
	 
		  
		  <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span  >Años de experiencia:</span>
		 
			<select  required value="Seleccione los años"class="input100" name="aniosExperiencia_postulacion">
			<option>
               1
			</option>
			<option>
              2
			</option>
			<option>
                3
			</option>
			<option>
                4
			</option>
			<option>
                5
			</option>
			
			</select>
            <span class="focus-input100"></span>
		  </div>
		 
		  
		  <div class="wrap-input100 validate-input m-b-18" data-validate = "Ingrese el area del conocimiento">
            <span >Area del conocimiento:  </span>
            <input class="input100" type="text" name="area_conocimiento" placeholder="Ingrese el area del conocimiento" required>
            <span class="focus-input100"></span>
		  </div>

		    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span  >Estado de la postulación: </span>
			<select  required value="Seleccione los años"class="input100" name="estado_postulacion" required>
			<option>
              Pendiente
			</option>
			 
			
			</select>  
            <span class="focus-input100"></span>
		  </div>
          
		  <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
		  <label class="form-check-label" for="exampleCheck1">Acepta termino y condiciones</label>
			<input onclick="clic();" type="checkbox" class="input100"  name="condiciones" id="exampleCheck1" required>
    
            <span class="focus-input100"></span>
		  </div>
		   

          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
             Guardar
			</button>
			<button class="login100-form-btn">
             Cancelar
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
	   
  <script  >

function  clic () {
     alert ('Debe de dar información  totalmente veridica para su postulación caso contrario se fuese aceptado  se anular su  postulación');
   }


  </script>
  
<!--===============================================================================================-->
  <script src="vendor/login/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/login/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/login/bootstrap/js/popper.js"></script>
  <script src="vendor/login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/login/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/login/daterangepicker/moment.min.js"></script>
  <script src="vendor/login/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/login/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main1.js"></script>


</body>
</html>




