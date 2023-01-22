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
<form      class="login100-form validate-for
        m">
          

		    <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span  >Resultado: </span>
            <img src="pdf1.png" width="160px" heigth="160px">
			 
		   
            <span class="focus-input100"></span>
		  </div>
          
		      <div class="wrap-input100 validate-input" data-validate = "Ingrese la url de la hoja de la url">
          <span  >Acepta termino y condiciones  </span>
          
          <input  required id="myCheck" class="input100"  type="checkbox" name="myCheck"  requiredata-validate = "Seleccione acepta terminos y condiciónes" >
          <span class="focus-input100"></span>
        </div>
		   
<br><b<br><br><br>
          <div class="container-login100-form-btn">
  
          <a        onclick="myFunction();"  class="login100-form-btn "  >Descargar  resultado</a>
		 
      <a  class="login100-form-btn"   onclick=" window.location= 'bienvenido.php';">Cancelar</a>
      <script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
      window.location= 'pdf/index.php';
  } else {
    alert("No aceptado  terminos y condiciones")
  }
}
</script>
         
          </div>
        </form>
      </div>
    </div>
  </div>
  
	   
  <script>

function  clic () {
     alert ("Debe de dar información  totalmente veridica para su postulación caso contrario se fuese aceptado  se anular su  postulación");
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




