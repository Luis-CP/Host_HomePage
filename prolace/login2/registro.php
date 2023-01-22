<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact V18</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="icon" type="image/png" href="images/icons/prolase.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


  <div class="container-contact100">
    <div class="wrap-contact100">
      <form action="validar.php" method="post"class="contact100-form validate-form" onsubmit="return checkForm(this);>
        <span class="contact100-form-title">
         Registro del aspirante
        </span>


        <div class="wrap-input100 validate-input" data-validate="Ingrese su cedula">
          <label class="label-input100" for="name">Cedula</label>
          <input id="name" class="input100" type="text"  minlength="10"  name="id_aspirante" placeholder="Ingrese el numero de cedula...">
          <span class="focus-input100"></span>
        </div>

    <div class="wrap-input100 validate-input" data-validate = "Ingrese  su nombre">
          <label class="label-input100" for="email">Nombre del aspirante</label>
          <input id="email" class="input100" type="text" name="nombre_aspi" placeholder="Ingrese el nombre del aspirante...">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Ingrese  su apellido">
          <label class="label-input100" for="email">Apellido del aspirante</label>
          <input id="email" class="input100" type="text" name="apellido_aspi" placeholder="Ingrese el apellido...">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Ingrese su ciudad">
          <label class="label-input100" for="email">Provincia de aspirante</label>
          <select  class="input100" name="ciudad" required>  
 <option value="Azuay" selected="selected">Azuay</option>  
 <option value="Cañar">Cañar</option>  
 <option value="Loja">Loja</option>  
 <option value="Carchi">Carchi</option>  
 <option value="Imbabura">Imbabura</option>  
 <option value="Pichincha">Pichincha</option>  
 <option value="Cotopaxi">Cotopaxi</option>  
 <option value="Tungurahua">Tungurahua</option>  
 <option value="Bolívar">Bolívar</option>  
 <option value="Chimborazo">Chimborazo</option>  
 <option value="Sto. Domingo de los Tsachilas">Sto. Domingo de los Tsachilas</option>  
 <option value="Esmeraldas">Esmeraldas</option>  
 <option value="Manabí">Manabí</option>  
 <option value="Guayas">Guayas</option>  
 <option value="Los Ríos">Los Ríos</option>  
 <option value="El Oro">El Oro</option>  
 <option value="Santa Elena">Santa Elena</option>  
 <option value="Sucumbíos">Sucumbíos</option>  
 <option value="Napo">Napo</option>  
 <option value="Pastaza">Pastaza</option>  
 <option value="Orellana">Orellana</option>  
 <option value="Morona Santiago">Morona Santiago</option>  
 <option value="Zamora Chinchipe">Zamora Chinchipe</option>  
 <option value="Galápagos">Galápagos</option>  
 <option value="Antártida Ecuatoriana">Antártida Ecuatoriana</option>  
 </select> 
 </div> 
        
       
        <div class="wrap-input100 validate-input" data-validate = "Ingrese su correo por ejemplo: daniel.calero@yahoo.com">
          <label class="label-input100" for="email">Email del aspirante</label>
          <input id="email" class="input100" type="email" name="email_aspi" placeholder="Ingrese el email...">
          <span class="focus-input100"></span>
        </div>

       
        <div class="wrap-input100 validate-input" data-validate = "Ingrese su numero de telefono">
          <label class="label-input100" for="message">Numero de telefono</label>
          <input id="number" class="input100" type="numero" minlength="10"  name="telefono_aspi" placeholder="Ingrese el numero de telefono..."> 
          <span class="focus-input100"></span>
        </div>
       
        <div class="wrap-input100 validate-input" data-validate = "Ingrese su contraseña">
          <label class="label-input100" for="message">Contraseña</label>
          <input id="password1" class="input100" type="password" name="password1" placeholder="Ingrese la contraseña..."> 
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Ingrese la url de la hoja de la url">
          <label class="label-input100" for="email">Hoja de vida  </label>
          <input id="email" class="input100" type="url" name="hoja" placeholder="Ingrese la url de la hoja de vida">
           
        </div>
        <div class="wrap-input100 validate-input" data-validate = "Ingrese la url de la hoja de la url">
          <label class="label-input100" for="email">Acepta termino y condiciones  </label>
          <input id="email" class="input100"  type="checkbox" name="condiciones"  requiredata-validate = "Seleccione acepta terminos y condiciónes" >
          <span class="focus-input100"></span>
        </div>
   
        <div class="container-contact100-form-btn" >
          <button class="contact100-form-btn">
      Registrarse 
          </button>
        </div>
        <div class="container-contact100-form-btn" >
          <button class="contact100-form-btn">
          <a href=".../login1/index.php" class="contact100-form-btn" > Crear  una cuenta</a>
          </button>
        </div>

        <div class="contact100-form-social flex-c-m">
          <a href="#" class="contact100-form-social-item flex-c-m bg1 m-r-5">
            <i class="fa fa-facebook-f" aria-hidden="true"></i>
          </a>

          <a href="#" class="contact100-form-social-item flex-c-m bg2 m-r-5">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>

          <a href="#" class="contact100-form-social-item flex-c-m bg3">
            <i class="fa fa-youtube-play" aria-hidden="true"></i>
          </a>
        </div>
      </form>

      <div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
      </div>
    </div>
  </div>





<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <script>
    $(".js-select2").each(function(){
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });
    })
    $(".js-select2").each(function(){
      $(this).on('select2:open', function (e){
        $(this).parent().next().addClass('eff-focus-selection');
      });
    });
    $(".js-select2").each(function(){
      $(this).on('select2:close', function (e){
        $(this).parent().next().removeClass('eff-focus-selection');
      });
    });

  </script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
</body>
</html>



